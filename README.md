# Segment.io wrapper for Laravel 4

See documentation for [Segment.io SDK](https://segment.com/docs/libraries/php/)


## Installation

This package is available via Composer:

```json
{
    "require": {
        "dmitrymomot/laravel-segmentio-wrapper": "dev-master"
    }
}
```

After that run a composer update, then in app.php add:
```php
'providers' => array(
	...,
	'DmitryMomot\LaravelSegmentioWrapper\LaravelSegmentioWrapperServiceProvider',
),
```

## License

The MIT License (MIT). Please see [License File](https://github.com/dmitrymomot/laravel-segmentio-wrapper/blob/master/LICENSE) for more information.
