<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfCurrencyMultDiv;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfCurrencyMultDivFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfCurrencyMultDiv::class;
    }
}
