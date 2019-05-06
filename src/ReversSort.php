<?php

namespace libSort;

final class ReversSort implements InterfaceSorter
{
    public function sort (array $data): array
    {
        \rsort($data);
        return $data;
    }
}