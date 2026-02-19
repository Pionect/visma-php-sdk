<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Location entry > An option indicating whether warehouse
 * locations can be added directly on any inventory document or only by using
 * this window.
 */
enum WarehouseLocationEntryEnum: string
{
    case VALIDATE = 'Validate';
    case WARN = 'Warn';
    case NO_VALIDATE = 'NoValidate';
}
