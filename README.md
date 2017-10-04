# README #

Laravel integration for [phpcent](https://github.com/centrifugal/phpcent)

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