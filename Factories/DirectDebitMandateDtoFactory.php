<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DirectDebitMandateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DirectDebitMandateDto>
 */
class DirectDebitMandateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'mandateId' => $this->faker->uuid(),
            'mandateDescription' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DirectDebitMandateDto::class;
    }
}
