<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a SOOrderType in SalesOrderTypeController. Used to get data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesOrderTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderTypeDtoFactory factory()
 */
class SalesOrderTypeDto extends Model
{
    public function __construct(
        public ?string $orderType = null,
        public ?bool $active = null,
        public ?string $description = null,
        public ?string $behavior = null,
        public ?string $defaultOperation = null,
        public ?string $customerDocumentType = null,
        public ?string $errorInfo = null,
    ) {}
}
