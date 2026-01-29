<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShipmentDetailLineAddDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShipmentDetailLineAddDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'inventoryNumber' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'warehouse' => $this->faker->word(),
            'location' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'shippedQty' => $this->faker->randomFloat(2, 0, 1000),
            'customStr1' => CustomStr1InShipmentDetailLineAddDtoFactory::new()->make(),
            'customStr2' => CustomStr2InShipmentDetailLineAddDtoFactory::new()->make(),
            'customStr3' => CustomStr3InShipmentDetailLineAddDtoFactory::new()->make(),
            'customStr4' => CustomStr4InShipmentDetailLineAddDtoFactory::new()->make(),
            'customStr5' => CustomStr5InShipmentDetailLineAddDtoFactory::new()->make(),
            'customDec1' => CustomDec1InShipmentDetailLineAddDtoFactory::new()->make(),
            'customDec2' => CustomDec2InShipmentDetailLineAddDtoFactory::new()->make(),
            'customInt1' => CustomInt1InShipmentDetailLineAddDtoFactory::new()->make(),
            'customInt2' => CustomInt2InShipmentDetailLineAddDtoFactory::new()->make(),
            'customDateTimeUtc1' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ShipmentDetailLineAddDto::class;
    }
}
