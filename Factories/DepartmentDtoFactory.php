<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\DepartmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DepartmentDto>
 */
class DepartmentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'departmentId' => $this->faker->uuid(),
            'publicId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'expenseAccount' => null,
            'expenseSubaccount' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'timeStamp' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DepartmentDto::class;
    }
}
