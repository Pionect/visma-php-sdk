<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TimeCardSummaryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TimeCardSummaryUpdateDtoFactory factory()
 */
class TimeCardSummaryUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNumber = null,
        public ?EarningTypeInTimeCardSummaryUpdateDto $earningType = null,
        public ?ProjectInTimeCardSummaryUpdateDto $project = null,
        public ?ProjectTaskInTimeCardSummaryUpdateDto $projectTask = null,
        public ?MonInTimeCardSummaryUpdateDto $mon = null,
        public ?TueInTimeCardSummaryUpdateDto $tue = null,
        public ?WedInTimeCardSummaryUpdateDto $wed = null,
        public ?ThuInTimeCardSummaryUpdateDto $thu = null,
        public ?FriInTimeCardSummaryUpdateDto $fri = null,
        public ?SatInTimeCardSummaryUpdateDto $sat = null,
        public ?SunInTimeCardSummaryUpdateDto $sun = null,
        public ?InvoiceableInTimeCardSummaryUpdateDto $invoiceable = null,
        public ?DescriptionInTimeCardSummaryUpdateDto $description = null,
    ) {}
}
