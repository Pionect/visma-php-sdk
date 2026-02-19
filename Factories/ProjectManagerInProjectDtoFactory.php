<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ProjectManagerInProjectDto;
use Pionect\VismaSdk\Enums\EmployeeStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectManagerInProjectDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'employeeUserId' => $this->faker->uuid(),
            'employeeId' => $this->faker->numberBetween(1, 1000),
            'employeeNumber' => $this->faker->word(),
            'employeeName' => $this->faker->company(),
            'status' => $this->faker->randomElement(EmployeeStatusEnum::cases()),
            'department' => $this->faker->word(),
            'contact' => null,
            'address' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'employeeClass' => null,
            'branch' => BranchNumberDtoFactory::new()->make(),
            'calendarId' => $this->faker->uuid(),
            'employeeLogin' => $this->faker->word(),
            'workGroupDescription' => [],
            'timeStamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectManagerInProjectDto::class;
    }
}
