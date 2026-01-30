<?php

namespace Pionect\VismaSdk\Dto;

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
    public function __construct(
        public ?bool $financials = null,
        public ?string $message = null,
        public ?string $errorInfo = null,
    ) {}
}
