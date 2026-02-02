<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectTaskIdInWarehouseLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectTaskIdInWarehouseLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectTaskIdInWarehouseLocationUpdateDto::class;
    }
}
