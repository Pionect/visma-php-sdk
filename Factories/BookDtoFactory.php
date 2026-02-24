<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BookDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\BookDto>
 */
class BookDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'bookId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return BookDto::class;
    }
}
