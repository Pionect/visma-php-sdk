<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierItemAccountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierItemAccountDtoFactory factory()
 */
class SupplierItemAccountDto extends Model
{
    /** The supplier item id for which the account is displayed. */
    #[Property]
    public ?string $supplierItemId;

    /** The item id matched to the SupplierItemId. If null, this means that no itemId was found for the corresponding {Visma.net.ERP.Web.Api.Model.V1.SupplierItemAccountDto.SupplierItemId} */
    #[Property]
    public ?string $itemId;

    /** The Account ID is the actual ID of the expense account for the SupplierItemID or of the supplier if no SUpplierItemId was specified in the request. If null, this means that no account was found for the {Visma.net.ERP.Web.Api.Model.V1.SupplierItemAccountDto.SupplierItemId} */
    #[Property]
    public ?string $accountId;

    #[Property]
    public ?subaccountInSupplierItemAccountDto $subaccount;
}
