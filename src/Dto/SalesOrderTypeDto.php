<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a SOOrderType in SalesOrderTypeController. Used to get data.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderTypeDtoFactory testFactory()
 */
class SalesOrderTypeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
