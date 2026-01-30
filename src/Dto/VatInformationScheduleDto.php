<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatInformationScheduleDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatInformationScheduleDtoFactory factory()
 */
class VatInformationScheduleDto extends Model
{
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
