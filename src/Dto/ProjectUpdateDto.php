<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represent a Project in Project Controller. Used to pass data to server for creating or
 * updating an project
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectUpdateDtoFactory testFactory()
 */
class ProjectUpdateDto extends Model
{
    public function __construct(
        #[MapName('projectID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $projectId = null,
        #[MapName('internalID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?int $internalId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customer = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $template = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $status = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $defAccount = null,
        public ?array $defSub = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $defAccrualAccount = null,
        public ?array $defAccrualSub = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $startDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $endDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $billingPeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $allocationRule = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $billingRule = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branch = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $rateTable = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $projectManger = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $projectManagerInternalId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $autoAllocate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $automaticReleaseArDoc = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $restricEmployees = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $restricEquipment = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerLocation = null,
        public ?VisibilityUpdateDto $visibility = null,
        public ?array $tasks = null,
        public ?array $employees = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
    ) {}
}
