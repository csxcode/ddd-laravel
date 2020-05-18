<?php
declare(strict_types = 1);

namespace App\Predator\Stores\Infraestructure;

use App\Predator\Stores\Domain\Contracts\StoreRepository;
use App\Predator\Stores\Infraestructure\Persistence\Eloquent\Store;
use App\Shared\Domain\Criteria\Criteria;
use Illuminate\Database\Eloquent\Model;

class EloquentStoreRepository implements StoreRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Store();
    }

    public function searchAll(): array
    {
        // TODO: Implement searchAll() method.
    }

    public function matching(Criteria $criteria): array
    {
        $this->model->
    }
}
