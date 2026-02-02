<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CommentTextInSupplierInvoiceCommentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CommentTextInSupplierInvoiceCommentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CommentTextInSupplierInvoiceCommentUpdateDto::class;
    }
}
