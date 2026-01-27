<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ProjectBudgetDto extends Model
{
    #[Property]
    public ?string $projectId;

    #[Property]
    public ?string $projectTaskId;

    #[Property]
    public ?string $accountGroupId;

    #[Property]
    public ?string $inventoryNumber;

    #[Property]
    public ?string $description;

    #[Property]
    public ?string $uom;

    #[Property]
    public ?float $rate;

    #[Property]
    public ?float $originalBudgetQty;

    #[Property]
    public ?float $originalBudgetAmount;

    #[Property]
    public ?float $revisedBudgetQty;

    #[Property]
    public ?float $revisedBudgetAmount;

    #[Property]
    public ?float $actualQty;

    #[Property]
    public ?float $actualAmount;

    #[Property]
    public ?string $type;

    #[Property]
    public ?float $committedQty;

    #[Property]
    public ?float $committedAmount;

    #[Property]
    public ?float $committedOpenQty;

    #[Property]
    public ?float $committedOpenAmount;

    #[Property]
    public ?float $committedReceivedQty;

    #[Property]
    public ?float $committedInvoicedQty;

    #[Property]
    public ?float $committedInvoicedAmount;

    #[Property]
    public ?string $errorInfo;
}
