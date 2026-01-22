<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Customer Mandate
 */
class DirectDebitMandateDto extends Model
{
    /** The id shown on Billing Address tab */
    #[Property]
    public ?string $mandateId;

    /** Mandate description show on Billing Address tab */
    #[Property]
    public ?string $mandateDescription;
}
