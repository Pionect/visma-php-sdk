<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Organization Query Parameters
 *
 * @method static \Pionect\VismaSdk\Factories\OrganizationQueryParametersFactory testFactory()
 */
class OrganizationQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $expandBranches = null,
        public ?bool $expandBankSettings = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $greaterThanValue = null,
    ) {}
}
