<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The comment text.
 * Command text is mandatory.
 */
class CommentTextInSupplierInvoiceCommentUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
