<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Broadcaster
    |--------------------------------------------------------------------------
    |
    | This option controls the default broadcaster that will be used by the
    | framework when an event needs to be broadcast. You may set this to
    | any of the connections defined in the "connections" array below.
    |
    | Supported: "pusher", "redis", "log", "null"
    |
    */

    'default' => env('BROADCAST_DRIVER', 'null'),

    /*
    |--------------------------------------------------------------------------
    | Broadcast Connections
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the broadcast connections that will be used
    | to broadcast events to other systems or over websockets. Samples of
    | each available type of connection are provided inside this array.
    |
    */

    'connections' => [

        /**
         * Initializes a new Pusher instance with key, secret, app ID and channel.
         * You can optionally turn on debugging for all requests by setting debug to true.
         *
         * @param string $auth_key
         * @param string $secret
         * @param int    $app_id
         * @param array  $options  [optional]
         *                         Options to configure the Pusher instance.
         *                         Was previously a debug flag. Legacy support for this exists if a boolean is passed.
         *                         scheme - e.g. http or https
         *                         host - the host e.g. api.pusherapp.com. No trailing forward slash.
         *                         port - the http port
         *                         timeout - the http timeout
         *                         useTLS - quick option to use scheme of https and port 443.
         *                         encrypted - deprecated; renamed to `useTLS`.
         *                         cluster - cluster name to connect to.
         *                         notification_host - host to connect to for native notifications.
         *                         notification_scheme - scheme for the notification_host.
         * @param string $host     [optional] - deprecated
         * @param int    $port     [optional] - deprecated
         * @param int    $timeout  [optional] - deprecated
         *
         * @throws PusherException Throws exception if any required dependencies are missing
         */
        'pusher' => [
            'driver' => 'pusher',
            'key' => env('PUSHER_APP_KEY'),
            'secret' => env('PUSHER_APP_SECRET'),
            'app_id' => env('PUSHER_APP_ID'),
            'options' => [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'encrypted' => true,
                'useTLS' => true,
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'log' => [
            'driver' => 'log',
        ],

        'null' => [
            'driver' => 'null',
        ],

    ],

];
