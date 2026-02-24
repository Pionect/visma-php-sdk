<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ProjectBasicQueryParameters;
use Pionect\VismaSdk\Enums\TemplateNumberDescriptionStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ProjectBasicQueryParameters>
 */
class ProjectBasicQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'status' => $this->faker->randomElement(TemplateNumberDescriptionStatusEnum::cases()),
            'description' => $this->faker->sentence(),
            'projectId' => $this->faker->uuid(),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'nonProject' => $this->faker->boolean(),
            'projectIdDesc' => $this->faker->word(),
            'publicId' => $this->faker->uuid(),
            'restrictedEmployee' => $this->faker->word(),
            'restrictedUser' => $this->faker->numberBetween(1, 100),
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
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'greaterThanValue' => $this->faker->word(),
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
        return ProjectBasicQueryParameters::class;
    }
}
