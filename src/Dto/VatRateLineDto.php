<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\VatRateLineDtoFactory testFactory()
 */
class VatRateLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('revisionID')]
        public ?string $revisionId = null,
        public int|float|null $vatRate = null,
        public ?string $groupType = null,
        public ?\Carbon\Carbon $startDate = null,
    ) {}
}
