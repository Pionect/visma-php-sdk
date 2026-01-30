<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * SupplierInvoiceCommentUpdateDto
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInvoiceCommentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceCommentUpdateDtoFactory factory()
 */
class SupplierInvoiceCommentUpdateDto extends Model
{
    public function __construct(
        public ?UserEmailInSupplierInvoiceCommentUpdateDto $userEmail = null,
        public ?CommentTextInSupplierInvoiceCommentUpdateDto $commentText = null,
        public ?CommentDateTimeInSupplierInvoiceCommentUpdateDto $commentDateTime = null,
    ) {}
}
