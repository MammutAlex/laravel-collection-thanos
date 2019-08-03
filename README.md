<p align="center"><img src="https://user-images.githubusercontent.com/10599196/62409693-d8bd5080-b5e3-11e9-917c-62fadc44652a.png"></p>

<p align="center">
<a href="https://travis-ci.org/MammutAlex/laravel-collection-thanos"><img src="https://travis-ci.org/MammutAlex/laravel-collection-thanos.svg?branch=master" alt="Build Status"></a>
<a href="https://lima.codeclimate.com/github/MammutAlex/laravel-collection-thanos/badges/gpa.svg"><img src="https://lima.codeclimate.com/github/MammutAlex/laravel-collection-thanos" alt="Code Climate"></a>
<a href="https://styleci.io/repos/200339313/shield?branch=master"><img src="https://styleci.io/repos/200339313" alt="LStyleCI"></a>
</p>

## Installation
Require this package in your `composer.json` and update composer.

```php
"mammut-alex/laravel-collection-thanos": "^1.0"
```

or `cmammut-alex/laravel-collection-thanos`

## Introduction

Thanos is disaster some of you collection. 

Here is an example

```php
    $data = new Collection([1, 2, 3, 4, 5, 6, 7, 8, 9]);
    $data->thanos()->all();//[2,4,5,8]
```

## License

Laravel Collection Thanos is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
