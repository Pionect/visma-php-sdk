<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ShipmentOrderLineDtoFactory testFactory()
 */
class ShipmentOrderLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ShipmentOrderLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Orders tab > Order typer > The type of the order. */
        public ?string $orderType = null,
        /** Orders tab > Order no. > The reference number of the sales or transfer order. */
        public ?string $orderNbr = null,
        /**
         * Orders tab > Shipped qty. > The quantity of goods shipped in accordance with
         * the order.
         */
        public int|float|null $shippedQty = null,
        /**
         * Orders tab > Shipped weight > The weight of the goods shipped in accordance
         * with the order.
         */
        public int|float|null $shippedWeight = null,
        /**
         * Orders tab > Shipped volume > The volume of the goods shipped in accordance
         * with the sales or transfer order.
         */
        public int|float|null $shippedVolume = null,
        /**
         * Orders tab > Invoice type > The type of invoice for the goods shipped for the
         * sales order.
         */
        public ?string $invoiceType = null,
        /**
         * Orders tab > Invoice no. > The reference number of the invoice for the goods
         * shipped.
         */
        public ?string $invoiceNbr = null,
        /**
         * Orders tab > Inventory doc. type > The type of the inventory document that
         * lists the items for this shipment.
         */
        public ?string $inventoryDocType = null,
        /**
         * Orders tab > Inventory ref. no. > The reference number of the inventory
         * document that lists the items for this shipment.
         */
        public ?string $inventoryRefNbr = null,
        public ?string $note = null,
    ) {}
}
