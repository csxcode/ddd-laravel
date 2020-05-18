<?php

namespace App\Predator\Stores\Application;

use App\Shared\Domain\Bus\Query\Response;

final class StoreResponse
{
    private string $id;
    private string $name;
    private string $createdAt;
    private string $updatedAt;
    private string $enabled;

    public function __construct(string $id, string $name, string $createdAt, string $updatedAt, string $enabled)
    {
        $this->id = $id;
        $this->name = $name;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->enabled = $enabled;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function createdAt(): string
    {
        return $this->createdAt;
    }

    public function updatedAt(): string
    {
        return $this->updatedAt;
    }

    public function enabled(): string
    {
        return $this->enabled;
    }

}
