<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Type can be
 */
enum DetailsPropertyTypeEnum: string
{
    case PROPERTY = 'Property';
    case GRANT_PROPERTY = 'GrantProperty';
    case LEASED = 'Leased';
    case LEASEDTO_OTHERS = 'LeasedtoOthers';
    case RENTED = 'Rented';
    case RENTEDTO_OTHERS = 'RentedtoOthers';
    case CREDIT = 'Credit';
}
