<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SigmaIntrastatTransactionDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SigmaIntrastatTransactionDescriptionDtoFactory factory()
 */
class SigmaIntrastatTransactionDescriptionDto extends Model
{
    public function __construct(
        public ?int $id = null,
        public ?string $description = null,
    ) {}
}
