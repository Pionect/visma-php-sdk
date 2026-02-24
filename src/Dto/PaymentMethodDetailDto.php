<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodDetailDtoFactory testFactory()
 */
class PaymentMethodDetailDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PaymentMethodDetailDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: Table column > ID* > The identifier of the payment method
         * element.
         */
        #[MapName('detailID')]
        public ?string $detailId = null,
        /** Table column > Description > The name for the payment method element. */
        public ?string $description = null,
        /** Table column > BankingDetailType > The bank account type */
        public ?string $bankingDetailType = null,
    ) {}
}
