<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The disposal method details of this fixed asset
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DisposalMethodInDetailsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DisposalMethodInDetailsDtoFactory factory()
 */
class DisposalMethodInDetailsDto extends Model
{
    /** The description of the disposal method */
    #[Property]
    public ?string $description;
}
