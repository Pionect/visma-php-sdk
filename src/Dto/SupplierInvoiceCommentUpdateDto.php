<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * SupplierInvoiceCommentUpdateDto
 */
class SupplierInvoiceCommentUpdateDto extends Model
{
    #[Property]
    public ?\userEmailInSupplierInvoiceCommentUpdateDto $userEmail;

    #[Property]
    public ?\commentTextInSupplierInvoiceCommentUpdateDto $commentText;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $commentDateTime;
}
