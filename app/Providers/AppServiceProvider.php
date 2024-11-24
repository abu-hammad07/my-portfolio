<?php

namespace App\Providers;

use App\Http\Middleware\Role;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {


        $this->app['router']->aliasMiddleware('role', Role::class);

        // $mailsetting = SMTPModel::find(2);
        // if ($mailsetting) {
        //     $data = [
        //         'driver' => $mailsetting->mail_mailer,
        //         'host' => $mailsetting->mail_host,
        //         'port' => $mailsetting->mail_port,
        //         'encryption' => $mailsetting->mail_encryption,
        //         'username' => $mailsetting->mail_username,
        //         'password' => $mailsetting->mail_password,
        //         'from' => [
        //             'address' => $mailsetting->mail_from_appress,
        //             'name' => $mailsetting->app_name,
        //         ]
        //     ];
        //     $AppName = [
        //         'name' => $mailsetting->app_name
        //     ];
        //     Config::set('app.name', $AppName['name']);
        //     Config::set('mail', $data);
        // }


    }
}
