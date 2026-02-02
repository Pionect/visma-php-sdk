<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\NumberingSequenceDtoFactory testFactory()
 */
class NumberingSequenceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
