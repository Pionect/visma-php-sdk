<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TimeCardSummaryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TimeCardSummaryUpdateDtoFactory testFactory()
 */
class TimeCardSummaryUpdateDto extends Model
{
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
