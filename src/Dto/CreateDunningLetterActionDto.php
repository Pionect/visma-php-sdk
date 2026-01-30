<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreateDunningLetterActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreateDunningLetterActionDtoFactory testFactory()
 */
class CreateDunningLetterActionDto extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $dunningLetterDate = null,
        public ?int $levelFrom = null,
        public ?int $levelTo = null,
    ) {}
}
