<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\WarehouseLocationDtoFactory testFactory()
 */
class WarehouseLocationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
