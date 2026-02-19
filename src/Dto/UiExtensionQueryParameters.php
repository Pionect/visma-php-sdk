<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\UiExtensionQueryParametersTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\UiExtensionQueryParametersFactory testFactory()
 */
class UiExtensionQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $screenId = null,
        public ?UiExtensionQueryParametersTypeEnum $type = null,
    ) {}
}
