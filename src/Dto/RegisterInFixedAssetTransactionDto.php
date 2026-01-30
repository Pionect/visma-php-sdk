<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The registration details
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RegisterInFixedAssetTransactionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RegisterInFixedAssetTransactionDtoFactory factory()
 */
class RegisterInFixedAssetTransactionDto extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $documentDate = null,
        public ?string $status = null,
        public ?bool $hold = null,
    ) {}
}
