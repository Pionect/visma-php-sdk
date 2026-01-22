<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class StocktakeLineV2dto extends Model
{
    /** Stocktaking details tab &gt; Status &gt; The status of the line of the stocktaking document, which indicates whether the actual physical quantity has been specified for the line. */
    #[Property]
    public ?string $status;

    /** Stocktaking details tab &gt; Line no. &gt; The number of the line in the stocktaking document. */
    #[Property]
    public ?int $lineNbr;

    /** Stocktaking details tab &gt; Tag no. &gt; The tag number for the line item, which is the stock item with the properties specified in the line, such as location, subitem, and lot or serial number. */
    #[Property]
    public ?int $tagNbr;

    #[Property]
    public ?\inventoryInStocktakeLineV2Dto $inventory;

    #[Property]
    public ?\locationInStocktakeLineV2Dto $location;

    #[Property]
    public ?\warehouseInStocktakeLineV2Dto $warehouse;

    /** Stocktaking details tab &gt; Lot/serial number &gt; The lot or serial number of the item. */
    #[Property]
    public ?string $lotSerialNbr;

    /** Stocktaking details tab &gt; Expiration date &gt; The expiration date of the item with this specific lot or serial number. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    /** Stocktaking details tab &gt; Book quantity &gt; The book quantity of the item, which is calculated based on the system records. */
    #[Property]
    public ?float $bookQuantity;

    /** Stocktaking details tab &gt; Physical quantity &gt; The physical quantity of the item as entered manually. */
    #[Property]
    public ?float $physicalQuantity;

    /** Stocktaking details tab &gt; Variance quantity &gt; The difference between the book quantity and the physical quantity for the line item. */
    #[Property]
    public ?float $varianceQuantity;

    /** Stocktaking details tab &gt; Unit cost &gt; The last cost of the item’s base unit as approximation of its unit cost during the count. */
    #[Property]
    public ?float $unitCost;

    /** Stocktaking details tab &gt; Variance cost &gt; The difference between the extended cost calculated based on the book quantity and the extended cost calculated based on the physical quantity for the item. */
    #[Property]
    public ?float $extVarianceCost;

    /** Stocktaking details tab &gt; Reason code &gt; The reason code for the item. */
    #[Property]
    public ?string $reasonCode;

    /** System generated information. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** Stocktaking details tab &gt; Base Unit &gt; The base unit for the item. */
    #[Property]
    public ?string $baseUnit;
}
