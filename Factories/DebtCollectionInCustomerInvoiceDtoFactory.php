<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DebtCollectionInCustomerInvoiceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DebtCollectionInCustomerInvoiceDto>
 */
class DebtCollectionInCustomerInvoiceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'caseNumber' => $this->faker->word(),
            'caseType' => $this->faker->word(),
            'caseStatus' => $this->faker->word(),
            'caseUrl' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DebtCollectionInCustomerInvoiceDto::class;
    }
}
