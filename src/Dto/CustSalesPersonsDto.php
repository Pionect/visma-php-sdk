<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustSalesPersonsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustSalesPersonsDtoFactory testFactory()
 */
class CustSalesPersonsDto extends Model
{
    public function __construct(
        #[MapName('salePersonID')]
        public ?string $salePersonId = null,
        public ?string $name = null,
        #[MapName('locationID')]
        public ?string $locationId = null,
        public ?string $locationName = null,
        public int|float|null $commisionPct = null,
        public ?bool $isDefault = null,
        public ?string $errorInfo = null,
    ) {}
}
