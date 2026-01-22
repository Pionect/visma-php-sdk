<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PostingClassInInventoryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PostingClassInInventoryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PostingClassInInventoryUpdateDto::class;
    }
}
