<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\BranchQueryParameters;
use Pionect\VismaSdk\Enums\BranchQueryParametersOrderByEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\BranchQueryParameters>
 */
class BranchQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'greaterThanValue' => $this->faker->word(),
            'orderBy' => $this->faker->randomElement(BranchQueryParametersOrderByEnum::cases()),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'expandAddress' => $this->faker->boolean(),
            'expandContact' => $this->faker->boolean(),
            'expandCurrency' => $this->faker->boolean(),
            'expandVatZone' => $this->faker->boolean(),
            'expandLedger' => $this->faker->boolean(),
            'expandIndustryCode' => $this->faker->boolean(),
            'expandDeliveryAddress' => $this->faker->boolean(),
            'expandDeliveryContact' => $this->faker->boolean(),
            'expandDefaultCountry' => $this->faker->boolean(),
            'expandBankSettings' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return BranchQueryParameters::class;
    }
}
