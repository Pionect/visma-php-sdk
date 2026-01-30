<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ArspcommnHistoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ArspcommnHistoryDtoFactory testFactory()
 */
class ArspcommnHistoryDto extends Model
{
    public function __construct(
        public ?string $commnPeriod = null,
        public int|float|null $commnAmt = null,
        public int|float|null $commnblAmt = null,
        public ?\Carbon\Carbon $prProcessedDate = null,
        public ?string $errorInfo = null,
    ) {}
}
