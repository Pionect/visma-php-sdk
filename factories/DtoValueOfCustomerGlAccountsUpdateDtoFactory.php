<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfCustomerGlAccountsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfCustomerGlAccountsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfCustomerGlAccountsUpdateDto::class;
    }
}
