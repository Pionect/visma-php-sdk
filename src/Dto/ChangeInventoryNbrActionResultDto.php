<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ChangeInventoryNbrActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ChangeInventoryNbrActionResultDtoFactory testFactory()
 */
class ChangeInventoryNbrActionResultDto extends Model
{
    public function __construct(
        public ?string $actionId = null,
        public ?string $actionResult = null,
        public ?string $errorInfo = null,
    ) {}
}
