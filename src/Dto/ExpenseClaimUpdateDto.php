<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ExpenseClaimUpdateDto extends Model
{
    #[Property]
    public ?dateInExpenseClaimUpdateDto $date;

    #[Property]
    public ?descriptionInExpenseClaimUpdateDto $description;

    #[Property]
    public ?claimedByInExpenseClaimUpdateDto $claimedBy;

    #[Property]
    public ?customerInExpenseClaimUpdateDto $customer;

    /** If the customer is updated the claim details customer information can be updated using the provided answer. By default 'SelectedCustomer' is selected. */
    #[Property]
    public ?string $customerUpdateAnswer;

    #[Property]
    public ?locationInExpenseClaimUpdateDto $location;

    /** Expense Claim detail information */
    #[Property]
    public ?array $details;
}
