<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Table SigmaExternalCodes2 &gt; The information row connected through the ExternalCode2
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExternalCode2infoInAccountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExternalCode2infoInAccountDtoFactory factory()
 */
class ExternalCode2infoInAccountDto extends Model
{
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
