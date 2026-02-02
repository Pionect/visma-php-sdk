<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Write-off reason code &gt; A reason code that defines an account and subaccount to be used for
 * writing off credits or balances.
 *
 * @method static \Pionect\VismaSdk\Factories\WriteOffReasonCodeInPaymentLineDtoFactory testFactory()
 */
class WriteOffReasonCodeInPaymentLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
