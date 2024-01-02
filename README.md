# spid-laravel-main


Avviare le seguenti fasi per poter usufruire del plugin 

1<br /> 
in composer.json deve essere impostato: <br />

<code> ...
"extra": {
"enable-patching": "true"
},
...
</code>

2<br />
aggiungere al composer.json queste opzioni: <br />
<code>
"minimum-stability": "beta",
"prefer-stable": true
</code>

3: Inclusione del plugin nel composer.json<br />
<code>
"require": {
  "yuniro/spid-laravel": "dev-main"
},<br />
"repositories": [
{
"type": "vcs",
"url": "https://github.com/YuniroTeam/spid-laravel-main"
}
],
</code>

4: Una volta installata la repository con composer install/update
avviare la pubblicazione del vendor.
<code>
php artisan vendor:publish
</code>
<p>Il sistema installerà i 3 file di config :
<code><br />spid-auth.php<br /> spid-idps.php<br />spid-saml.php
</code></p>
<p> Il service provider <b>SPIDServiceProvider</b> ( a cui dobbiamo cambiare il namespace ) e registrare manualmente dentro <b>config/app</b>: App\Providers\SPIDServiceProvider::class </p>
<p>Il vendor nel public in merito al design del bottone SPID </p>
<p>I due Modelli <b>SPIDAuth</b> e <b>SPIDUser</b> all'interno della cartella MODELS</p>