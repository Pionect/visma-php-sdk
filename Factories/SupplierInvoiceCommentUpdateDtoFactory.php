<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierInvoiceCommentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SupplierInvoiceCommentUpdateDto>
 */
class SupplierInvoiceCommentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'userEmail' => $this->faker->safeEmail(),
            'commentText' => $this->faker->word(),
            'commentDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceCommentUpdateDto::class;
    }
}
