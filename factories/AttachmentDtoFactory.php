<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AttachmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AttachmentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'revision' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return AttachmentDto::class;
    }
}
