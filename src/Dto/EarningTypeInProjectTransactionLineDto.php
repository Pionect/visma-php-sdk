<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Earning type &gt; The earning type specified for the transaction to calculate the labour cost.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EarningTypeInProjectTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EarningTypeInProjectTransactionLineDtoFactory factory()
 */
class EarningTypeInProjectTransactionLineDto extends Model
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
