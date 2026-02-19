<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierInvoiceQueryParameters;
use Pionect\VismaSdk\Enums\SupplierInvoiceForSupplierQueryParametersDocumentTypeEnum;
use Pionect\VismaSdk\Enums\SupplierInvoiceForSupplierQueryParametersStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierInvoiceQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'supplier' => $this->faker->word(),
            'expandAttachment' => $this->faker->boolean(),
            'expandLandedCosts' => $this->faker->boolean(),
            'documentType' => $this->faker->randomElement(SupplierInvoiceForSupplierQueryParametersDocumentTypeEnum::cases()),
            'released' => $this->faker->numberBetween(1, 100),
            'project' => $this->faker->word(),
            'expandApproval' => $this->faker->boolean(),
            'expandNote' => $this->faker->boolean(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->randomElement(SupplierInvoiceForSupplierQueryParametersStatusEnum::cases()),
            'expandLinePrebookAccounts' => $this->faker->boolean(),
            'branch' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dueDateCondition' => $this->faker->word(),
            'docDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'docDateCondition' => $this->faker->word(),
            'item' => $this->faker->word(),
            'balance' => null,
            'balanceCondition' => $this->faker->word(),
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
        return SupplierInvoiceQueryParameters::class;
    }
}
