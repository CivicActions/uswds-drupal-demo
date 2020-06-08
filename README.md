# uswds-drupal-demo

* Install latest Lando
* Clone this repo
* Run `lando start`
* Run `lando composer install`
* Run `lando db-import uswds-demo-db.sql.gz`

## Lando
For more information on how to use lando visit: https://docs.lando.dev/
## Running gulp
From the theme root use `lando yarn gulp`
For example, to build sass you would run `lando yarn gulp build-sass` or to watch sass use `lando yarn gulp watch`
