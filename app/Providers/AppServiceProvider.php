<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Mail\MailManager;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind('swift.transport', function ($app) {
            $config = $app['config']['mail.mailers.smtp'];
            
            $transport = new \Swift_SmtpTransport(
                $config['host'],
                $config['port'],
                $config['encryption']
            );
            
            $transport->setUsername($config['username'])
                     ->setPassword($config['password'])
                     ->setStreamOptions([
                         'ssl' => [
                             'verify_peer' => false,
                             'verify_peer_name' => false,
                             'allow_self_signed' => true
                         ]
                     ]);
            
            return $transport;
        });
    }
}