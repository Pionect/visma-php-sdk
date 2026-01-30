<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\NumberingSequenceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\NumberingSequenceDtoFactory factory()
 */
class NumberingSequenceDto extends Model
{
    public function __construct(
        public ?string $numberingId = null,
        public ?BranchInNumberingSequenceDto $branch = null,
        public ?string $startNbr = null,
        public ?string $endNbr = null,
        public ?\Carbon\Carbon $startDate = null,
        public ?string $lastNbr = null,
        public ?string $warnNbr = null,
        public ?int $nbrStep = null,
        public ?string $nextNumber = null,
    ) {}
}
