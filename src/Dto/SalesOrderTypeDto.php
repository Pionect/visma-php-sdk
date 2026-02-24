<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\SalesOrderLineOperationEnum;
use Pionect\VismaSdk\Enums\SalesOrderTypeBehaviorEnum;
use Pionect\VismaSdk\Enums\SalesOrderTypeCustomerDocumentTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a SOOrderType in SalesOrderTypeController. Used to get data.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderTypeDtoFactory testFactory()
 */
class SalesOrderTypeDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SalesOrderTypeDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: The top part > Order type* > The ID of the order type, which
         * is a two-character alphanumeric string.
         */
        public ?string $orderType = null,
        /**
         * The top part > Active > A check box that indicates (if selected) that the
         * order type is active,
         */
        public ?bool $active = null,
        /** The top part > Description > The brief description of the order type. */
        public ?string $description = null,
        /**
         * Template settings tab > Automation behaviour > An automation behaviour is a
         * set of automation steps. The type of automation behaviour used for the
         * template, which can be Sales order, Invoice, Quote, Credit note, or RMA
         * order.
         */
        public ?SalesOrderTypeBehaviorEnum $behavior = null,
        /**
         * Template settings tab > Default operation > The default inventory operation
         * for the order type, which can be Receipt or Issue.
         */
        public ?SalesOrderLineOperationEnum $defaultOperation = null,
        /**
         * Template settings tab > Customer document type > The type of customer ledger
         * document to be generated on release of a document of this type.
         */
        public ?SalesOrderTypeCustomerDocumentTypeEnum $customerDocumentType = null,
        public ?string $errorInfo = null,
    ) {}
}
