<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Table SigmaExternalCodes1 &gt; The information row connected through the ExternalCode1
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExternalCode1infoInAccountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExternalCode1infoInAccountDtoFactory factory()
 */
class ExternalCode1infoInAccountDto extends Model
{
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
