<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierLocationQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierLocationQueryParametersFactory testFactory()
 */
class SupplierLocationQueryParameters extends Model
{
    public function __construct(
        public ?string $locationId = null,
        public ?string $gln = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
