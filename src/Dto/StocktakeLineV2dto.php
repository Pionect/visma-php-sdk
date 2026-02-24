<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\StocktakeLineV2dtoStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\StocktakeLineV2dtoFactory testFactory()
 */
class StocktakeLineV2dto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\StocktakeLineV2dtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Stocktaking details tab > Status > The status of the line of the stocktaking
         * document, which indicates whether the actual physical quantity has been
         * specified for the line.
         */
        public ?StocktakeLineV2dtoStatusEnum $status = null,
        /**
         * Stocktaking details tab > Line no. > The number of the line in the
         * stocktaking document.
         */
        public ?int $lineNbr = null,
        /**
         * Stocktaking details tab > Tag no. > The tag number for the line item, which
         * is the stock item with the properties specified in the line, such as
         * location, subitem, and lot or serial number.
         */
        public ?int $tagNbr = null,
        public ?InventoryInStocktakeLineV2dto $inventory = null,
        public ?LocationInStocktakeLineV2dto $location = null,
        public ?WarehouseInStocktakeLineV2dto $warehouse = null,
        /**
         * Stocktaking details tab > Lot/serial number > The lot or serial number of the
         * item.
         */
        public ?string $lotSerialNbr = null,
        /**
         * Stocktaking details tab > Expiration date > The expiration date of the item
         * with this specific lot or serial number.
         */
        public ?\Carbon\Carbon $expirationDate = null,
        /**
         * Stocktaking details tab > Book quantity > The book quantity of the item,
         * which is calculated based on the system records.
         */
        public int|float|null $bookQuantity = null,
        /**
         * Stocktaking details tab > Physical quantity > The physical quantity of the
         * item as entered manually.
         */
        public int|float|null $physicalQuantity = null,
        /**
         * Stocktaking details tab > Variance quantity > The difference between the book
         * quantity and the physical quantity for the line item.
         */
        public int|float|null $varianceQuantity = null,
        /**
         * Stocktaking details tab > Unit cost > The last cost of the item’s base unit
         * as approximation of its unit cost during the count.
         */
        public int|float|null $unitCost = null,
        /**
         * Stocktaking details tab > Variance cost > The difference between the extended
         * cost calculated based on the book quantity and the extended cost calculated
         * based on the physical quantity for the item.
         */
        public int|float|null $extVarianceCost = null,
        /** Stocktaking details tab > Reason code > The reason code for the item. */
        public ?string $reasonCode = null,
        /** System generated information. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /** Stocktaking details tab > Base Unit > The base unit for the item. */
        public ?string $baseUnit = null,
    ) {}
}
