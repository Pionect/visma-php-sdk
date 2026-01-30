<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WorkTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WorkTypeDtoFactory factory()
 */
class WorkTypeDto extends Model
{
    public function __construct(
        public ?string $rutRotType = null,
        public ?string $description = null,
        public ?string $xmlTag = null,
    ) {}
}
