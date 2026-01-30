<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Table SigmaExternalCodes1 &gt; The information row connected through the ExternalCode1
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExternalCode1infoInAccountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExternalCode1infoInAccountDtoFactory factory()
 */
class ExternalCode1infoInAccountDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
