<?php

namespace App\Subscribers;

use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Auth\Events\Failed;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Auth\Events\Authenticated;

class User
{
    public function onLogin($event) 
    {
        $event->user->last_login = now();
        $event->user->save();
    }

    public function onLogout($event) 
    {
        $event->user->last_logout = now();
        $event->user->save();
    }

    public function onFailed($event) {}
    public function onLockout($event) {}
    public function onAttempting($event) {}

    public function onAuthenticated($event)
    {
        if (!$event->user->enabled) {
            // TODO: Add a message to notify the user that his account is disabled.
            auth()->logout();
        }
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $dispatcher
     */
    public function subscribe($dispatcher)
    {
        $class = self::class;
        $events = [
            Login::class => "{$class}@onLogin",
            Logout::class => "{$class}@onLogout",
            Failed::class => "{$class}@onFailed",
            Lockout::class => "{$class}@onLockout",
            Attempting::class => "{$class}@onAttempting",
            Authenticated::class => "{$class}@onAuthenticated"
        ];

        foreach ($events as $event => $listener) {
            $dispatcher->listen($event, $listener);
        }
    }
}