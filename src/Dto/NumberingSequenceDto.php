<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\NumberingSequenceDtoFactory testFactory()
 */
class NumberingSequenceDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\NumberingSequenceDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: The top part > Numbering ID > The unique ID of the numbering
         * series, which is an alphanumeric string of up to 10 characters.
         */
        public ?string $numberingId = null,
        public ?BranchInNumberingSequenceDto $branch = null,
        /**
         * Mandatory field: The table > Start number* > The number to be used first in
         * this numbering series or subsequence.
         */
        public ?string $startNbr = null,
        /**
         * Mandatory field: The table > End number* > The number to be used at the end
         * of this series. The end number cannot be less than the Start number.
         */
        public ?string $endNbr = null,
        /**
         * Mandatory field: The table > Start dat*e > The date when this series will
         * first be used.
         */
        public ?\Carbon\Carbon $startDate = null,
        /**
         * Mandatory field: The table > Last number* > The most recent allocated number
         * used for an object in this series.
         */
        public ?string $lastNbr = null,
        /**
         * Mandatory field: The table > Warning number* > The minimum number that
         * triggers a warning that available numbers will be used up soon.
         */
        public ?string $warnNbr = null,
        /**
         * Mandatory field: The table > Numbering step* > The increment this series uses
         * to generate the next number.
         */
        public ?int $nbrStep = null,
        /** Next number that will be assigned */
        public ?string $nextNumber = null,
    ) {}
}
