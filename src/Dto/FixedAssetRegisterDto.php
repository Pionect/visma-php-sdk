<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\FixedAssetRegisterDtoFactory testFactory()
 */
class FixedAssetRegisterDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?\Carbon\Carbon $documentDate = null,
        public ?string $status = null,
        public ?bool $hold = null,
    ) {}
}
