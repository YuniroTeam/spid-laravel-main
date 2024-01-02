<?php
/**
 * This class implements a Laravel Service Provider for SPIDAuth Package.
 *
 * @license BSD-3-clause
 */

namespace Yuniro\SPID;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use App\Middleware;
use App\SPIDAuth;
use App\CustomersMetadata;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Bootstrap the application events.
     */
    public function boot(Router $router)
    {
        $configAuth = dirname(__DIR__) . '/config/spid-auth.php';
        $configSAML = dirname(__DIR__) . '/config/spid-saml.php';
        $configIdps = dirname(__DIR__) . '/config/spid-idps.php';
        $routeAuth = dirname(__DIR__) . '/routes/spid-auth.php';
        $lang = dirname(__DIR__) . '/resources/lang';

        $assets = dirname(__DIR__) . '/resources/assets';
        $exceptions = dirname(__DIR__) . '/src/exceptions';
        $events = dirname(__DIR__) . '/src/Events';
        $listeners = dirname(__DIR__) . '/src/Listeners';
        $models = dirname(__DIR__) . '/src/Models';
        $serviceProvider = dirname(__DIR__) . '/src/SPIDServiceProvider.php';

        $this->mergeConfigFrom($configAuth, 'spid-auth');
        $this->mergeConfigFrom($configSAML, 'spid-saml');
        $this->mergeConfigFrom($configIdps, 'spid-idps');

        /*$this->loadRoutesFrom(base_path('routes/spid-auth.php'));*/
        $this->loadRoutesFrom(dirname(__DIR__) . '/routes/spid-auth.php');
        $this->loadViewsFrom(dirname(__DIR__) . '/resources/views', 'spid-auth');
        $this->loadTranslationsFrom(dirname(__DIR__) . '/resources/lang', 'spid-auth');

        $this->publishes([
            $configAuth => config_path('spid-auth.php'),
            $configSAML => config_path('spid-saml.php'),
            $configIdps => config_path('spid-idps.php'),
            $routeAuth => base_path('routes/spid-auth.php'),
            $lang => resource_path('lang/vendor/spid-auth'),
            $assets => public_path('vendor/spid-auth'),
            $serviceProvider => app_path('Providers/SPIDServiceProvider.php'),
            $exceptions => app_path('Exceptions'),
            $events => app_path('Events'),
            $models => app_path('Models'),
            $listeners => app_path('Listeners'), // Assicurati che la directory Listeners esista
        ], 'spid-resources');

        $router->aliasMiddleware('spid.auth', Models\Middleware::class);

        View::share('SPIDActionUrl', route('spid-auth_do-login'));
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('SPIDAuth', function ($app) {
            if(Request::route()){
                if(Request::route()->customer){
                    $customerMetaID = Request::route()->customer->id;
                    session()->put('customerMetaID',$customerMetaID);
                    session()->put('customerSPID_ID',$customerMetaID);
                    $cMeta = CustomersMetadata::query()->where('customer_id',$customerMetaID)->firstOrFail();
                }
            }

            $cMeta = $cMeta ?? '';

            $configAuth = config_path('spid-auth.php');
            $configSAML = config_path('spid-saml.php');
            $configIdps = config_path('spid-idps.php');
            $assets = dirname(__DIR__) . '/resources/assets';

            $this->mergeConfigFrom($configAuth, 'spid-auth');
            $this->mergeConfigFrom($configSAML, 'spid-saml');
            $this->mergeConfigFrom($configIdps, 'spid-idps');
            if($cMeta){
                config(['spid-auth.sp_entity_id'    => $cMeta->sp_entity_id]);
                config(['spid-auth.sp_base_url'     => $cMeta->sp_base_url]);
                config(['spid-auth.sp_service_name' => $cMeta->sp_service_name]);
                config(['spid-auth.sp_organization_name' => $cMeta->sp_organization_name]);
                config(['spid-auth.sp_organization_display_name' => $cMeta->sp_organization_display_name]);
                config(['spid-auth.sp_organization_url' => $cMeta->sp_organization_url]);
                config(['spid-auth.sp_certificate'      => $cMeta->sp_certificate]);
                config(['spid-auth.sp_spid_level' => 'https://www.spid.gov.it/'.$cMeta->sp_spid_level]);

                // Config spid-saml
                config(['spid-saml.entityId'    => $cMeta->sp_entity_id]);
            }

            $this->publishes([$configAuth => config_path('spid-auth.php')], 'spid-config');
            $this->publishes([$assets => public_path('vendor/spid-auth')], 'spid-assets');

            return new SPIDAuth();
        });

    }
}
