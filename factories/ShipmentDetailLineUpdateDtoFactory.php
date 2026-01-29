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
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'warehouse' => $this->faker->word(),
            'location' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'shippedQty' => $this->faker->randomFloat(2, 0, 1000),
            'lotSerialNbr' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'reasonCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'note' => $this->faker->word(),
            'allocations' => [],
            'customStr1' => CustomStr1InShipmentDetailLineUpdateDtoFactory::new()->make(),
            'customStr2' => CustomStr2InShipmentDetailLineUpdateDtoFactory::new()->make(),
            'customStr3' => CustomStr3InShipmentDetailLineUpdateDtoFactory::new()->make(),
            'customStr4' => CustomStr4InShipmentDetailLineUpdateDtoFactory::new()->make(),
            'customStr5' => CustomStr5InShipmentDetailLineUpdateDtoFactory::new()->make(),
            'customDec1' => CustomDec1InShipmentDetailLineUpdateDtoFactory::new()->make(),
            'customDec2' => CustomDec2InShipmentDetailLineUpdateDtoFactory::new()->make(),
            'customInt1' => CustomInt1InShipmentDetailLineUpdateDtoFactory::new()->make(),
            'customInt2' => CustomInt2InShipmentDetailLineUpdateDtoFactory::new()->make(),
            'customDateTimeUtc1' => CustomDateTimeUTC1InShipmentDetailLineUpdateDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return ShipmentDetailLineUpdateDto::class;
    }
}
