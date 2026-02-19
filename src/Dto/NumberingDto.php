<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\NumberingDtoFactory testFactory()
 */
class NumberingDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: The top part > Numbering ID > The unique ID of the numbering
         * series, which is an alphanumeric string of up to 10 characters.
         */
        public ?string $numberingId = null,
        /**
         * Mandatory field: The top part > Description* > The description of the
         * numbering series.
         */
        public ?string $description = null,
        /**
         * The top part > Manual numbering > A check box that indicates (if selected)
         * that the system will not generate numbers for the series and users will need
         * to specify document numbers manually.
         */
        public ?bool $manualNumbering = null,
        /**
         * Mandatory field: The top part > New number symbol* > An alphanumeric string
         * used to indicate that a new number for an object will be assigned.
         */
        public ?string $newNumberSymbol = null,
        /** @var NumberingSequenceDto[]|null */
        public ?array $sequence = null,
    ) {}
}
