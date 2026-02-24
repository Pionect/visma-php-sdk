<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SalesPersonUpdateDtoFactory testFactory()
 */
class SalesPersonUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SalesPersonUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('salespersonID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salespersonId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $name = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $isActive = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $commissionPct = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesSub = null,
        /** @var CustSalesPeopleUpdateDto[]|null */
        public ?array $customers = null,
    ) {}
}
