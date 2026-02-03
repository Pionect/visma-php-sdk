<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a salesperson in SalesPersonController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonDtoFactory testFactory()
 */
class SalesPersonDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('salespersonID')]
        public ?string $salespersonId = null,
        public ?string $name = null,
        public ?bool $isActive = null,
        public int|float|null $commissionPct = null,
        public ?SubAccountDescriptionDto $salesSub = null,
        /** @var CustSalesPeopleDto[]|null */
        public ?array $customers = null,
        /** @var ArspcommnHistoryDto[]|null */
        public ?array $commissionHistory = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $errorInfo = null,
    ) {}
}
