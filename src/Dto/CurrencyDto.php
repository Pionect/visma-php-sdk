<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CurrencyDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyDtoFactory factory()
 */
class CurrencyDto extends Model
{
    /** Currency Id. */
    #[Property]
    public ?string $id;

    /** Currency description. */
    #[Property]
    public ?string $description;

    /** Currency symbol. */
    #[Property]
    public ?string $symbol;

    /** Identify if the currency is the base currency. */
    #[Property]
    public ?bool $isBaseCurrency;

    /** Decimal precision. */
    #[Property]
    public ?int $decimalPrecision;

    /** Identify if is used for accounting. */
    #[Property]
    public ?bool $isUsedForAccounting;
}
