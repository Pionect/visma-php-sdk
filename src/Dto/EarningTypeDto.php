<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EarningTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EarningTypeDtoFactory factory()
 */
class EarningTypeDto extends Model
{
    public function __construct(
        public ?string $code = null,
        public ?string $description = null,
        public ?bool $isOvertime = null,
        public ?bool $isBillable = null,
        public ?bool $isActive = null,
        public int|float|null $overtimeMultiplier = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
