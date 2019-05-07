<?php

namespace Vogak\LibSort;

final class ReversSort implements InterfaceSorter
{
    public function sort(array $data): array
    {
        \rsort($data);
        return $data;
    }
}