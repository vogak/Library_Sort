Sort Library
===============

This is a library for sorting and resorting array. 

Installation
------------

For creating new library based on this template just execute the following command

```
$ composer require vogak/sort-lib
```

Usage
-----

You push array ```$data ``` and than you get result:
```bash
Null Sort
Array
(
    [0] => 25
    [1] => 0
    [2] => -8
    [3] => 15
    [4] => 3
    [5] => -7
    [6] => 6
    [7] => -2
    [8] => 9
)
Sort
Array
(
    [0] => -8
    [1] => -7
    [2] => -2
    [3] => 0
    [4] => 3
    [5] => 6
    [6] => 9
    [7] => 15
    [8] => 25
)
Revers Sort
Array
(
    [0] => 25
    [1] => 15
    [2] => 9
    [3] => 6
    [4] => 3
    [5] => 0
    [6] => -2
    [7] => -7
    [8] => -8
)
```

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
