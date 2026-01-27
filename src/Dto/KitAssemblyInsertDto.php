<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class KitAssemblyInsertDto extends Model
{
    #[Property]
    public ?\KitAssemblyLinkInsertDto $kitAssemblyLink;

    /** Type, possible values: P - Production, D - Disassembly */
    #[Property]
    public ?string $type;

    #[Property]
    public ?string $refNo;

    #[Property]
    public ?\DtoValueOfBoolean $hold;

    #[Property]
    public ?\DtoValueOfDateTime $date;

    #[Property]
    public ?\DtoValueOfString $postPeriod;

    #[Property]
    public ?\DtoValueOfString $itemId;

    #[Property]
    public ?\DtoValueOfString $revision;

    #[Property]
    public ?\DtoValueOfString $reasonCode;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfString $warehouse;

    #[Property]
    public ?\DtoValueOfString $location;

    #[Property]
    public ?\DtoValueOfString $uoM;

    #[Property]
    public ?\DtoValueOfDecimal $quantity;

    #[Property]
    public ?array $stockComponentLines;

    /**
     * This property is deprecated and will be removed in a future version.
     * Use StockComponentLineAllocations within each StockComponentLine instead.
     */
    #[Property]
    public ?array $stockComponentAllocations;

    #[Property]
    public ?array $nonStockComponentLines;

    #[Property]
    public ?array $kitAllocations;
}
