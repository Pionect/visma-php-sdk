<?php

namespace Pionect\VismaSdk\Enums;

/**
 * VAT settings tab > EU report code > The EU reporting code for the VAT.
 */
enum VatInformationEuReportCodeEnum: string
{
    case SALES_OF_GOODS = 'SalesOfGoods';
    case TRIANGULATION = 'Triangulation';
    case SALES_OF_SERVICE = 'SalesOfService';
}
