<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectIdInWarehouseLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectIdInWarehouseLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectIdInWarehouseLocationUpdateDto::class;
    }
}
