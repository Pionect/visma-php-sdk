<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Foundation\Hydration;

use Illuminate\Support\Collection;

class Hydrator
{
    /**
     * Hydrate a Model from an array using Spatie Data's from() method.
     *
     * @param  class-string<Model>  $model
     * @param  array<string, mixed>  $item
     */
    public function hydrate(string $model, array $item): Model
    {
        /** @var Model $instance */
        $instance = $model::from($item);

        return $instance;
    }

    /**
     * Hydrate a collection of Models from an array.
     *
     * @param  class-string<Model>  $model
     * @param  array<int, mixed>  $data
     * @return Collection<int, Model>
     */
    public function hydrateCollection(string $model, array $data): Collection
    {
        $collection = new Collection;

        foreach ($data as $item) {
            $collection->add($this->hydrate($model, $item));
        }

        return $collection;
    }
}
