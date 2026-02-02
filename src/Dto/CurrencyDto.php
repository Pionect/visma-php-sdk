<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CurrencyDtoFactory testFactory()
 */
class CurrencyDto extends SpatieData
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
