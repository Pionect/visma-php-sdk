<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class VatRateLineDto extends Model
{
    /** The revision ID of the VAT rate. */
    #[Property]
    public ?string $revisionId;

    /** The VAT rate of the line. */
    #[Property]
    public ?float $vatRate;

    /** The type of the reporting group. */
    #[Property]
    public ?string $groupType;

    /** The date and time from which the VAT rate is effective. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $startDate;
}
