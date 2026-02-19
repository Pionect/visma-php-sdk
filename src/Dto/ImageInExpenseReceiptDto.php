<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Receipt details tab &gt; Image section
 *
 * @method static \Pionect\VismaSdk\Factories\ImageInExpenseReceiptDtoFactory testFactory()
 */
class ImageInExpenseReceiptDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The name of the attachment. */
        public ?string $name = null,
        /** The ID of the attachment */
        public ?string $id = null,
        /** The version of the attachment. */
        public ?int $revision = null,
    ) {}
}
