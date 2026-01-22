<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CreateDunningLetterActionDto extends Model
{
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $dunningLetterDate;

    #[Property]
    public ?int $levelFrom;

    #[Property]
    public ?int $levelTo;
}
