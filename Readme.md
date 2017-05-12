

## Add with composer :

"require": {
    ....
    "frederic-benoist/TrainingBundle": "dev-master"
}

"repositories" : [{
        "type" : "vcs",
        "url" : "https://github.com/frederic-benoist/TrainingBundle.git"
    }],


## Add in AppKernel.php

    new TrainingBundle\TrainingBundle(),

##Add in routing.yml

training:
    resource: "@TrainingBundle/Resources/config/routing.yml"
