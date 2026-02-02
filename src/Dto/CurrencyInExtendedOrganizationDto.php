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
        public ?string $id = null,
        public ?string $description = null,
        public ?string $symbol = null,
        public ?bool $isBaseCurrency = null,
        public ?int $decimalPrecision = null,
        public ?bool $isUsedForAccounting = null,
    ) {}
}
