<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CommentDateTimeInSupplierInvoiceCommentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CommentDateTimeInSupplierInvoiceCommentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return CommentDateTimeInSupplierInvoiceCommentUpdateDto::class;
    }
}
