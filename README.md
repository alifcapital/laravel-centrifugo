# README #

Laravel integration for [phpcent](https://github.com/centrifugal/phpcent)
It allows you to use phpcent connection client as a singleton

### How do I get set up? ###

* Add repository url to your composer.json

```
composer.json

"require": {
	...
	"sl4mmer/phpcent": "dev-master",
	"alifcapital/laravel-centrifugo": "dev-master",
	...
},
"repositories": [
	{
		"type": "vcs",
		"url": "git@bitbucket.org:alifcapital/laravel-centrifugo.git"
	}
],
```

* run `composer update`
* install service provider and facade:
```
config/app.php

'providers' => [
	...
	Alif\Centrifugo\CentrifugoServiceProvider::class,
	...
],

'' => [
	...
	'Centrifugo' => Alif\Centrifugo\CentrifugoFacade::class,
	...
],
```
* add centrifugo server host and secret to .env file

```
.env

CENTRIFUGO_HOST=http://core.alif.tj:8000
CENTRIFUGO_SECRET=6eba3b47-f2b9-4304-8848-7affc4cf1f93
```

Now, you dont have to create connection with Centrifugo server manually. Connection is performed as a singleton, and you have access to it via facade.
For example, you can publish a message to channel simply like this:

```
use Centrifugo;

Centrifugo::publish('channel-name', $message);
```
Or, you can generate a token for your client side like this:
```
use Centrifugo;

$token = Centrifugo::generateClientToken($user_id, ''.time());
```