<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatCategoryQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatCategoryQueryParametersFactory factory()
 */
class VatCategoryQueryParameters extends Model
{
    public function __construct(
        public ?string $vendorCd = null,
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $createdDateTime = null,
        public ?string $createdDateTimeCondition = null,
    ) {}
}
