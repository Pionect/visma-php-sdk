<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Currency &gt; The currency of the payment; by default, it is the currency
 * associated with the cash account.
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyInSupplierPaymentDtoFactory testFactory()
 */
class CurrencyInSupplierPaymentDto extends SpatieData
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
