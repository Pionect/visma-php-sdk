<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\OrganizationQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\OrganizationQueryParameters>
 */
class OrganizationQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'expandBranches' => $this->faker->boolean(),
            'expandBankSettings' => $this->faker->boolean(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'greaterThanValue' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return OrganizationQueryParameters::class;
    }
}
