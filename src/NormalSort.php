<?php

namespace libSort;

final class NormalSort implements InterfaceSorter
{
    public function sort (array $data): array
    {
        \sort($data);
        return $data;
    }
}