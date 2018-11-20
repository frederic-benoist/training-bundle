# PrestaShop 1.7 TrainingBundle

Sample Symfony bundle for PrestaShop 1.7.

## Install

**DON'T USE ON PRODUCTION SERVER**

### Add in composer.json :
```
"require": {
    ....
    "frederic-benoist/training-bundle": "dev-master"
}

"repositories" : [
    {
        "type" : "vcs",
        "url" : "https://github.com/frederic-benoist/training-bundle.git"
    }
],
```
Lancer composer .
```
    composer require frederic-benoist/training-bundle
```
### Add in app/AppKernel.php

```php
    ...
    new TrainingBundle\TrainingBundle(),
```
### Add in app/config/routing.yml
```
    ...
    training:
        resource: "@TrainingBundle/Resources/config/routing.yml"
```

### clear symfony cache

```
php bin/console cache:clear --env=prod
php bin/console cache:clear --env=dev
```

#### Try new controller

http://....myshop.../admin.../index.php/hello

## Licensing

Licensed under the [Open Software License (OSL) v3.0](http://www.prestashop.com/en/osl-license).

## About Prestashop

[Prestashop](http://www.prestashop.com) is an ecommerce application licensed under the OSL v3.0 license. ©PrestaShop, Inc.
