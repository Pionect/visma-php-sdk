<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The comment text.
 * Command text is mandatory.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CommentTextInSupplierInvoiceCommentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CommentTextInSupplierInvoiceCommentUpdateDtoFactory factory()
 */
class CommentTextInSupplierInvoiceCommentUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
