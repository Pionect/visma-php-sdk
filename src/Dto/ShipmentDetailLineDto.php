<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipmentDetailLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipmentDetailLineDtoFactory factory()
 */
class ShipmentDetailLineDto extends Model
{
    /** Document details tab &gt; The line number indicating sequence. */
    #[Property]
    public ?int $lineNumber;

    /** Document details tab &gt; The type of the document, which is one of the predefined order types or a custom order type. */
    #[Property]
    public ?string $orderType;

    /** Document details tab &gt; Order no. &gt; The reference number of the document. */
    #[Property]
    public ?string $orderNbr;

    /** Document details tab &gt; Item ID &gt; The ID of the item being shipped. */
    #[Property]
    public ?string $inventoryNumber;

    /** Document details tab &gt; Free item &gt; The free item earned by the customer, if applicable. (This column does not appear for transfer.) */
    #[Property]
    public ?bool $freeItem;

    #[Property]
    public ?warehouseInShipmentDetailLineDto $warehouse;

    #[Property]
    public ?locationInShipmentDetailLineDto $location;

    /** Document details tab &gt; UoM &gt; The unit of measure used for the item in shipment. */
    #[Property]
    public ?string $uom;

    /** Document details tab &gt; Shipped qty. &gt; The quantity of the item shipped with the specified properties. */
    #[Property]
    public ?float $shippedQty;

    /** Document details tab &gt; Ordered qty. &gt; The quantity of the item ordered with the specified properties. */
    #[Property]
    public ?float $orderedQty;

    /** Document details tab &gt; Open qty. &gt; The number of items with the specified quantities still to be shipped. */
    #[Property]
    public ?float $openQty;

    /** Document details tab &gt; Lot/serial no. &gt; The lot or serial number of particular items of the item. */
    #[Property]
    public ?string $lotSerialNbr;

    /** Document details tab &gt; Expiration date &gt; The expiration date of the item, if it is traced for this item ID. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    /** Document details tab &gt; Reason code &gt; The reason code used for shipments. */
    #[Property]
    public ?string $reasonCode;

    /** Document details tab &gt; Description &gt; A short description for the shipment. */
    #[Property]
    public ?string $description;

    /** Document details tab &gt; Allocations button &gt; Opens the Allocations dialog box, so that you can specify the locations, or lot or serial numbers for the units of the of the item. */
    #[Property]
    public ?array $allocations;

    /** Document details tab &gt; Order line no. &gt; Read only. The order's line number that matches this shipment line. */
    #[Property]
    public ?int $orderLineNbr;

    #[Property]
    public ?string $note;

    #[Property]
    public ?string $externalLink;

    #[Property]
    public ?string $alternateId;

    /** A free custom colum of type string with max length 100. */
    #[Property]
    public ?string $customStr1;

    /** A free custom colum of type string with max length 100. */
    #[Property]
    public ?string $customStr2;

    /** A free custom colum of type string with max length 100. */
    #[Property]
    public ?string $customStr3;

    /** A free custom colum of type string with max length 100. */
    #[Property]
    public ?string $customStr4;

    /** A free custom colum of type string with max length 100. */
    #[Property]
    public ?string $customStr5;

    /** A free custom colum of type decimal with max 4 decimals. */
    #[Property]
    public ?float $customDec1;

    /** A free custom colum of type decimal with max 4 decimals. */
    #[Property]
    public ?float $customDec2;

    /** A free custom colum of type int */
    #[Property]
    public ?int $customInt1;

    /** A free custom colum of type int */
    #[Property]
    public ?int $customInt2;

    /** A free custom colum of type DateTime - in UTC timezone */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $customDateTimeUtc1;
}
