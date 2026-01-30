<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerQueryParametersFactory factory()
 */
class CustomerQueryParameters extends Model
{
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
