<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\VatInformationDto;
use Pionect\VismaSdk\Enums\VatCategoryLineCalculateOnEnum;
use Pionect\VismaSdk\Enums\VatCategoryLineCashDiscountEnum;
use Pionect\VismaSdk\Enums\VatCategoryLineTypeEnum;
use Pionect\VismaSdk\Enums\VatInformationEuReportCodeEnum;
use Pionect\VismaSdk\Enums\VatInformationVismaXmlVatTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\VatInformationDto>
 */
class VatInformationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'vatCategoryId' => $this->faker->uuid(),
            'vatId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'type' => $this->faker->randomElement(VatCategoryLineTypeEnum::cases()),
            'deductibleVat' => $this->faker->boolean(),
            'reverseVat' => $this->faker->boolean(),
            'statisticalVat' => $this->faker->boolean(),
            'pendingVat' => $this->faker->boolean(),
            'includeinVatExemptTotal' => $this->faker->boolean(),
            'includeinVatTotal' => $this->faker->boolean(),
            'enterFromVatInvoice' => $this->faker->boolean(),
            'calculateOn' => $this->faker->randomElement(VatCategoryLineCalculateOnEnum::cases()),
            'cashDiscount' => $this->faker->randomElement(VatCategoryLineCashDiscountEnum::cases()),
            'vatAgencyId' => null,
            'notValidAfter' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'euReportCode' => $this->faker->randomElement(VatInformationEuReportCodeEnum::cases()),
            'documentText' => $this->faker->word(),
            'defaultNonStockItem' => null,
            'vismaXmlVatType' => $this->faker->randomElement(VatInformationVismaXmlVatTypeEnum::cases()),
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
