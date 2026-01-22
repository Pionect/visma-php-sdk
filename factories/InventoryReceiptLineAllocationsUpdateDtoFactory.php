<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\InventoryReceiptLineAllocationsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryReceiptLineAllocationsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNbr' => $this->faker->word(),
            'location' => $this->faker->word(),
            'lotSerialNumber' => $this->faker->word(),
            'quantity' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryReceiptLineAllocationsUpdateDto::class;
    }
}
