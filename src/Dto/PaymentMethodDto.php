<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * This class represents a Payment Method in PaymentMethodController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentMethodDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodDtoFactory testFactory()
 */
class PaymentMethodDto extends Model
{
    public function __construct(
        #[MapName('paymentMethodID')]
        public ?string $paymentMethodId = null,
        public ?bool $active = null,
        public ?string $meansOfPayment = null,
        public ?string $description = null,
        #[MapName('useInAP')]
        public ?bool $useInAp = null,
        public ?array $details = null,
    ) {}
}
