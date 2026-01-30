<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LedgerDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LedgerDescriptionDtoFactory testFactory()
 */
class LedgerDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
