<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UiExtensionUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UiExtensionUpdateDtoFactory factory()
 */
class UiExtensionUpdateDto extends Model
{
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
