<?php

namespace Pionect\VismaSdk\Enums;

/**
 * If the customer is updated the claim details customer information can be
 * updated using the provided answer. By default 'SelectedCustomer' is selected.
 */
enum ExpenseClaimUpdateCustomerUpdateAnswerEnum: string
{
    case SELECTED_CUSTOMER = 'SelectedCustomer';
    case ALL_LINES = 'AllLines';
    case NOTHING = 'Nothing';
}
