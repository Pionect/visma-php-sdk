<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierItemAccountDtoFactory testFactory()
 */
class SupplierItemAccountDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The supplier item id for which the account is displayed. */
        public ?string $supplierItemId = null,
        /**
         * The item id matched to the SupplierItemId. If null, this means that no itemId
         * was found for the corresponding
         * {Visma.net.ERP.Web.Api.Model.V1.SupplierItemAccountDto.SupplierItemId}
         */
        public ?string $itemId = null,
        /**
         * The Account ID is the actual ID of the expense account for the SupplierItemID
         * or of the supplier if no SUpplierItemId was specified in the request. If
         * null, this means that no account was found for the
         * {Visma.net.ERP.Web.Api.Model.V1.SupplierItemAccountDto.SupplierItemId}
         */
        #[MapName('accountID')]
        public ?string $accountId = null,
        public ?SubaccountInSupplierItemAccountDto $subaccount = null,
    ) {}
}
