# FiBNotifications

[![License](https://poser.pugx.org/brozot/laravel-fcm/license)](https://packagist.org/packages/brozot/laravel-fcm)

## Introduction

FiBNotifications is an easy to use Laravel package to sending push notification with [Firebase Cloud Messaging](https://firebase.google.com/docs/cloud-messaging/) (FCM).

It provide an API to :

- Register new device
- Send notification to single device



## Installation

To get the latest version of FiBNotifications on your project, require it from "composer":


	$ composer require oukhay/fibnotifications


Or you can add it directly in your composer.json file:


	{
    	"require": {
        	     "oukhay/fibnotifications": "dev-master"
    	}
	}


### Laravel

Register the provider directly in your app configuration file config/app.php `config/app.php`:

```php
'providers' => [
	// ...

	   Oukhay\FiBNotifications\FiBNotificationsServiceProvider::class,
]
```

Add the facade aliases in the same file:

```php
'aliases' => [
	...
	'FCM'      => LaravelFCM\Facades\FCM::class,
	'FiBNotifications' => Oukhay\FiBNotifications\Facade\FiBNotification::class
]
```


> Note: The `FiBNotifications` facade is needed only if you want to send notification from your controller in your application.

Publish the package config file using the following command:


	$ php artisan vendor:publish
	
This command will generate a config file **main.php** under **/config/fib-notifications** and a migration file **0000_00_00_000000_create_fibnotifications_fibn_devices_table**.

To create the necessary table **fib_devices** run the following command :

    $ php artisan migrate


## API Documentation

You can find more documentation about the API ...


## Licence

This library is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

Some of this documentation is coming from the official documentation. You can find it completely on the [Firebase Cloud Messaging](https://firebase.google.com/docs/cloud-messaging/) Website.