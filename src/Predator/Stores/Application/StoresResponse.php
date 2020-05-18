<?php


namespace App\Predator\Stores\Application;


use App\Shared\Domain\Bus\Query\Response;

final class StoresResponse implements Response
{
    private array $stores;

    public function __construct(StoresResponse ...$stores)
    {
        $this->stores = $stores;
    }

    public function stores(): array
    {
        $this->stores;
    }

}
