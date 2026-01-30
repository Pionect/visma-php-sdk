<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContactQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContactQueryParametersFactory testFactory()
 */
class ContactQueryParameters extends Model
{
    public function __construct(
        public ?string $displayName = null,
        public ?string $active = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $businessAccount = null,
        public ?string $email = null,
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $orderBy = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
    ) {}
}
