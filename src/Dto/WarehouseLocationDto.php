<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseLocationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseLocationDtoFactory factory()
 */
class WarehouseLocationDto extends Model
{
    public function __construct(
        public ?string $locationId = null,
        public ?string $description = null,
        public ?bool $active = null,
        public ?bool $inclQtyAvail = null,
        public ?bool $isCosted = null,
        public ?bool $salesValid = null,
        public ?bool $receiptsValid = null,
        public ?bool $transfersValid = null,
        public ?bool $assemblyValid = null,
        public ?string $primaryItemValid = null,
        public ?PrimaryItemInWarehouseLocationDto $primaryItem = null,
        public ?PrimaryItemClassInWarehouseLocationDto $primaryItemClass = null,
        public ?ProjectInWarehouseLocationDto $project = null,
        public ?ProjectTaskInWarehouseLocationDto $projectTask = null,
    ) {}
}
