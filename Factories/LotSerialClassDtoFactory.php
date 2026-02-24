<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\LotSerialClassDto;
use Pionect\VismaSdk\Enums\LotSerialClassAssignmentMethodEnum;
use Pionect\VismaSdk\Enums\LotSerialClassIssueMethodEnum;
use Pionect\VismaSdk\Enums\LotSerialClassTrackingMethodEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\LotSerialClassDto>
 */
class LotSerialClassDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'trackingMethod' => $this->faker->randomElement(LotSerialClassTrackingMethodEnum::cases()),
            'trackExpirationDate' => $this->faker->boolean(),
            'requiredForDropShip' => $this->faker->boolean(),
            'assignmentMethod' => $this->faker->randomElement(LotSerialClassAssignmentMethodEnum::cases()),
            'issueMethod' => $this->faker->randomElement(LotSerialClassIssueMethodEnum::cases()),
            'autoIncrementalValueBetweenClasses' => $this->faker->boolean(),
            'autoIncrementalValue' => $this->faker->word(),
            'autoGenerateNextNumber' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'details' => [],
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LotSerialClassDto::class;
    }
}
