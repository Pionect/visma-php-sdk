<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ChangeProjectIdActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ChangeProjectIdActionDtoFactory factory()
 */
class ChangeProjectIdActionDto extends Model
{
    #[Property]
    public ?string $projectId;
}
