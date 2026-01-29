<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierInvoiceCommentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierInvoiceCommentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'userEmail' => UserEmailInSupplierInvoiceCommentUpdateDtoFactory::new()->make(),
            'commentText' => CommentTextInSupplierInvoiceCommentUpdateDtoFactory::new()->make(),
            'commentDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceCommentUpdateDto::class;
    }
}
