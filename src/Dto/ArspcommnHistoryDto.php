<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ArspcommnHistoryDtoFactory testFactory()
 */
class ArspcommnHistoryDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ArspcommnHistoryDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $commnPeriod = null,
        public int|float|null $commnAmt = null,
        public int|float|null $commnblAmt = null,
        public ?\Carbon\Carbon $prProcessedDate = null,
        public ?string $errorInfo = null,
    ) {}
}
