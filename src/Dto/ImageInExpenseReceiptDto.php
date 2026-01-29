<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
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
    /** The name of the attachment. */
    #[Property]
    public ?string $name;

    /** The ID of the attachment */
    #[Property]
    public ?string $id;

    /** The version of the attachment. */
    #[Property]
    public ?int $revision;
}
