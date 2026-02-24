<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\LotSerialClassDetailTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\LotSerialClassDetailDtoFactory testFactory()
 */
class LotSerialClassDetailDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\LotSerialClassDetailDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The Id of the Lot Serial Class */
        public ?string $id = null,
        /** Segment number for the Lot Serial segment */
        public ?int $segmentNumber = null,
        /** Segment type for the Lot Serial segment */
        public ?LotSerialClassDetailTypeEnum $type = null,
        /** Segment value for the Lot Serial segment */
        public ?string $value = null,
        public ?string $errorInfo = null,
    ) {}
}
