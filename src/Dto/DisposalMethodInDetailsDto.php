<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The disposal method details of this fixed asset
 */
class DisposalMethodInDetailsDto extends Model
{
    /** The description of the disposal method */
    #[Property]
    public ?string $description;
}
