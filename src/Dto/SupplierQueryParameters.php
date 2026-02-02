<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierQueryParametersFactory testFactory()
 */
class SupplierQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
