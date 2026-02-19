<?php

namespace Pionect\VismaSdk\Enums;

/**
 * CRM section not available in Visma.net ERP
 */
enum ContactContactMethodEnum: string
{
    case ANY = 'Any';
    case EMAIL = 'Email';
    case MAIL = 'Mail';
    case FAX = 'Fax';
    case PHONE = 'Phone';
}
