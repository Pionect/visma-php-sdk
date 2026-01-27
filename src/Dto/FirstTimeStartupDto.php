<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents an attribute in FirstTimeStartupController. Used for getting data.
 */
class FirstTimeStartupDto extends Model
{
    /** FTS status for financials */
    #[Property]
    public ?bool $financials;

    #[Property]
    public ?string $message;

    #[Property]
    public ?string $errorInfo;
}
