<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatRateLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatRateLineDtoFactory factory()
 */
class VatRateLineDto extends Model
{
    public function __construct(
        #[MapName('revisionID')]
        public ?string $revisionId = null,
        public int|float|null $vatRate = null,
        public ?string $groupType = null,
        public ?\Carbon\Carbon $startDate = null,
    ) {}
}
