<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreateCurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreateCurrencyRateDtoFactory testFactory()
 */
class CreateCurrencyRateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $fromCurrencyId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $toCurrencyId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $rateType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $effectiveDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $rate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $multDiv = null,
    ) {}
}
