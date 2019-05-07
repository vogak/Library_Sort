<?php

namespace Vogak\LibSort;

final class NullSort implements InterfaceSorter
{
    public function sort (array $data): array
    {
        return $data;
    }

}