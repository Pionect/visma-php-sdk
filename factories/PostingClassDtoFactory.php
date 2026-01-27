<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PostingClassDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PostingClassDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PostingClassDto::class;
    }
}
