<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ProjectQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'status' => $this->faker->word(),
            'systemTemplate' => $this->faker->boolean(),
            'visibleInAp' => $this->faker->boolean(),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'expandAttribute' => $this->faker->boolean(),
            'attributes' => $this->faker->word(),
            'taskStatus' => $this->faker->word(),
            'taskVisibleInAp' => $this->faker->boolean(),
            'taskVisibleInAr' => $this->faker->boolean(),
            'taskVisibleInCa' => $this->faker->boolean(),
            'taskVisibleInCr' => $this->faker->boolean(),
            'taskVisibleInEa' => $this->faker->boolean(),
            'taskVisibleInGl' => $this->faker->boolean(),
            'taskVisibleInIn' => $this->faker->boolean(),
            'taskVisibleInPo' => $this->faker->boolean(),
            'taskVisibleInSo' => $this->faker->boolean(),
            'taskVisibleInTa' => $this->faker->boolean(),
            'nonProject' => $this->faker->boolean(),
            'publicId' => $this->faker->uuid(),
            'restrictedEmployee' => $this->faker->word(),
            'restrictedUser' => $this->faker->numberBetween(1, 100),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => $this->faker->word(),
            'createdDateTimeCondition' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'onHold' => $this->faker->boolean(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectQueryParameters::class;
    }
}
