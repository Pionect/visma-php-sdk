<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * This class represents an attribute in AttributeController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttributeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttributeDtoFactory factory()
 */
class AttributeDto extends Model
{
    public function __construct(
        #[MapName('attributeID')]
        public ?string $attributeId = null,
        public ?string $description = null,
        public ?string $controlType = null,
        public ?bool $internal = null,
        public ?string $entryMask = null,
        public ?string $regExp = null,
        public ?array $details = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $errorInfo = null,
    ) {}
}
