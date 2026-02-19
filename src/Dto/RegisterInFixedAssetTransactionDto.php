<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\FixedAssetRegisterStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * The registration details
 *
 * @method static \Pionect\VismaSdk\Factories\RegisterInFixedAssetTransactionDtoFactory testFactory()
 */
class RegisterInFixedAssetTransactionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The document date for this fixed asset transaction */
        public ?\Carbon\Carbon $documentDate = null,
        /** Status can be */
        public ?FixedAssetRegisterStatusEnum $status = null,
        /** Indecates whether this fixed asset transaction is on hold or not */
        public ?bool $hold = null,
    ) {}
}
