<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefaultReceiptToDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultReceiptToDtoFactory factory()
 */
class DefaultReceiptToDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
