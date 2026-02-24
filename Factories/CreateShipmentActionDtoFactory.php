<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CreateShipmentActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CreateShipmentActionDto>
 */
class CreateShipmentActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
            'returnShipmentDto' => $this->faker->boolean(),
            'shipmentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'shipmentWarehouse' => $this->faker->word(),
            'operation' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CreateShipmentActionDto::class;
    }
}
