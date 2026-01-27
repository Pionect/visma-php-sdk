<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a SOOrderType in SalesOrderTypeController. Used to get data.
 */
class SalesOrderTypeDto extends Model
{
    /** Mandatory field: The top part &gt; Order type* &gt; The ID of the order type, which is a two-character alphanumeric string. */
    #[Property]
    public ?string $orderType;

    /** The top part &gt; Active &gt; A check box that indicates (if selected) that the order type is active, */
    #[Property]
    public ?bool $active;

    /** The top part &gt; Description &gt; The brief description of the order type. */
    #[Property]
    public ?string $description;

    /** Template settings tab &gt; Automation behaviour &gt; An automation behaviour is a set of automation steps. The type of automation behaviour used for the template, which can be Sales order, Invoice, Quote, Credit note, or RMA order. */
    #[Property]
    public ?string $behavior;

    /** Template settings tab &gt; Default operation &gt; The default inventory operation for the order type, which can be Receipt or Issue. */
    #[Property]
    public ?string $defaultOperation;

    /** Template settings tab &gt; Customer document type &gt; The type of customer ledger document to be generated on release of a document of this type. */
    #[Property]
    public ?string $customerDocumentType;

    #[Property]
    public ?string $errorInfo;
}
