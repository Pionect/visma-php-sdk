<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BillingRuleInProjectDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\BillingRuleInProjectDto>
 */
class BillingRuleInProjectDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return BillingRuleInProjectDto::class;
    }
}
