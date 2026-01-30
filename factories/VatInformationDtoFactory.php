<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\VatInformationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatInformationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'vatCategoryId' => $this->faker->uuid(),
            'vatId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'type' => $this->faker->word(),
            'deductibleVat' => $this->faker->boolean(),
            'reverseVat' => $this->faker->boolean(),
            'statisticalVat' => $this->faker->boolean(),
            'pendingVat' => $this->faker->boolean(),
            'includeinVatExemptTotal' => $this->faker->boolean(),
            'includeinVatTotal' => $this->faker->boolean(),
            'enterFromVatInvoice' => $this->faker->boolean(),
            'calculateOn' => $this->faker->word(),
            'cashDiscount' => $this->faker->word(),
            'vatAgencyId' => null,
            'notValidAfter' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'euReportCode' => $this->faker->word(),
            'documentText' => $this->faker->word(),
            'defaultNonStockItem' => null,
            'vismaXmlVatType' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'glAccounts' => null,
            'schedules' => [],
            'categories' => [],
            'zones' => [],
        ];
    }

    protected function modelClass(): string
    {
        return VatInformationDto::class;
    }
}
