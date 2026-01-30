<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonUpdateDtoFactory factory()
 */
class SalesPersonUpdateDto extends Model
{
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
        public ?array $customers = null,
    ) {}
}
