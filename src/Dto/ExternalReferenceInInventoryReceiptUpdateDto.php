<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The external reference number of the inventory issue document (for example, the vendor’s reference
 * code).
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExternalReferenceInInventoryReceiptUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExternalReferenceInInventoryReceiptUpdateDtoFactory testFactory()
 */
class ExternalReferenceInInventoryReceiptUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
