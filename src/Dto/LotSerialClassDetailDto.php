<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\LotSerialClassDetailDtoFactory testFactory()
 */
class LotSerialClassDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?int $segmentNumber = null,
        public ?string $type = null,
        public ?string $value = null,
        public ?string $errorInfo = null,
    ) {}
}
