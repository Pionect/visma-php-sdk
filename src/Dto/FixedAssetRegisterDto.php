<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FixedAssetRegisterDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetRegisterDtoFactory testFactory()
 */
class FixedAssetRegisterDto extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $documentDate = null,
        public ?string $status = null,
        public ?bool $hold = null,
    ) {}
}
