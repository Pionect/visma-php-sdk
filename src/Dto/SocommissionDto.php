<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SocommissionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SocommissionDtoFactory testFactory()
 */
class SocommissionDto extends Model
{
    public function __construct(
        public ?string $salesPersonId = null,
        public int|float|null $commissionPercent = null,
        public int|float|null $commissionAmount = null,
        public int|float|null $commissionableAmount = null,
    ) {}
}
