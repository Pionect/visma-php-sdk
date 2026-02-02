<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\UiExtensionScreenDtoFactory testFactory()
 */
class UiExtensionScreenDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $screenId = null,
        public ?array $stepIds = null,
    ) {}
}
