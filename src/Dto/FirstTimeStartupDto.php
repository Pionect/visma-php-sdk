<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents an attribute in FirstTimeStartupController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FirstTimeStartupDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FirstTimeStartupDtoFactory factory()
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
