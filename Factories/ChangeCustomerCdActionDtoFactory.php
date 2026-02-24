<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ChangeCustomerCdActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ChangeCustomerCdActionDto>
 */
class ChangeCustomerCdActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'customerCd' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ChangeCustomerCdActionDto::class;
    }
}
