<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ShipmentDetailLineDtoFactory testFactory()
 */
class ShipmentDetailLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ShipmentDetailLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Document details tab > The line number indicating sequence. */
        public ?int $lineNumber = null,
        /**
         * Document details tab > The type of the document, which is one of the
         * predefined order types or a custom order type.
         */
        public ?string $orderType = null,
        /** Document details tab > Order no. > The reference number of the document. */
        public ?string $orderNbr = null,
        /** Document details tab > Item ID > The ID of the item being shipped. */
        public ?string $inventoryNumber = null,
        /**
         * Document details tab > Free item > The free item earned by the customer, if
         * applicable. (This column does not appear for transfer.)
         */
        public ?bool $freeItem = null,
        public ?WarehouseInShipmentDetailLineDto $warehouse = null,
        public ?LocationInShipmentDetailLineDto $location = null,
        /**
         * Document details tab > UoM > The unit of measure used for the item in
         * shipment.
         */
        public ?string $uom = null,
        /**
         * Document details tab > Shipped qty. > The quantity of the item shipped with
         * the specified properties.
         */
        public int|float|null $shippedQty = null,
        /**
         * Document details tab > Ordered qty. > The quantity of the item ordered with
         * the specified properties.
         */
        public int|float|null $orderedQty = null,
        /**
         * Document details tab > Open qty. > The number of items with the specified
         * quantities still to be shipped.
         */
        public int|float|null $openQty = null,
        /**
         * Document details tab > Lot/serial no. > The lot or serial number of
         * particular items of the item.
         */
        public ?string $lotSerialNbr = null,
        /**
         * Document details tab > Expiration date > The expiration date of the item, if
         * it is traced for this item ID.
         */
        public ?\Carbon\Carbon $expirationDate = null,
        /** Document details tab > Reason code > The reason code used for shipments. */
        public ?string $reasonCode = null,
        /** Document details tab > Description > A short description for the shipment. */
        public ?string $description = null,
        /**
         * @var AllocationsDto[]|null
         *                            Document details tab > Allocations button > Opens the Allocations dialog box,
         *                            so that you can specify the locations, or lot or serial numbers for the units
         *                            of the of the item.
         */
        public ?array $allocations = null,
        /**
         * Document details tab > Order line no. > Read only. The order's line number
         * that matches this shipment line.
         */
        public ?int $orderLineNbr = null,
        public ?string $note = null,
        public ?string $externalLink = null,
        #[MapName('alternateID')]
        public ?string $alternateId = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr1 = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr2 = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr3 = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr4 = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr5 = null,
        /** A free custom colum of type decimal with max 4 decimals. */
        public int|float|null $customDec1 = null,
        /** A free custom colum of type decimal with max 4 decimals. */
        public int|float|null $customDec2 = null,
        /** A free custom colum of type int */
        public ?int $customInt1 = null,
        /** A free custom colum of type int */
        public ?int $customInt2 = null,
        /** A free custom colum of type DateTime - in UTC timezone */
        #[MapName('customDateTimeUTC1')]
        public ?\Carbon\Carbon $customDateTimeUtc1 = null,
    ) {}
}
