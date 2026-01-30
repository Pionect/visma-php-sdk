<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Document details tab &gt; Project &gt; The project with which the document is associated. If the
 * document is based on a purchase order, the project is automatically copied from the respective
 * purchase order line.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectInPurchaseReceiptLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInPurchaseReceiptLineDtoFactory factory()
 */
class ProjectInPurchaseReceiptLineDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
