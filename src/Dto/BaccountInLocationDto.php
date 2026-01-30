<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Business connection* &gt; The business account this location is
 * associated with. Click the magnifier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BaccountInLocationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BaccountInLocationDtoFactory testFactory()
 */
class BaccountInLocationDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
