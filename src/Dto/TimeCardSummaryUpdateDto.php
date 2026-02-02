<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TimeCardSummaryUpdateDtoFactory testFactory()
 */
class TimeCardSummaryUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $earningType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $project = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $projectTask = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $mon = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $tue = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $wed = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $thu = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $fri = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $sat = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $sun = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $invoiceable = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
    ) {}
}
