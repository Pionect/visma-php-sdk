<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represent a Purchase Order Line in Purchase Order Controller. Used to pass data to server
 * for creating or updating an order line
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseOrderLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseOrderLineUpdateDtoFactory factory()
 */
class PurchaseOrderLineUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $lineNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branch;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $inventory;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $lineType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $warehouse;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $lineDescription;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $uom;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $orderQty;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $unitCost;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $extCost;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $discountAmount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $discountPercent;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $manualDiscount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $discountCode;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $amount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $alternateId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $minReceipt;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $maxReceipt;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $completeOn;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $receiptAction;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $taxCategory;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $account;

    #[Property]
    public ?array $sub;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $project;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $projectTask;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $requested;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $promised;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $note;

    #[Property]
    public ?customStr1InPurchaseOrderLineUpdateDto $customStr1;

    #[Property]
    public ?customStr2InPurchaseOrderLineUpdateDto $customStr2;

    #[Property]
    public ?customStr3InPurchaseOrderLineUpdateDto $customStr3;

    #[Property]
    public ?customStr4InPurchaseOrderLineUpdateDto $customStr4;

    #[Property]
    public ?customStr5InPurchaseOrderLineUpdateDto $customStr5;

    #[Property]
    public ?customDec1InPurchaseOrderLineUpdateDto $customDec1;

    #[Property]
    public ?customDec2InPurchaseOrderLineUpdateDto $customDec2;

    #[Property]
    public ?customInt1InPurchaseOrderLineUpdateDto $customInt1;

    #[Property]
    public ?customInt2InPurchaseOrderLineUpdateDto $customInt2;

    #[Property]
    public ?customDateTimeUTC1InPurchaseOrderLineUpdateDto $customDateTimeUtc1;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $completed;
}
