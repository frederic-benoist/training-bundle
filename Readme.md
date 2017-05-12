

## Add in composer.json :
```
"require": {
    ....
    "frederic-benoist/TrainingBundle": "dev-master"
}

"repositories" : [{
        "type" : "vcs",
        "url" : "https://github.com/frederic-benoist/TrainingBundle.git"
    }],
```

## Add in app/AppKernel.php

```php
    new TrainingBundle\TrainingBundle(),
```
## Add in app/config/routing.yml
```
training:
    resource: "@TrainingBundle/Resources/config/routing.yml"
```
