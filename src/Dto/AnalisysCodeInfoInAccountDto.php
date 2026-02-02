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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
