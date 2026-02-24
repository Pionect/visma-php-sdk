<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\SupplierPaymentTypeEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierPaymentUpdateDtoFactory testFactory()
 */
class SupplierPaymentUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierPaymentUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?SupplierPaymentTypeEnum $type = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $referenceNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $applicationDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $applicationPeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentRef = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplier = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentMethod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $cashAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $paymentAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branch = null,
        /** @var SupplierPaymentAdjustmentUpdateDto[]|null */
        public ?array $paymentLines = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideNumberSeries = null,
    ) {}
}
