<?php

namespace App\Predator\Stores\Domain\Contracts;

use App\Shared\Domain\Criteria\Criteria;

interface StoreRepository
{
    public function searchAll(): array;
    public function matching(Criteria $criteria): array;
}
