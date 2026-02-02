<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\AccountQueryParametersFactory testFactory()
 */
class AccountQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
