<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfCreditRule;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfCreditRuleFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfCreditRule::class;
    }
}
