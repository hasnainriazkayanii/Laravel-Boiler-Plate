<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;


class MailConfigProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {

        $configuration = getSettings('email-configs');
        // print_r($configuration);exit;
        if($configuration) {
            $config = array(
                'driver'     =>     $configuration->mailer,
                'host'       =>     $configuration->host,
                'port'       =>     $configuration->port,
                'username'   =>     $configuration->user_name,
                'password'   =>     $configuration->password,
                'encryption' =>     $configuration->encryption,
                'from'       =>     array('address' => $configuration->sender_email, 'name' => $configuration->sender_name),
            );
            Config::set('mail', $config);
        }
    }
}
