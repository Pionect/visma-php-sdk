<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustSalesPeopleDtoFactory testFactory()
 */
class CustSalesPeopleDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('bAccountID')]
        public ?int $bAccountId = null,
        public ?string $customerName = null,
        #[MapName('locationID')]
        public ?int $locationId = null,
        public ?string $locationName = null,
        public ?bool $isDefault = null,
        public int|float|null $commisionPct = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $errorInfo = null,
    ) {}
}
