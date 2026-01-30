<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerContractQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractQueryParametersFactory factory()
 */
class CustomerContractQueryParameters extends Model
{
    public function __construct(
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $orderBy = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $contractTemplate = null,
        public ?string $status = null,
        public ?string $customer = null,
        public ?bool $expandSummary = null,
        public ?bool $expandDetails = null,
        public ?string $attributes = null,
        public ?bool $expandAttributes = null,
    ) {}
}
