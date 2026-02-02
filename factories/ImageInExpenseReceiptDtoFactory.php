<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ImageInExpenseReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ImageInExpenseReceiptDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'id' => $this->faker->word(),
            'revision' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return ImageInExpenseReceiptDto::class;
    }
}
