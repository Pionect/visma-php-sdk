<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseOrderBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseOrderBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
            'orderNumber' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'promisedOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'description' => $this->faker->sentence(),
            'supplier' => $this->faker->word(),
            'location' => $this->faker->word(),
            'gln' => $this->faker->word(),
            'vatRegistrationId' => $this->faker->word(),
            'owner' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'exchangeRate' => $this->faker->randomFloat(2, 0, 1000),
            'supplierRef' => $this->faker->word(),
            'controlTotal' => $this->faker->randomFloat(2, 0, 1000),
            'branch' => $this->faker->word(),
            'lines' => [],
            'changeDatesOnLines' => $this->faker->boolean(),
            'note' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->boolean(),
            'customStr1' => $this->faker->word(),
            'customStr2' => $this->faker->word(),
            'customStr3' => $this->faker->word(),
            'customStr4' => $this->faker->word(),
            'customStr5' => $this->faker->word(),
            'customDec1' => $this->faker->word(),
            'customDec2' => $this->faker->word(),
            'customInt1' => $this->faker->word(),
            'customInt2' => $this->faker->word(),
            'customDateTimeUtc1' => $this->faker->word(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderBasicUpdateDto::class;
    }
}
