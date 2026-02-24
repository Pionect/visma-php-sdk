<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Table SigmaBIAnalysisCodes &gt; The information row connected through the AnalysisCode
 *
 * @method static \Pionect\VismaSdk\Factories\AnalisysCodeInfoInAccountDtoFactory testFactory()
 */
class AnalisysCodeInfoInAccountDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\AnalisysCodeInfoInAccountDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
