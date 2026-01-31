<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CrossReferenceUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CrossReferenceUpdateDtoFactory testFactory()
 */
class CrossReferenceUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $alternateType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $bAccount = null,
        #[MapName('alternateID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $alternateId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $uom = null,
    ) {}
}
