<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DtoSegmentFactory testFactory()
 */
class DtoSegment extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $internalId = null,
        public ?int $segmentId = null,
        public ?string $description = null,
        public ?int $length = null,
        public ?string $publicId = null,
        public ?string $timeStamp = null,
        public ?\Carbon\Carbon $lastModified = null,
        public ?bool $validate = null,
        /** @var DtoSegmentValue[]|null */
        public ?array $segmentValues = null,
        public ?bool $isAutoNumber = null,
        public ?int $consolNumChar = null,
        public ?int $consolOrder = null,
    ) {}
}
