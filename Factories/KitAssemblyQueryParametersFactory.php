<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitAssemblyQueryParameters;
use Pionect\VismaSdk\Enums\KitAssemblyQueryParametersStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\KitAssemblyQueryParameters>
 */
class KitAssemblyQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => $this->faker->word(),
            'createdDateTimeCondition' => $this->faker->word(),
            'type' => $this->faker->word(),
            'refNo' => $this->faker->word(),
            'status' => $this->faker->randomElement(KitAssemblyQueryParametersStatusEnum::cases()),
            'expandStockComponents' => $this->faker->boolean(),
            'expandNonStockComponents' => $this->faker->boolean(),
            'expandKitAllocations' => $this->faker->boolean(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyQueryParameters::class;
    }
}
