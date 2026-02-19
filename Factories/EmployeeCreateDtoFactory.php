<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\EmployeeCreateDto;
use Pionect\VismaSdk\Enums\EmployeeUpdateStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EmployeeCreateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'employeeCd' => $this->faker->word(),
            'department' => $this->faker->word(),
            'employeeClass' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'calendar' => $this->faker->word(),
            'contact' => EmployeeContactUpdateDtoFactory::new()->make(),
            'address' => AddressUpdateDtoFactory::new()->make(),
            'status' => $this->faker->randomElement(EmployeeUpdateStatusEnum::cases()),
        ];
    }

    protected function modelClass(): string
    {
        return EmployeeCreateDto::class;
    }
}
