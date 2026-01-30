<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AccountNumberDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AccountNumberDescriptionDtoFactory testFactory()
 */
class AccountNumberDescriptionDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        #[MapName('externalCode1Info')]
        public ?ExternalCodeNumberDescriptionDto $externalCode1info = null,
        #[MapName('externalCode2Info')]
        public ?ExternalCodeNumberDescriptionDto $externalCode2info = null,
        #[MapName('glConsolAccountCD')]
        public ?string $glConsolAccountCd = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
