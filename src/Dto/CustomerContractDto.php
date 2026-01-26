<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a CustomerContract in CustomerContractController. Used for getting data.
 */
class CustomerContractDto extends Model
{
    /** Mandatory field: The top part &gt; Contract ID* &gt; The unique identifier of a contract. */
    #[Property]
    public ?string $contractId;

    #[Property]
    public ?\contractTemplateInCustomerContractDto $contractTemplate;

    /** The top part &gt; Status &gt; The status of the contract, which is one of the following: Draft, Pending activation, Active, Expired, Cancelled, Pending update. */
    #[Property]
    public ?string $status;

    #[Property]
    public ?\customerInCustomerContractDto $customer;

    #[Property]
    public ?\locationInCustomerContractDto $location;

    /** Mandatory field: The top part &gt; Description* &gt; The description of the contract, which includes any related comments. */
    #[Property]
    public ?string $description;

    /** The top part &gt; Balance &gt; A read-only field that displays the sum of the balances of open invoices associated with the contract. */
    #[Property]
    public ?float $balance;

    /** System generated information */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?\summaryInCustomerContractDto $summary;

    #[Property]
    public ?\detailsInCustomerContractDto $details;

    /** Project attributes tab */
    #[Property]
    public ?array $attributes;
}
