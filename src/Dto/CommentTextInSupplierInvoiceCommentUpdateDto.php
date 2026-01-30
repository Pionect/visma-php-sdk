<?php

namespace Pionect\VismaSdk\Dto;

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
    public function __construct(
        public ?string $value = null,
    ) {}
}
