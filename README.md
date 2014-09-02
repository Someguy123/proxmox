Proxmox Laravel Bindings
=======

This package is a wrapper for the ProxmoxVE package made by
ZzAntares (https://github.com/zzantares/proxmoxve). This package
allows easy use of the ProxmoxVE package by adding a
facade, and a config file.

License
------
This package is released under the LGPL. (Read LICENSE)

Tl;dr; you can use it in a proprietary project, but if you modify the actual
library, you need to make your changes open source under the LGPL.

Installation
-----
Add the package `someguy123/proxmox` to your composer.json

    $ composer require someguy123/proxmox 1.*

or

    {
        "require": {
            "someguy123/proxmox": "1.*"
        }
    }

Add the service provider and alias to your app.php

    'providers' => [
        // ...
        'Someguy123\Proxmox\ProxmoxServiceProvider',
        // ...
    ]

    'aliases' => [
        // ...
        'Proxmox'         => 'Someguy123\Proxmox\ProxmoxFacade',
        // ...
    ]

Publish the configuration file

    $ php artisan config:publish someguy123/proxmox

**(Laravel 4.3 / 5)**

    $ php artisan publish:config someguy123/proxmox

Fill in `app/config/packages/someguy123/proxmox/server.php`
or `config/packages/someguy123/proxmox/server.php` depending on your Laravel
version. This file contains the Proxmox API connection information, and must
be filled in before use. (you can also fill in the details in your environment
file)


Usage
-----

Refer to [the original package](https://github.com/zzantares/proxmoxve) for
documentation. Instead of `$proxmox->`, use `Proxmox::`

Example:

    $allnodes = Proxmox::get('/nodes');
    dd($allnodes);

Donations
--------
I accept both Bitcoin and Litecoin donations. Please be aware that I only
created the wrapper, not the original Proxmox class.


**Bitcoin:** 1SomguYYsdeBFYv9ujGt1V64PwssXco5z

**Litecoin:** LYmpJZm1WrP5FSnxwkV2TTo5SkAF4Eha31
