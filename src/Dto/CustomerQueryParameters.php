<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerQueryParametersFactory testFactory()
 */
class CustomerQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $name = null,
        public ?string $status = null,
        public ?string $corporateId = null,
        public ?string $vatRegistrationId = null,
        public ?string $email = null,
        public ?string $phone = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $createdDateTime = null,
        public ?string $createdDateTimeCondition = null,
        public ?bool $expandAccountInformation = null,
        public ?bool $expandPaymentMethods = null,
        public ?bool $expandDirectDebit = null,
        public ?string $attributes = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
