<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Receipt details tab &gt; Image section
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ImageInExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ImageInExpenseReceiptDtoFactory factory()
 */
class ImageInExpenseReceiptDto extends Model
{
    public function __construct(
        public ?string $name = null,
        public ?string $id = null,
        public ?int $revision = null,
    ) {}
}
