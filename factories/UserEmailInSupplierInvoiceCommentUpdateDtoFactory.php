<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UserEmailInSupplierInvoiceCommentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class UserEmailInSupplierInvoiceCommentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return UserEmailInSupplierInvoiceCommentUpdateDto::class;
    }
}
