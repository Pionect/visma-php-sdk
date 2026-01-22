<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class NumberingDto extends Model
{
    /** Mandatory field: The top part &gt; Numbering ID &gt; The unique ID of the numbering series, which is an alphanumeric string of up to 10 characters. */
    #[Property]
    public ?string $numberingId;

    /** Mandatory field: The top part &gt; Description* &gt; The description of the numbering series. */
    #[Property]
    public ?string $description;

    /** The top part &gt; Manual numbering &gt; A check box that indicates (if selected) that the system will not generate numbers for the series and users will need to specify document numbers manually. */
    #[Property]
    public ?bool $manualNumbering;

    /** Mandatory field: The top part &gt; New number symbol* &gt; An alphanumeric string used to indicate that a new number for an object will be assigned. */
    #[Property]
    public ?string $newNumberSymbol;

    #[Property]
    public ?array $sequence;
}
