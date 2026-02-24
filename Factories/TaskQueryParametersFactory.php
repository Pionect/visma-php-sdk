<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaskQueryParameters;
use Pionect\VismaSdk\Enums\TaskStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\TaskQueryParameters>
 */
class TaskQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'projectId' => $this->faker->uuid(),
            'publicId' => $this->faker->uuid(),
            'projectInternalId' => $this->faker->numberBetween(1, 1000),
            'description' => $this->faker->sentence(),
            'taskCd' => $this->faker->word(),
            'taskCdDesc' => $this->faker->word(),
            'status' => $this->faker->randomElement(TaskStatusEnum::cases()),
            'expandAttribute' => $this->faker->boolean(),
            'visibleInAp' => $this->faker->boolean(),
            'visibleInAr' => $this->faker->boolean(),
            'visibleInCa' => $this->faker->boolean(),
            'visibleInCr' => $this->faker->boolean(),
            'visibleInEa' => $this->faker->boolean(),
            'visibleInGl' => $this->faker->boolean(),
            'visibleInIn' => $this->faker->boolean(),
            'visibleInPo' => $this->faker->boolean(),
            'visibleInSo' => $this->faker->boolean(),
            'visibleInTa' => $this->faker->boolean(),
            'restrictedEmployee' => $this->faker->word(),
            'restrictedUser' => $this->faker->numberBetween(1, 100),
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => $this->faker->word(),
            'createdDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return TaskQueryParameters::class;
    }
}
