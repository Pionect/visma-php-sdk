<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The project task with which the document is associated.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskIdInPurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskIdInPurchaseReceiptLineUpdateDtoFactory factory()
 */
class ProjectTaskIdInPurchaseReceiptLineUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
