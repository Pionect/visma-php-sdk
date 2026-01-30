<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SegmentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SegmentUpdateDtoFactory factory()
 */
class SegmentUpdateDto extends Model
{
    public function __construct(
        public ?int $segmentId = null,
        public ?string $segmentValue = null,
    ) {}
}
