<?php

namespace Pionect\VismaSdk\Dto;

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
        public ?\Carbon\Carbon $documentDate = null,
        public ?string $status = null,
        public ?bool $hold = null,
    ) {}
}
