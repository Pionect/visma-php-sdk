<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UiExtensionScreenDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UiExtensionScreenDtoFactory factory()
 */
class UiExtensionScreenDto extends Model
{
    public function __construct(
        public ?string $screenId = null,
        public ?array $stepIds = null,
    ) {}
}
