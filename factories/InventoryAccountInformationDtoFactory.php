<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryAccountInformationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryAccountInformationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'expenseAccrualAccount' => $this->faker->word(),
            'inventoryAccount' => $this->faker->word(),
            'expenseAccount' => $this->faker->word(),
            'cogsAccount' => $this->faker->word(),
            'expenseNonTaxableAccount' => $this->faker->word(),
            'expenseEuAccount' => $this->faker->word(),
            'expenseImportAccount' => $this->faker->word(),
            'expenseSubaccount' => $this->faker->word(),
            'cogsSubaccount' => $this->faker->word(),
            'salesAccount' => $this->faker->word(),
            'salesNonTaxableAccount' => $this->faker->word(),
            'salesEuAccount' => $this->faker->word(),
            'salesExportAccount' => $this->faker->word(),
            'salesSubaccount' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryAccountInformationDto::class;
    }
}
