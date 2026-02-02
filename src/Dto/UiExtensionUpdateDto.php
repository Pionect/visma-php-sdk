<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\UiExtensionUpdateDtoFactory testFactory()
 */
class UiExtensionUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $title = null,
        public ?string $url = null,
        public ?string $type = null,
        public ?string $screenId = null,
        public ?string $stepId = null,
        public ?string $ownerId = null,
        public ?string $ownerName = null,
    ) {}
}
