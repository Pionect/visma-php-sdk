<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The email of the user who created the comment.
 * User email is mandatory
 */
class UserEmailInSupplierInvoiceCommentUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
