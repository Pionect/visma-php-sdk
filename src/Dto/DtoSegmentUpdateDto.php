<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DtoSegmentUpdateDtoFactory testFactory()
 */
class DtoSegmentUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?array $segmentValues = null,
        public ?string $dimensionId = null,
        public ?int $segementId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
    ) {}
}
