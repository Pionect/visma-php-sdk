<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Payment Method in PaymentMethodController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentMethodDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodDtoFactory factory()
 */
class PaymentMethodDto extends Model
{
    /** Mandatory field: The top part &gt; Payment method ID* &gt; The unique identifier of the payment method. */
    #[Property]
    public ?string $paymentMethodId;

    /** The top part &gt; Active &gt; A check box that indicates whether the payment method is active in the system. */
    #[Property]
    public ?bool $active;

    /** The top part &gt; Means of payment &gt; One of the system's built-in payment templates. The following options are available: Credit card, Cash, Direct deposit. */
    #[Property]
    public ?string $meansOfPayment;

    /** Mandatory field: The top part &gt; Description* &gt; A description of the payment method. */
    #[Property]
    public ?string $description;

    /** The top part &gt; Use for supplier &gt; A check box that indicates whether the payment method will be used in Supplier ledger. */
    #[Property]
    public ?bool $useInAp;

    /** The settings for Customer ledger and The settings of Supplier ledger tab &gt; The table */
    #[Property]
    public ?array $details;
}
