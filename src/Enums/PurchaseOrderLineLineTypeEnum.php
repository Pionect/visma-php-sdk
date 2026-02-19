<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Line type > 	The type of the order line, which can be one of the following
 * options: Goods for inventory, Non-stock, Service, Freight, Good for sales
 * order, Non-stock for drop-ship, Drop-ship, Goods for RP, Description.
 */
enum PurchaseOrderLineLineTypeEnum: string
{
    case GOODS_FOR_INVENTORY = 'GoodsForInventory';
    case GOODS_FOR_SALES_ORDER = 'GoodsForSalesOrder';
    case GOODS_FOR_REPLENISHMENT = 'GoodsForReplenishment';
    case GOODS_FOR_DROP_SHIP = 'GoodsForDropShip';
    case NON_STOCK_FOR_DROP_SHIP = 'NonStockForDropShip';
    case NON_STOCK_FOR_SALES_ORDER = 'NonStockForSalesOrder';
    case NON_STOCK = 'NonStock';
    case SERVICE = 'Service';
    case FREIGHT = 'Freight';
    case DESCRIPTION = 'Description';
}
