<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerDocumentVatZoneDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerDocumentVatZoneDtoFactory factory()
 */
class CustomerDocumentVatZoneDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
