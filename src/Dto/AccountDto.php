<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\AccountDtoFactory testFactory()
 */
class AccountDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('accountID')]
        public ?int $accountId = null,
        #[MapName('accountCD')]
        public ?string $accountCd = null,
        #[MapName('accountGroupCD')]
        public ?string $accountGroupCd = null,
        public ?string $accountClass = null,
        public ?string $type = null,
        public ?bool $active = null,
        public ?string $description = null,
        public ?string $accountClassDescription = null,
        public ?bool $useDefaultSub = null,
        public ?string $postOption = null,
        public ?string $currency = null,
        public ?string $taxCategory = null,
        public ?bool $cashAccount = null,
        public ?string $publicCode1 = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        #[MapName('externalCode1Info')]
        public ?ExternalCode1infoInAccountDto $externalCode1info = null,
        #[MapName('externalCode2Info')]
        public ?ExternalCode2infoInAccountDto $externalCode2info = null,
        public ?AnalisysCodeInfoInAccountDto $analisysCodeInfo = null,
        public ?string $controlAccountModule = null,
        public ?bool $allowManualEntry = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
