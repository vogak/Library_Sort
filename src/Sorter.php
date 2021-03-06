<?php

namespace Vogak\LibSort;

class Sorter
{
    private $sort;

    public function __construct(InterfaceSorter $sort)
    {
        $this->sort = $sort;
    }

    public function setSort(InterfaceSorter $sort)
    {
        $this->sort= $sort;
        return $sort;
    }

    public function sort(array $data): array
    {
        return $this->sort->sort($data);
    }
}