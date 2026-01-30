<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Table SigmaBIAnalysisCodes &gt; The information row connected through the AnalysisCode
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AnalisysCodeInfoInAccountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AnalisysCodeInfoInAccountDtoFactory testFactory()
 */
class AnalisysCodeInfoInAccountDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
