<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UiExtensionQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UiExtensionQueryParametersFactory factory()
 */
class UiExtensionQueryParameters extends Model
{
    #[Property]
    public ?string $screenId;

    #[Property]
    public ?string $type;
}
