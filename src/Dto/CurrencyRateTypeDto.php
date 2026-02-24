<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CurrencyRateTypeDtoFactory testFactory()
 */
class CurrencyRateTypeDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CurrencyRateTypeDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Currency rate type Id. */
        public ?string $id = null,
        /** Description. */
        public ?string $description = null,
        /** Days effective. */
        public ?int $daysEffective = null,
    ) {}
}
