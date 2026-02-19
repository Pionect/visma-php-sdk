<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\TaskStatusEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskUpdateDtoFactory testFactory()
 */
class ProjectTaskUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
        public ?TaskStatusEnum $status = null,
        public ?VisibilityUpdateDto $visibility = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $restrictEmployees = null,
        /** @var TaskEmployeeUpdateDto[]|null */
        public ?array $employees = null,
    ) {}
}
