<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierInvoiceCommentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierInvoiceCommentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'userEmail' => $this->faker->safeEmail(),
            'commentText' => null,
            'commentDateTime' => null,
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceCommentUpdateDto::class;
    }
}
