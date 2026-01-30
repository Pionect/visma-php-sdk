<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * When the comment was created (value provided should be in UTC format).
 * Created date and time is
 * mandatory
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CommentDateTimeInSupplierInvoiceCommentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CommentDateTimeInSupplierInvoiceCommentUpdateDtoFactory testFactory()
 */
class CommentDateTimeInSupplierInvoiceCommentUpdateDto extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $value = null,
    ) {}
}
