<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\DocumentQueryParameters;
use Pionect\VismaSdk\Enums\CashSaleDocumentTypeEnum;
use Pionect\VismaSdk\Enums\CashSaleStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DocumentQueryParameters>
 */
class DocumentQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'documentType' => $this->faker->randomElement(CashSaleDocumentTypeEnum::cases()),
            'released' => $this->faker->numberBetween(1, 100),
            'dunningLevel' => $this->faker->numberBetween(1, 100),
            'closedFinancialPeriod' => $this->faker->word(),
            'dunningLetterDateTime' => $this->faker->word(),
            'dunningLetterDateTimeCondition' => $this->faker->word(),
            'project' => $this->faker->word(),
            'expandApplications' => $this->faker->boolean(),
            'expandDunningInformation' => $this->faker->boolean(),
            'expandAttachments' => $this->faker->boolean(),
            'expandTaxDetails' => $this->faker->boolean(),
            'expandInvoiceAddress' => $this->faker->boolean(),
            'financialPeriod' => $this->faker->word(),
            'documentDueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'documentDueDateCondition' => $this->faker->word(),
            'status' => $this->faker->randomElement(CashSaleStatusEnum::cases()),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'externalReference' => $this->faker->word(),
            'paymentReference' => $this->faker->word(),
            'customerRefNumber' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'documentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'documentDateCondition' => $this->faker->word(),
            'greaterThanValue' => $this->faker->word(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => $this->faker->word(),
            'createdDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return DocumentQueryParameters::class;
    }
}
