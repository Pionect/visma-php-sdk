<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class VatInformationScheduleDto extends Model
{
    /** Mandatory field: Start date &gt; The date when the VAT at the rate in the current row becomes effective. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $startDate;

    /** VAT rate &gt; The VAT rate (%) that is used to calculate the VAT amount. */
    #[Property]
    public ?float $vatRate;

    /** Min. taxable amount &gt; The minimum taxable amount for which this rate is applicable. */
    #[Property]
    public ?float $minTaxableAmt;

    /** Max. taxable amount &gt; The maximum taxable amount for which this rate applies. */
    #[Property]
    public ?float $maxTaxableAmt;

    /** Reporting group &gt; The reporting group for the VAT. */
    #[Property]
    public ?string $reportingGroup;

    /** Deductible VAT rate &gt; The VAT rate (%) that is used to calculate the amount deductible from the output VAT. */
    #[Property]
    public ?float $deductibleVatRate;

    /** Group type &gt; The type of the reporting group. */
    #[Property]
    public ?string $groupType;
}
