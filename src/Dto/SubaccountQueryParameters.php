<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SubaccountQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SubaccountQueryParametersFactory factory()
 */
class SubaccountQueryParameters extends Model
{
    public function __construct(
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?bool $active = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
