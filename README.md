# EditorMD extension for laravel-admin

This is a `laravel-admin` extension that integrates [EditorMD](http://pandao.github.io/editor.md/) into the `laravel-admin` form.
To adopt to laravel-admin, I made some tiny changes in editormd aseets.
Please feel free to contact me if you encounter any difficulties when you use this extension.

## Screenshot

![screenshot](https://user-images.githubusercontent.com/4065724/52049451-d02e8380-2588-11e9-96b8-1cf66b18f934.jpg)

## Installation

```bash
composer require sharemant/laravel-admin-ext-editormd
php artisan vendor:publish --tag=laravel-admin-ext-editormd
```

## Configuration

In the `extensions` section of the `config/admin.php` file, add some configuration that belongs to this extension.

### Example

```php
<?php

// file: {Your_project}/config/admin.php

return [

        'extensions' => [

            'editormd' => [
        
                // Set to false if you want to disable this extension
                'enable' => true,
        
                // Set to true if you want to take advantage the screen length for your editormd instance.
                'wideMode' => false,
        
                // Set to true when the instance included in larave-admin tab component.
                'dynamicMode' => false,
        
                // Editor configuration write in PHP array grammar
                'config' => [
                    'path' => '/vendor/laravel-admin-ext/editormd/editormd-1.5.0/lib/',
                    'width' => '100%',
                    'height' => 600,
                ],
        
                // Editor configuration write in Javascript object grammar
                'configJS' => '{onload: function() { alert("Hello!");}}'
            ]

    ]

];
```

### Notice

The `config` (PHP array grammar) and `configJS` (Javascript object grammar) options will be merged into a new JavaScript object.

You can set the configuration in the grammar you prefer.

If you write a configuration item that corresponds to a static value, best practice is to use the PHP array syntax.

Instead, when it comes to Editor's listen function, you are left with the option of using JS's object syntax.


### Default configuration list

If you want to enable more functions of EditorMd , you could add the following configurations to your config.

The configuration of the editor can be found in [EditorMD Documentation](http://pandao.github.io/editor.md/).

## Usage

Use it in the form form:
```php
$form->editormd('content');
```

## ChangeLog
2020-07-18(East 8 time)

fix: fix the bug that the associated properties of the model are not available.

feat: support JS Configuration Editor mode. (support for editor event monitoring)

feat: redesign the UI of the component to be consistent with Laravel-admin.

docs: improve basic documentation

docs: add Chinese readme document.

## License
Licensed under [The MIT License (MIT)](LICENSE).
