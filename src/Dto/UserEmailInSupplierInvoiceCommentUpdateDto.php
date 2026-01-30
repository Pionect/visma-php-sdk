<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The email of the user who created the comment.
 * User email is mandatory
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UserEmailInSupplierInvoiceCommentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UserEmailInSupplierInvoiceCommentUpdateDtoFactory testFactory()
 */
class UserEmailInSupplierInvoiceCommentUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
