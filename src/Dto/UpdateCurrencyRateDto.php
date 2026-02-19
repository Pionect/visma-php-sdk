<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CreateCurrencyRateMultDivEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\UpdateCurrencyRateDtoFactory testFactory()
 */
class UpdateCurrencyRateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $rate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?CreateCurrencyRateMultDivEnum $multDiv = null,
    ) {}
}
