<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represent a Contract Usage in Contract Usage Controller. Used to pass data to server for
 * creating or updating an Contract Usage
 *
 * @method static \Pionect\VismaSdk\Factories\ContractUsageUpdateDtoFactory testFactory()
 */
class ContractUsageUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ContractUsageUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** @var ContractUsageLineUpdateDto[]|null */
        public ?array $lines = null,
    ) {}
}
