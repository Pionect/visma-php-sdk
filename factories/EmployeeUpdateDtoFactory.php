<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\EmployeeUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EmployeeUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'employeeClass' => $this->faker->word(),
            'status' => StatusInEmployeeUpdateDtoFactory::new()->make(),
            'department' => DepartmentInEmployeeUpdateDtoFactory::new()->make(),
            'contact' => ContactInEmployeeUpdateDtoFactory::new()->make(),
            'address' => AddressInEmployeeUpdateDtoFactory::new()->make(),
            'branch' => $this->faker->word(),
            'calendar' => $this->faker->word(),
            'companyTreeInfo' => [],
        ];
    }

    protected function modelClass(): string
    {
        return EmployeeUpdateDto::class;
    }
}
