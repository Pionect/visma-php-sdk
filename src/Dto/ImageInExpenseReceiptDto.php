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
        public ?string $name = null,
        public ?string $id = null,
        public ?int $revision = null,
    ) {}
}
