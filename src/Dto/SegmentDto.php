<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SegmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SegmentDtoFactory testFactory()
 */
class SegmentDto extends Model
{
    public function __construct(
        public ?int $segmentId = null,
        public ?string $segmentDescription = null,
        public ?string $segmentValue = null,
        public ?string $segmentValueDescription = null,
    ) {}
}
