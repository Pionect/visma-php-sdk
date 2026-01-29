<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Table SigmaBIAnalysisCodes &gt; The information row connected through the AnalysisCode
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AnalisysCodeInfoInAccountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AnalisysCodeInfoInAccountDtoFactory factory()
 */
class AnalisysCodeInfoInAccountDto extends Model
{
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
