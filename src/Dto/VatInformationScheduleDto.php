<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\VatRateLineGroupTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\VatInformationScheduleDtoFactory testFactory()
 */
class VatInformationScheduleDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\VatInformationScheduleDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: Start date > The date when the VAT at the rate in the
         * current row becomes effective.
         */
        public ?\Carbon\Carbon $startDate = null,
        /** VAT rate > The VAT rate (%) that is used to calculate the VAT amount. */
        public int|float|null $vatRate = null,
        /**
         * Min. taxable amount > The minimum taxable amount for which this rate is
         * applicable.
         */
        public int|float|null $minTaxableAmt = null,
        /** Max. taxable amount > The maximum taxable amount for which this rate applies. */
        public int|float|null $maxTaxableAmt = null,
        /** Reporting group > The reporting group for the VAT. */
        public ?string $reportingGroup = null,
        /**
         * Deductible VAT rate > The VAT rate (%) that is used to calculate the amount
         * deductible from the output VAT.
         */
        public int|float|null $deductibleVatRate = null,
        /** Group type > The type of the reporting group. */
        public ?VatRateLineGroupTypeEnum $groupType = null,
    ) {}
}
