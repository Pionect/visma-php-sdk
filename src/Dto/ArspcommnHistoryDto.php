<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

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

    #[Property]
    public ?\MetadataDto $metadata;
}
