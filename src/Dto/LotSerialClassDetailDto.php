<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LotSerialClassDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LotSerialClassDetailDtoFactory testFactory()
 */
class LotSerialClassDetailDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?int $segmentNumber = null,
        public ?string $type = null,
        public ?string $value = null,
        public ?string $errorInfo = null,
    ) {}
}
