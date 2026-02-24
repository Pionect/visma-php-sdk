<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventorySummaryQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\InventorySummaryQueryParameters>
 */
class InventorySummaryQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouse' => $this->faker->word(),
            'location' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventorySummaryQueryParameters::class;
    }
}
