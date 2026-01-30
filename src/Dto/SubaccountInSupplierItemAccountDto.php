<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The SubAccount for the SupplierItemID. If null, this means that no account was found for the
 * {Visma.net.ERP.Web.Api.Model.V1.SupplierItemAccountDto.SupplierItemId}
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SubaccountInSupplierItemAccountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SubaccountInSupplierItemAccountDtoFactory testFactory()
 */
class SubaccountInSupplierItemAccountDto extends Model
{
    public function __construct(
        public ?string $subaccountNumber = null,
        public ?int $subaccountId = null,
        public ?string $description = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?bool $active = null,
        public ?array $segments = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
