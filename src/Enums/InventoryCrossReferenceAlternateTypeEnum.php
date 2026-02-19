<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Alternate type > The type of alternate codification used for the item if
 * applicable.
 */
enum InventoryCrossReferenceAlternateTypeEnum: string
{
    case CPN = 'CPN';
    case VPN = 'VPN';
    case GLOBAL = 'Global';
    case BARCODE = 'Barcode';
}
