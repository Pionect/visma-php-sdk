<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Currency
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CurrencyInExtendedOrganizationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyInExtendedOrganizationDtoFactory testFactory()
 */
class CurrencyInExtendedOrganizationDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $symbol = null,
        public ?bool $isBaseCurrency = null,
        public ?int $decimalPrecision = null,
        public ?bool $isUsedForAccounting = null,
    ) {}
}
