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
            'deductibleVat' => $this->faker->boolean(),
            'reverseVat' => $this->faker->boolean(),
            'statisticalVat' => $this->faker->boolean(),
            'pendingVat' => $this->faker->boolean(),
            'includeinVatExemptTotal' => $this->faker->boolean(),
            'includeinVatTotal' => $this->faker->boolean(),
            'enterFromVatInvoice' => $this->faker->boolean(),
            'calculateOn' => $this->faker->word(),
            'cashDiscount' => $this->faker->word(),
            'vatAgencyId' => $this->faker->word(),
            'notValidAfter' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'euReportCode' => $this->faker->word(),
            'documentText' => $this->faker->word(),
            'defaultNonStockItem' => $this->faker->word(),
            'vismaXmlVatType' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'glAccounts' => $this->faker->word(),
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
