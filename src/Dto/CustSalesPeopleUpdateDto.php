<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustSalesPeopleUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustSalesPeopleUpdateDtoFactory testFactory()
 */
class CustSalesPeopleUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[MapName('customerID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerId = null,
        #[MapName('locationID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $locationId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $commissionPct = null,
    ) {}
}
