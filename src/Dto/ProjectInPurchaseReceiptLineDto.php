<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Document details tab &gt; Project &gt; The project with which the document is associated. If the
 * document is based on a purchase order, the project is automatically copied from the respective
 * purchase order line.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInPurchaseReceiptLineDtoFactory testFactory()
 */
class ProjectInPurchaseReceiptLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ProjectInPurchaseReceiptLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The internal identifier. */
        public ?int $internalId = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
