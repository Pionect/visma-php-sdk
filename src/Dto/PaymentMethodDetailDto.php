<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentMethodDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodDetailDtoFactory factory()
 */
class PaymentMethodDetailDto extends Model
{
    public function __construct(
        #[MapName('detailID')]
        public ?string $detailId = null,
        public ?string $description = null,
        public ?string $bankingDetailType = null,
    ) {}
}
