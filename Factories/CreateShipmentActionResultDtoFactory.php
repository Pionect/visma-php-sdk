<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreateShipmentActionResultDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreateShipmentActionResultDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'referenceNumber' => $this->faker->word(),
            'shipmentDto' => ShipmentDtoFactory::new()->make(),
            'actionId' => $this->faker->uuid(),
            'actionResult' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CreateShipmentActionResultDto::class;
    }
}
