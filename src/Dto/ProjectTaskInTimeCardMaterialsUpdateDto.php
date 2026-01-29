<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The project task that the employee worked on.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskInTimeCardMaterialsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInTimeCardMaterialsUpdateDtoFactory factory()
 */
class ProjectTaskInTimeCardMaterialsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
