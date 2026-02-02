<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\AccountNumberDescriptionDtoFactory testFactory()
 */
class AccountNumberDescriptionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
