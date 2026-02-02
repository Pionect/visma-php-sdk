<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\EarningTypeDtoFactory testFactory()
 */
class EarningTypeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
