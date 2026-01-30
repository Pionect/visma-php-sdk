<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DtoSegmentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DtoSegmentUpdateDtoFactory testFactory()
 */
class DtoSegmentUpdateDto extends Model
{
    public function __construct(
        public ?array $segmentValues = null,
        public ?string $dimensionId = null,
        public ?int $segementId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
    ) {}
}
