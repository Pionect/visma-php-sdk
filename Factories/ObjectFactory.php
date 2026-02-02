<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\Object;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ObjectFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return Object::class;
    }
}
