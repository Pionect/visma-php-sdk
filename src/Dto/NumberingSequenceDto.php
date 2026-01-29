<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\NumberingSequenceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\NumberingSequenceDtoFactory factory()
 */
class NumberingSequenceDto extends Model
{
    /** Mandatory field: The top part &gt; Numbering ID &gt; The unique ID of the numbering series, which is an alphanumeric string of up to 10 characters. */
    #[Property]
    public ?string $numberingId;

    #[Property]
    public ?branchInNumberingSequenceDto $branch;

    /** Mandatory field: The table &gt; Start number* &gt; The number to be used first in this numbering series or subsequence. */
    #[Property]
    public ?string $startNbr;

    /** Mandatory field: The table &gt; End number* &gt; The number to be used at the end of this series. The end number cannot be less than the Start number. */
    #[Property]
    public ?string $endNbr;

    /** Mandatory field: The table &gt; Start dat*e &gt; The date when this series will first be used. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $startDate;

    /** Mandatory field: The table &gt; Last number* &gt; The most recent allocated number used for an object in this series. */
    #[Property]
    public ?string $lastNbr;

    /** Mandatory field: The table &gt; Warning number* &gt; The minimum number that triggers a warning that available numbers will be used up soon. */
    #[Property]
    public ?string $warnNbr;

    /** Mandatory field: The table &gt; Numbering step* &gt; The increment this series uses to generate the next number. */
    #[Property]
    public ?int $nbrStep;

    /** Next number that will be assigned */
    #[Property]
    public ?string $nextNumber;
}
