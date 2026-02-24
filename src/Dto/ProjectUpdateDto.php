<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\ProjectBillingPeriodEnum;
use Pionect\VismaSdk\Enums\TemplateNumberDescriptionStatusEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represent a Project in Project Controller. Used to pass data to server for creating or
 * updating an project
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectUpdateDtoFactory testFactory()
 */
class ProjectUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ProjectUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
        public ?TemplateNumberDescriptionStatusEnum $status = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $defAccount = null,
        /**
         * @var SegmentUpdateDto[]|null
         *                              Mandatory field when Project Template is not specified.
         */
        public ?array $defSub = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $defAccrualAccount = null,
        /** @var SegmentUpdateDto[]|null */
        public ?array $defAccrualSub = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $startDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $endDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?ProjectBillingPeriodEnum $billingPeriod = null,
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
        /** @var TaskUpdateDto[]|null */
        public ?array $tasks = null,
        /** @var ProjectEmployeeUpdateDto[]|null */
        public ?array $employees = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
    ) {}
}
