# Laranotes

[![Latest Version on Packagist](https://img.shields.io/packagist/v/elijahcruz/laranotes.svg?style=flat-square)](https://packagist.org/packages/elijahcruz/laranotes)
[![Total Downloads](https://img.shields.io/packagist/dt/elijahcruz/laranotes.svg?style=flat-square)](https://packagist.org/packages/elijahcruz/laranotes)
![GitHub Actions](https://github.com/elijahcruz/laranotes/actions/workflows/main.yml/badge.svg)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require elijahcruz/laranote
```

## Usage

First you need to public the migration file:

```bash
php artisan vendor:publish --tag=laranotes-migrations
```

Then you can run the migration:

```bash
php artisan migrate
```

The you can add the `HasNotes` trait to any model that you want to use notes:

```php
<?php

use Illuminate\Database\Eloquent\Model;
use Elijahcruz\Laranote\HasNotes

class User extends Model
{
    use HasNotes;
}
```

Now you can create, get, update, and delete the notes using the following methods:

```php
$user->notes()->get();
$user->note(1)->first();
$user->createNote('Title', 'Body');
$user->updateNote(1, 'This is an updated note', 'This is the updated body');
$user->deleteNote(1);
``` 

For the create and update notes, the note is

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email elijah@ec-ws.com instead of using the issue tracker.

## Credits

-   [Elijah Cruz](https://github.com/elijahcruz)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
