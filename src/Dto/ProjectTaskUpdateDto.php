<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskUpdateDtoFactory testFactory()
 */
class ProjectTaskUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $taskId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $plannedStart = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $plannedEnd = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $startDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $rateTable = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $status = null,
        public ?VisibilityUpdateDto $visibility = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $restrictEmployees = null,
        public ?array $employees = null,
    ) {}
}
