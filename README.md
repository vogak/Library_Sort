Sort Library
===============

This is a library for sorting and resorting array. 

Installation
------------

For creating library of sorting just execute the following command

```
$ composer require vogak/sort-lib
```

Usage
-----
At first we create sort strategy with null object
```php
$sort = new Sorter(new NullSort());
```

Than we chang sort method 
```php
$sort->setSort(new NormalSort());
```
And revers sort
```php
$sort->setSort(new ReversSort());
```
For sorting array with with result
```php
print_r($sort->sort($data));
```

P.S.
Null sort: you have null result and have original array.
Sort: result of array with sort from the lowest to the biggest.
Revers sort: result of array with revers sort from the biggest to the lowest.
  

Code style fixer
----------------


To fix the code style just run the following command

```
$ composer cs-fix
```

License
-------

[![license](https://img.shields.io/github/license/greeflas/default-project.svg)](LICENSE)

This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2019, Pavel Peregin
