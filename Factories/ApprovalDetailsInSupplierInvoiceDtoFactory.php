<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ApprovalDetailsInSupplierInvoiceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ApprovalDetailsInSupplierInvoiceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'attachmentId' => $this->faker->uuid(),
            'comment' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ApprovalDetailsInSupplierInvoiceDto::class;
    }
}
