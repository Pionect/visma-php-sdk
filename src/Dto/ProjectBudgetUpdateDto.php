<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectBudgetUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectBudgetUpdateDtoFactory factory()
 */
class ProjectBudgetUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $projectId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $projectTaskId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $accountGroupId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $inventoryNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $uom;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $rate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $originalBudgetQty;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $originalBudgetAmount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $revisedBudgetQty;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $revisedBudgetAmount;
}
