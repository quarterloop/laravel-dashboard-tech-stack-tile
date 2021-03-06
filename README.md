
# A short description of the tile

A friendly explanation of what your tile does.

This tile can be used on [the Laravel Dashboard](https://docs.spatie.be/laravel-dashboard).

## Installation

You can install the package via composer:

```bash
composer require quarterloop/laravel-tech-stack-tile
```

## Usage

In your dashboard view you use the `livewire:tech-stack-tile` component.

```html
<x-dashboard>
    <livewire:tech-stack-tile position="a1:a1" />
</x-dashboard>
```


Use the php artisan command to fetch Page Speed data.

``` bash
php artisan dashboard:fetch-tech-stack-data
```

Use this snippet to schedule the command in app/Console/Commands/Kernel.php
``` bash
$schedule->command(\Quarterloop\TechStackTile\Commands\FetchTechStackCommand::class)->daily();
```

Also add the following code snippet in app/console/kernel.php under "$commands" in a new line:
``` bash
\Quarterloop\TechStackTile\Commands\FetchTechStackCommand::class,
```


Insert this in routes/web.php - this enables the manual-refresh-button in tile
``` bash
Route::get('/refresh-tech-stack', function() {
  Artisan::call('dashboard:fetch-tech-stack-data');
  return back();
})->name('fetch-tech-stack');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email wallisch@skouz.de instead of using the issue tracker.

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
