<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Identifies the type of the time card (Normal, Corrected, NormalCorrected)
 */
enum EmployeeTimeCardQueryParametersTypeEnum: string
{
    case NORMAL = 'Normal';
    case CORRECTION = 'Correction';
    case NORMAL_CORRECTED = 'NormalCorrected';
}
