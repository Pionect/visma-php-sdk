<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreditTermQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreditTermQueryParametersFactory testFactory()
 */
class CreditTermQueryParameters extends Model
{
    public function __construct(
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $createdDateTime = null,
        public ?string $createdDateTimeCondition = null,
        public ?string $termsId = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
