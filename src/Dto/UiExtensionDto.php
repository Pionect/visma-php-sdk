<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UiExtensionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UiExtensionDtoFactory testFactory()
 */
class UiExtensionDto extends Model
{
    public function __construct(
        public ?string $internalId = null,
        public ?string $title = null,
        public ?string $url = null,
        public ?string $type = null,
        public ?string $screenId = null,
        public ?string $stepId = null,
        public ?string $ownerName = null,
        public ?bool $enabled = null,
    ) {}
}
