<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BackgroundApiAcceptedDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BackgroundApiAcceptedDtoFactory factory()
 */
class BackgroundApiAcceptedDto extends Model
{
    #[Property]
    public ?string $id;

    #[Property]
    public ?string $stateLocation;
}
