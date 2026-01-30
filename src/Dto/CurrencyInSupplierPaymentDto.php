<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Currency &gt; The currency of the payment; by default, it is the currency
 * associated with the cash account.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CurrencyInSupplierPaymentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyInSupplierPaymentDtoFactory testFactory()
 */
class CurrencyInSupplierPaymentDto extends Model
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
