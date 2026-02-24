<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TimeCardMaterialsUpdateDtoFactory testFactory()
 */
class TimeCardMaterialsUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\TimeCardMaterialsUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?AttributeDetailUpdateOperationEnum $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $itemId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $uoM = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $project = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $projectTask = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $mon = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $tue = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $wed = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $thu = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $fri = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $sat = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $sun = null,
    ) {}
}
