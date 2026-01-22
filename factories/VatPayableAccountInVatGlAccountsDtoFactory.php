<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatPayableAccountInVatGlAccountsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatPayableAccountInVatGlAccountsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'externalCode1' => $this->faker->word(),
            'externalCode2' => $this->faker->word(),
            'active' => $this->faker->boolean(),
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return VatPayableAccountInVatGlAccountsDto::class;
    }
}
