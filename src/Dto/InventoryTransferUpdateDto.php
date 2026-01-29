<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a inventory issue in InventoryIssueController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryTransferUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryTransferUpdateDtoFactory factory()
 */
class InventoryTransferUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $warehouseId;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $toWarehouseId;

    /** The inventory issue lines */
    #[Property]
    public ?array $transferLines;

    #[Property]
    public ?referenceNumberInInventoryTransferUpdateDto $referenceNumber;

    #[Property]
    public ?holdInInventoryTransferUpdateDto $hold;

    #[Property]
    public ?dateInInventoryTransferUpdateDto $date;

    #[Property]
    public ?postPeriodInInventoryTransferUpdateDto $postPeriod;

    #[Property]
    public ?externalReferenceInInventoryTransferUpdateDto $externalReference;

    #[Property]
    public ?descriptionInInventoryTransferUpdateDto $description;

    #[Property]
    public ?controlQuantityInInventoryTransferUpdateDto $controlQuantity;

    #[Property]
    public ?branchNumberInInventoryTransferUpdateDto $branchNumber;
}
