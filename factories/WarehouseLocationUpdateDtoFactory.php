<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'locationId' => LocationIdInWarehouseLocationUpdateDtoFactory::new()->make(),
            'description' => DescriptionInWarehouseLocationUpdateDtoFactory::new()->make(),
            'active' => ActiveInWarehouseLocationUpdateDtoFactory::new()->make(),
            'inclQtyAvail' => InclQtyAvailInWarehouseLocationUpdateDtoFactory::new()->make(),
            'isCosted' => IsCostedInWarehouseLocationUpdateDtoFactory::new()->make(),
            'salesValid' => SalesValidInWarehouseLocationUpdateDtoFactory::new()->make(),
            'receiptsValid' => ReceiptsValidInWarehouseLocationUpdateDtoFactory::new()->make(),
            'transfersValid' => TransfersValidInWarehouseLocationUpdateDtoFactory::new()->make(),
            'assemblyValid' => AssemblyValidInWarehouseLocationUpdateDtoFactory::new()->make(),
            'pickPriority' => PickPriorityInWarehouseLocationUpdateDtoFactory::new()->make(),
            'primaryItemValid' => PrimaryItemValidInWarehouseLocationUpdateDtoFactory::new()->make(),
            'primaryItemId' => PrimaryItemIdInWarehouseLocationUpdateDtoFactory::new()->make(),
            'primaryItemClassId' => PrimaryItemClassIdInWarehouseLocationUpdateDtoFactory::new()->make(),
            'projectId' => ProjectIdInWarehouseLocationUpdateDtoFactory::new()->make(),
            'projectTaskId' => ProjectTaskIdInWarehouseLocationUpdateDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseLocationUpdateDto::class;
    }
}
