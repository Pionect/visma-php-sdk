<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Filter by Kit Assembly Status. Possible values: H (Hold), B (Balanced), R
 * (Released)
 */
enum KitAssemblyQueryParametersStatusEnum: string
{
    case H = 'H';
    case B = 'B';
    case R = 'R';
}
