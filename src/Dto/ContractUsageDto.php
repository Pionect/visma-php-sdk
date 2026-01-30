<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContractUsageDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContractUsageDtoFactory testFactory()
 */
class ContractUsageDto extends Model
{
    public function __construct(
        public ?string $contract = null,
        public ?array $transaction = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
