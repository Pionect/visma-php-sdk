<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodDetailDtoFactory testFactory()
 */
class PaymentMethodDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('detailID')]
        public ?string $detailId = null,
        public ?string $description = null,
        public ?string $bankingDetailType = null,
    ) {}
}
