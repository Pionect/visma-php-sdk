<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ShipmentOrderLineDto extends Model
{
    /** Orders tab &gt; Order typer &gt; The type of the order. */
    #[Property]
    public ?string $orderType;

    /** Orders tab &gt; Order no. &gt; The reference number of the sales or transfer order. */
    #[Property]
    public ?string $orderNbr;

    /** Orders tab &gt; Shipped qty. &gt; The quantity of goods shipped in accordance with the order. */
    #[Property]
    public ?float $shippedQty;

    /** Orders tab &gt; Shipped weight &gt; The weight of the goods shipped in accordance with the order. */
    #[Property]
    public ?float $shippedWeight;

    /** Orders tab &gt; Shipped volume &gt; The volume of the goods shipped in accordance with the sales or transfer order. */
    #[Property]
    public ?float $shippedVolume;

    /** Orders tab &gt; Invoice type &gt; The type of invoice for the goods shipped for the sales order. */
    #[Property]
    public ?string $invoiceType;

    /** Orders tab &gt; Invoice no. &gt; The reference number of the invoice for the goods shipped. */
    #[Property]
    public ?string $invoiceNbr;

    /** Orders tab &gt; Inventory doc. type &gt; The type of the inventory document that lists the items for this shipment. */
    #[Property]
    public ?string $inventoryDocType;

    /** Orders tab &gt; Inventory ref. no. &gt; The reference number of the inventory document that lists the items for this shipment. */
    #[Property]
    public ?string $inventoryRefNbr;

    #[Property]
    public ?string $note;
}
