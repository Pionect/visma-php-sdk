<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DtoSegmentFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DtoSegmentFactory factory()
 */
class DtoSegment extends Model
{
    public function __construct(
        public ?string $internalId = null,
        public ?int $segmentId = null,
        public ?string $description = null,
        public ?int $length = null,
        public ?string $publicId = null,
        public ?string $timeStamp = null,
        public ?\Carbon\Carbon $lastModified = null,
        public ?bool $validate = null,
        public ?array $segmentValues = null,
        public ?bool $isAutoNumber = null,
        public ?int $consolNumChar = null,
        public ?int $consolOrder = null,
    ) {}
}
