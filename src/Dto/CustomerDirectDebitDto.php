<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerDirectDebitDtoFactory testFactory()
 */
class CustomerDirectDebitDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CustomerDirectDebitDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $mandateId = null,
        public ?string $mandateDescription = null,
        public ?\Carbon\Carbon $dateOfSignature = null,
        public ?bool $isDefault = null,
        public ?bool $oneTime = null,
        public ?string $bic = null,
        public ?string $iban = null,
        public ?\Carbon\Carbon $lastCollectionDate = null,
        public int|float|null $maxAmount = null,
        public ?\Carbon\Carbon $expirationDate = null,
        public ?string $branch = null,
    ) {}
}
