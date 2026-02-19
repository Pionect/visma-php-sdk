<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Stocktaking details tab > Status > The status of the line of the stocktaking
 * document, which indicates whether the actual physical quantity has been
 * specified for the line.
 */
enum StocktakeLineV2dtoStatusEnum: string
{
    case NOT_ENTERED = 'NotEntered';
    case ENTERED = 'Entered';
    case SKIPPED = 'Skipped';
}
