<?php
declare(strict_types=1);

namespace App\Predator\Stores\Application\SearchByCriteria;

use App\Predator\Stores\Application\StoreResponse;
use App\Predator\Stores\Application\StoresResponse;
use App\Predator\Stores\Domain\Contracts\StoreRepository;
use App\Predator\Stores\Domain\Store;
use App\Shared\Domain\Criteria\Criteria;
use App\Shared\Domain\Criteria\Filters;
use App\Shared\Domain\Criteria\Order;

class StoresByCriteriaSearcher
{
    private StoreRepository $repository;

    public function __construct(StoreRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(Filters $filters, Order $order, ?int $limit, ?int $offset): StoresResponse
    {
        $criteria = new Criteria($filters, $order, $offset, $limit);

        return new StoresResponse(...map($this->toResponse(), $this->repository->matching($criteria)));
    }

    private function toResponse(): callable
    {
        return static fn(Store $store) => new StoreResponse(
            $store->id(),
            $store->name(),
            $store->createdAt(),
            $store->updatedAt(),
            $store->enabled()
        );
    }
}
