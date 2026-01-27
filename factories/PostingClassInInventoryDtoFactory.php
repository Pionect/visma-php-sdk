<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PostingClassInInventoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PostingClassInInventoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PostingClassInInventoryDto::class;
    }
}
