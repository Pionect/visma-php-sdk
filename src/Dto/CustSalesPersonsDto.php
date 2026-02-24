<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustSalesPersonsDtoFactory testFactory()
 */
class CustSalesPersonsDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CustSalesPersonsDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
