<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents an attribute in AttributeController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\AttributeDtoFactory testFactory()
 */
class AttributeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('attributeID')]
        public ?string $attributeId = null,
        public ?string $description = null,
        public ?string $controlType = null,
        public ?bool $internal = null,
        public ?string $entryMask = null,
        public ?string $regExp = null,
        /** @var AttributeDetailDto[]|null */
        public ?array $details = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $errorInfo = null,
    ) {}
}
