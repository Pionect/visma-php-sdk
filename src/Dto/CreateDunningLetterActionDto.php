<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CreateDunningLetterActionDtoFactory testFactory()
 */
class CreateDunningLetterActionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?\Carbon\Carbon $dunningLetterDate = null,
        public ?int $levelFrom = null,
        public ?int $levelTo = null,
    ) {}
}
