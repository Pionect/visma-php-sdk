<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The SubAccount for the SupplierItemID. If null, this means that no account was found for the
 * {Visma.net.ERP.Web.Api.Model.V1.SupplierItemAccountDto.SupplierItemId}
 *
 * @method static \Pionect\VismaSdk\Factories\SubaccountInSupplierItemAccountDtoFactory testFactory()
 */
class SubaccountInSupplierItemAccountDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $subaccountNumber = null,
        public ?int $subaccountId = null,
        public ?string $description = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?bool $active = null,
        /** @var SegmentDto[]|null */
        public ?array $segments = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
