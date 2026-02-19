<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\SupplierPaymentTypeEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ReleaseSupplierPaymentActionDtoFactory testFactory()
 */
class ReleaseSupplierPaymentActionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?SupplierPaymentTypeEnum $type = null,
    ) {}
}
