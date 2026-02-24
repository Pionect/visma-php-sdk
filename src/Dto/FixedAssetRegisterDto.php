<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\FixedAssetRegisterStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\FixedAssetRegisterDtoFactory testFactory()
 */
class FixedAssetRegisterDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\FixedAssetRegisterDtoFactory> */
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
