<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContractUsageDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContractUsageDtoFactory factory()
 */
class ContractUsageDto extends Model
{
    #[Property]
    public ?string $contract;

    /** Transactions not yet invoiced tab or Transaction history tab */
    #[Property]
    public ?array $transaction;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;
}
