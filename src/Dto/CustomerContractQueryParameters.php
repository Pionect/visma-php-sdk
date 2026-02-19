<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CustomerContractStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerContractQueryParametersFactory testFactory()
 */
class CustomerContractQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $orderBy = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $contractTemplate = null,
        public ?CustomerContractStatusEnum $status = null,
        public ?string $customer = null,
        public ?bool $expandSummary = null,
        public ?bool $expandDetails = null,
        /**
         * Attributes (additional information) connected to the entity.
         *  Examples:
         * {{base}}/customerContract?attributes={"AttributeID":"ValueID","AttributeID":"ValueID"}
         * {{base}}/customerContract?attributes={"AttributeID":"ValueID1,ValueID2"}
         */
        public ?string $attributes = null,
        public ?bool $expandAttributes = null,
    ) {}
}
