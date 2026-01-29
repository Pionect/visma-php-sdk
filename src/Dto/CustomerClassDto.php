<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerClassDto extends Model
{
    /** The top part &gt; Class ID	&gt; The unique identifier of the class. You can use an alphanumeric string of up to 10 characters. */
    #[Property]
    public ?string $id;

    /** The top part &gt; Description &gt; A detailed description of the customer class. */
    #[Property]
    public ?string $description;

    /** The General information tab &gt; VAT zone ID &gt;	The default VAT zone for customers of the class. */
    #[Property]
    public ?string $taxZoneId;

    /** The General information tab &gt; Require VAT zone &gt; A check box that means (if selected) that the VAT zone value is required for customers of the class. */
    #[Property]
    public ?bool $requiredTaxzoneId;

    /** The General information tab &gt; Payment method &gt; The payment method used by default in relations with these customers. */
    #[Property]
    public ?string $paymentMethodId;

    #[Property]
    public ?array $attributes;
}
