<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\KitSpecificationsQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitSpecificationsQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTimeCondition' => $this->faker->word(),
            'kitInventoryId' => $this->faker->uuid(),
            'revisionId' => $this->faker->uuid(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return KitSpecificationsQueryParameters::class;
    }
}
