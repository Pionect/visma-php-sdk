<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
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
    #[Property]
    public ?userEmailInSupplierInvoiceCommentUpdateDto $userEmail;

    #[Property]
    public ?commentTextInSupplierInvoiceCommentUpdateDto $commentText;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $commentDateTime;
}
