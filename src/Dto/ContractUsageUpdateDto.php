<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represent a Contract Usage in Contract Usage Controller. Used to pass data to server for
 * creating or updating an Contract Usage
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContractUsageUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContractUsageUpdateDtoFactory factory()
 */
class ContractUsageUpdateDto extends Model
{
    public function __construct(
        public ?array $lines = null,
    ) {}
}
