<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseOrderBasicUpdateDto;
use Pionect\VismaSdk\Enums\PurchaseOrderLineOrderTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseOrderBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->randomElement(PurchaseOrderLineOrderTypeEnum::cases()),
            'orderNumber' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'promisedOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'description' => $this->faker->sentence(),
            'supplier' => $this->faker->word(),
            'location' => $this->faker->word(),
            'gln' => $this->faker->word(),
            'vatRegistrationId' => $this->faker->uuid(),
            'owner' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'exchangeRate' => null,
            'supplierRef' => $this->faker->word(),
            'controlTotal' => null,
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
            'customDec1' => null,
            'customDec2' => null,
            'customInt1' => $this->faker->numberBetween(1, 100),
            'customInt2' => $this->faker->numberBetween(1, 100),
            'customDateTimeUtc1' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'timeStamp' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderBasicUpdateDto::class;
    }
}
