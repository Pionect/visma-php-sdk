<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class KitAssemblyDto extends Model
{
    #[Property]
    public ?string $refNo;

    /** Status, possible values: H - On Hold, B - Balanced, R - Released */
    #[Property]
    public ?string $status;

    #[Property]
    public ?bool $hold;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $date;

    #[Property]
    public ?string $postPeriod;

    #[Property]
    public ?string $itemId;

    #[Property]
    public ?string $revision;

    #[Property]
    public ?string $reasonCode;

    #[Property]
    public ?string $description;

    #[Property]
    public ?string $warehouse;

    #[Property]
    public ?string $location;

    #[Property]
    public ?string $uoM;

    #[Property]
    public ?float $quantity;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $createdDateTime;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $salesOrderLink;

    #[Property]
    public ?array $stockComponentLines;

    #[Property]
    public ?array $nonStockComponentLines;

    #[Property]
    public ?array $kitAllocations;

    /** Timestamp of the kit assembly record */
    #[Property]
    public ?string $timestamp;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
