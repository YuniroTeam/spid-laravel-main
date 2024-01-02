<?php
/**
 * This class implements a Laravel Service Provider for SPIDAuth Package.
 *
 * @license BSD-3-clause
 */

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Middleware;
use App\SPIDAuth;
use App\CustomersMetadata;

class SPIDServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     */
    public function boot(Router $router)
    {
        $this->loadRoutesFrom(base_path('routes/spid-auth.php'));

        $this->loadViewsFrom(dirname(__DIR__) . '/resources/views', 'spid-auth');
        $this->loadTranslationsFrom(dirname(__DIR__) . '/resources/lang', 'spid-auth');

        $router->aliasMiddleware('spid.auth', Middleware::class);

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
            /*            dd(base_path('routes/spid-auth.php'));*/

            $this->publishes([$configAuth => config_path('spid-auth.php')], 'spid-config');
            $this->publishes([$assets => public_path('vendor/spid-auth')], 'spid-assets');

            return new SPIDAuth();
        });

        /*$this->commands(\Italia\SPIDAuth\Console\CommandExample::class);*/
    }
}
