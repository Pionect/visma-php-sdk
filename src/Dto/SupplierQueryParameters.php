<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierQueryParametersFactory factory()
 */
class SupplierQueryParameters extends Model
{
    public function __construct(
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $orderBy = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $name = null,
        public ?string $status = null,
        public ?string $vatRegistrationId = null,
        public ?string $corporateId = null,
        public ?string $attributes = null,
        public ?bool $expandAccountInformation = null,
        public ?bool $expandNote = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
