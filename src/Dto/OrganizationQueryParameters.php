<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Organization Query Parameters
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OrganizationQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OrganizationQueryParametersFactory testFactory()
 */
class OrganizationQueryParameters extends Model
{
    public function __construct(
        public ?bool $expandBranches = null,
        public ?bool $expandBankSettings = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $greaterThanValue = null,
    ) {}
}
