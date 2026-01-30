<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskUpdateDtoFactory factory()
 */
class ProjectTaskUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $taskId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $plannedStart;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $plannedEnd;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $startDate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $rateTable;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $status;

    #[Property]
    public ?VisibilityUpdateDto $visibility;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $restrictEmployees;

    #[Property]
    public ?array $employees;
}
