<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustSalesPeopleDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustSalesPeopleDtoFactory testFactory()
 */
class CustSalesPeopleDto extends Model
{
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
