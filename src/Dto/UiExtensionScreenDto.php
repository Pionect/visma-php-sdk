<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UiExtensionScreenDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UiExtensionScreenDtoFactory factory()
 */
class UiExtensionScreenDto extends Model
{
    #[Property]
    public ?string $screenId;

    #[Property]
    public ?array $stepIds;
}
