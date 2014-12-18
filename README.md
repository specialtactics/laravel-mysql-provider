# Laravel MySQL Provider Extended
Improved and Extended MySQL Builder & Grammar


## Installation

Install via composer - edit your `composer.json` to require the package.

```js
"require": {
    "scm/mysqle": "dev-master"
}
```

Then run `composer update` in your terminal to pull it in.

Once this has finished, you will need to add the service provider to the `providers` array in `app/config/app.php` as follows:

```php
'SCM\MySQLe\DatabaseServiceProvider'
```
