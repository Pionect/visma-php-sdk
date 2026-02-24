<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LotSerialClassQueryParameters;
use Pionect\VismaSdk\Enums\LotSerialClassAssignmentMethodEnum;
use Pionect\VismaSdk\Enums\LotSerialClassIssueMethodEnum;
use Pionect\VismaSdk\Enums\LotSerialClassTrackingMethodEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\LotSerialClassQueryParameters>
 */
class LotSerialClassQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
            'trackingMethod' => $this->faker->randomElement(LotSerialClassTrackingMethodEnum::cases()),
            'trackExpirationDate' => $this->faker->boolean(),
            'requiredForDropShip' => $this->faker->boolean(),
            'assignmentMethod' => $this->faker->randomElement(LotSerialClassAssignmentMethodEnum::cases()),
            'issueMethod' => $this->faker->randomElement(LotSerialClassIssueMethodEnum::cases()),
            'autoIncrementalValueBetweenClasses' => $this->faker->boolean(),
            'autoIncrementalValue' => $this->faker->word(),
            'autoGenerateNextNumber' => $this->faker->boolean(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return LotSerialClassQueryParameters::class;
    }
}
