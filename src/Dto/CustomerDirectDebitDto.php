<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerDirectDebitDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerDirectDebitDtoFactory factory()
 */
class CustomerDirectDebitDto extends Model
{
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
