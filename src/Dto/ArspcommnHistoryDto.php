<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ArspcommnHistoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ArspcommnHistoryDtoFactory factory()
 */
class ArspcommnHistoryDto extends Model
{
    #[Property]
    public ?string $commnPeriod;

    #[Property]
    public ?float $commnAmt;

    #[Property]
    public ?float $commnblAmt;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $prProcessedDate;

    #[Property]
    public ?string $errorInfo;
}
