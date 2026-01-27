<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Customer Mandate
 */
class DirectDebitMandateDto extends Model
{
    /** Mandate Guid as stored in the database. */
    #[Property]
    public ?string $id;

    /** The id shown on Billing Address tab */
    #[Property]
    public ?string $mandateId;

    /** Mandate description show on Billing Address tab */
    #[Property]
    public ?string $mandateDescription;
}
