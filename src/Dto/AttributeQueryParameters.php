<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttributeQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttributeQueryParametersFactory testFactory()
 */
class AttributeQueryParameters extends Model
{
    public function __construct(
        #[MapName('attributeID')]
        public ?string $attributeId = null,
        public ?string $controlType = null,
        public ?bool $internal = null,
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $createdDateTime = null,
        public ?string $createdDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
