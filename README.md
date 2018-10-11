# the_spacebar
Hello World

Install composer

Install Symfony
`composer create-project symfony/skeleton the_spacebar`
`composer create-project symfony/framework-standard-edition my_project_name`

Run app immediately
`php -S 127.0.0.1:8000 -t public`

3 directory
```
 config/ config routes, services, packages
 public/ - public files here
 src/ - PHP code
 templates/ - Teig templates

 bin/ - bin/console
 var/ - cache, logs
 vendor/ - thirdparty
 ```

Installing Server
`composer require server`

Better web server
`bin/console server:run`

List of all bin/console ex. debuging
`bin/console`

Full Demo
`https://github.com/symfony/demo`

----------------------

Annotation - extra feature for routing
`composer require annotations`

Create controller faster
`bin/console make:controller`

List all routes
`bin/console debug:router`

Install Profiler
`composer require --dev symfony/profiler-pack`

Install Twig
`composer require twig`
https://twig.symfony.com/doc/2.x/

Install Debug
`composer require debug --dev`
 {{dump()}}

Removing pack
`composer unpack debug`
----------------------

Routing
Controller
Creating and Using Templates
Configuring Symfony (and Environments)

----------------------
Auto wiring
`./bin/console debug:autowiring`

----------------------
Flex / Recipies - https://symfony.sh

Security Checker
`composer require securty-checker`
`bin/console security:check`

Logger
`composer require logger`

Emailer
`composer require mailer`