<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ShipmentDetailLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShipmentDetailLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNumber' => $this->faker->word(),
            'warehouse' => $this->faker->word(),
            'location' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'shippedQty' => $this->faker->word(),
            'lotSerialNbr' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'reasonCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'note' => $this->faker->word(),
            'allocations' => [],
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
        ];
    }

    protected function modelClass(): string
    {
        return ShipmentDetailLineUpdateDto::class;
    }
}
