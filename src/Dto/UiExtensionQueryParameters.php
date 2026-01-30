<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UiExtensionQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UiExtensionQueryParametersFactory testFactory()
 */
class UiExtensionQueryParameters extends Model
{
    public function __construct(
        public ?string $screenId = null,
        public ?string $type = null,
    ) {}
}
