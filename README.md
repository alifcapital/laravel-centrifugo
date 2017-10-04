# README #

Laravel integration for [phpcent](https://github.com/centrifugal/phpcent)

### How do I get set up? ###

* Add repository url to your composer.json

```
composer.json

"require": {
	...
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