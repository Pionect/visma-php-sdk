<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Currency
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyInExtendedOrganizationDtoFactory testFactory()
 */
class CurrencyInExtendedOrganizationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Currency Id. */
        public ?string $id = null,
        /** Currency description. */
        public ?string $description = null,
        /** Currency symbol. */
        public ?string $symbol = null,
        /** Identify if the currency is the base currency. */
        public ?bool $isBaseCurrency = null,
        /** Decimal precision. */
        public ?int $decimalPrecision = null,
        /** Identify if is used for accounting. */
        public ?bool $isUsedForAccounting = null,
    ) {}
}
