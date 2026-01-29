<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WorkTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WorkTypeDtoFactory factory()
 */
class WorkTypeDto extends Model
{
    #[Property]
    public ?string $rutRotType;

    #[Property]
    public ?string $description;

    #[Property]
    public ?string $xmlTag;
}
