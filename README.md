# Phpunit Code-Coverage with Xdebug

This project is about calculator test.

```sh
phpunit -d xdebug.profiler_enable=on tests --coverage-html code-coverage
```
or
```sh
./vendor/bin/phpunit -d xdebug.profiler_enable=on tests --coverage-html code-coverage
```
or 

```sh
XDEBUG_MODE=coverage phpunit -d tests --coverage-html code-coverage
```

[![N|Solid](http://recaicansiz.com/photos/phpunit/1.png)]()
[![N|Solid](http://recaicansiz.com/photos/phpunit/2.png)]()
[![N|Solid](http://recaicansiz.com/photos/phpunit/3.png)]()






```sh
  Runtime:       PHP 7.4.1 with Xdebug 2.9.0
  Configuration: /home/vagrant/code/phpunit.xml

  ................                                                  16 / 16 (100%)

  Time: 00:01.104, Memory: 8.00 MB

  OK (16 tests, 16 assertions)

  Generating code coverage report in HTML format ... done [00:02.633]
```

