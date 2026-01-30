<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * This class represents a salesperson in SalesPersonController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonDtoFactory factory()
 */
class SalesPersonDto extends Model
{
    public function __construct(
        #[MapName('salespersonID')]
        public ?string $salespersonId = null,
        public ?string $name = null,
        public ?bool $isActive = null,
        public int|float|null $commissionPct = null,
        public ?SubAccountDescriptionDto $salesSub = null,
        public ?array $customers = null,
        public ?array $commissionHistory = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $errorInfo = null,
    ) {}
}
