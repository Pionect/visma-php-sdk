<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AccountQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AccountQueryParametersFactory testFactory()
 */
class AccountQueryParameters extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?bool $includeAccountClassDescription = null,
        public ?string $greaterThanValue = null,
        public ?string $publicCode = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        public ?string $analysisCode = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
    ) {}
}
