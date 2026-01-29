<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\AllocationsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AllocationsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNbr' => LineNbrInAllocationsUpdateDtoFactory::new()->make(),
            'location' => LocationInAllocationsUpdateDtoFactory::new()->make(),
            'lotSerialNumber' => LotSerialNumberInAllocationsUpdateDtoFactory::new()->make(),
            'quantity' => QuantityInAllocationsUpdateDtoFactory::new()->make(),
            'uom' => UomInAllocationsUpdateDtoFactory::new()->make(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return AllocationsUpdateDto::class;
    }
}
