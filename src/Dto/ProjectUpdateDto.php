<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represent a Project in Project Controller. Used to pass data to server for creating or
 * updating an project
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectUpdateDtoFactory factory()
 */
class ProjectUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $projectId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $internalId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $customer;

    #[Property]
    public ?descriptionInProjectUpdateDto $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $hold;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $template;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $status;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $defAccount;

    /** Mandatory field when Project Template is not specified. */
    #[Property]
    public ?array $defSub;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $defAccrualAccount;

    #[Property]
    public ?array $defAccrualSub;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $startDate;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $endDate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $billingPeriod;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $allocationRule;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $billingRule;

    #[Property]
    public ?branchInProjectUpdateDto $branch;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $rateTable;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $projectManger;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $projectManagerInternalId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $autoAllocate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $automaticReleaseArDoc;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $restricEmployees;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $restricEquipment;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $customerLocation;

    #[Property]
    public ?VisibilityUpdateDto $visibility;

    #[Property]
    public ?array $tasks;

    #[Property]
    public ?array $employees;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $note;
}
