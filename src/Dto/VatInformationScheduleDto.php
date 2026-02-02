<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\VatInformationScheduleDtoFactory testFactory()
 */
class VatInformationScheduleDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?\Carbon\Carbon $startDate = null,
        public int|float|null $vatRate = null,
        public int|float|null $minTaxableAmt = null,
        public int|float|null $maxTaxableAmt = null,
        public ?string $reportingGroup = null,
        public int|float|null $deductibleVatRate = null,
        public ?string $groupType = null,
    ) {}
}
