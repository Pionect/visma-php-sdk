<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents an attribute in FirstTimeStartupController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\FirstTimeStartupDtoFactory testFactory()
 */
class FirstTimeStartupDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\FirstTimeStartupDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** FTS status for financials */
        public ?bool $financials = null,
        public ?string $message = null,
        public ?string $errorInfo = null,
    ) {}
}
