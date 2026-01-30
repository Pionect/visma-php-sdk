<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Table SigmaExternalCodes2 &gt; The information row connected through the ExternalCode2
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExternalCode2infoInAccountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExternalCode2infoInAccountDtoFactory factory()
 */
class ExternalCode2infoInAccountDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
