# SendPulse Laravel
Laravel Package for Sendpulse API. Provides easy access to the sendpulse/sendpulse-rest-api-php library.  


**Install With Composer**:
```sh
composer require flameplace/sendpulse-laravel
```

Define into .env
```
SENDPULSE_API_USER_ID=<your api user id>
SENDPULSE_API_SECRET=<your api secret>
```
**Usage**
``` php
Sendpulse::listAddressBooks();
```

The full list of available commands can be found [here](https://github.com/sendpulse/sendpulse-rest-api-php/blob/master/src/ApiInterface.php)