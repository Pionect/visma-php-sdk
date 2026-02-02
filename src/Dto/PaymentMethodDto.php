<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Payment Method in PaymentMethodController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodDtoFactory testFactory()
 */
class PaymentMethodDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
