<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\VatRateLineGroupTypeEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\VatRateLineDtoFactory testFactory()
 */
class VatRateLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The revision ID of the VAT rate. */
        #[MapName('revisionID')]
        public ?string $revisionId = null,
        /** The VAT rate of the line. */
        public int|float|null $vatRate = null,
        /** The type of the reporting group. */
        public ?VatRateLineGroupTypeEnum $groupType = null,
        /** The date and time from which the VAT rate is effective. */
        public ?\Carbon\Carbon $startDate = null,
    ) {}
}
