<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaskEmployeeUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaskEmployeeUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'employeeId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return TaskEmployeeUpdateDto::class;
    }
}
