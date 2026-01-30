<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represent a Sales Order Line in Sales Order Controller. Used to pass data to server for
 * creating or updating an order line
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesOrderLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderLineUpdateDtoFactory factory()
 */
class SalesOrderLineUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $invoiceNbr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $salesOrderOperation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $freeItem;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $requestedOn;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $shipOn;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $shipComplete;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $undershipThreshold;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $overshipThreshold;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $completed;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $markForPo;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $poSource;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $lotSerialNbr;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $reasonCode;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $salesPerson;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $taxCategory;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $commissionable;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $alternateId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $projectTask;

    #[Property]
    public ?array $subaccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $externalLink;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $isRotRutDeductible;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branchNumber;

    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $lineNbr;

    #[Property]
    public ?inventoryIdInSalesOrderLineUpdateDto $inventoryId;

    #[Property]
    public ?inventoryNumberInSalesOrderLineUpdateDto $inventoryNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $warehouse;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $uom;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $quantity;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $unitCost;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $unitPrice;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $discountPercent;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $discountAmount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $discountCode;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $manualDiscount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $discUnitPrice;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $lineDescription;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $note;
}
