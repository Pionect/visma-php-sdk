<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SalesOrderLineUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Enums\SalesOrderLineOperationEnum;
use Pionect\VismaSdk\Enums\SalesOrderLinePoSourceEnum;
use Pionect\VismaSdk\Enums\SalesOrderLineShipCompleteEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SalesOrderLineUpdateDto>
 */
class SalesOrderLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'invoiceNbr' => $this->faker->word(),
            'salesOrderOperation' => $this->faker->randomElement(SalesOrderLineOperationEnum::cases()),
            'freeItem' => $this->faker->boolean(),
            'requestedOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'shipOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'shipComplete' => $this->faker->randomElement(SalesOrderLineShipCompleteEnum::cases()),
            'undershipThreshold' => null,
            'overshipThreshold' => null,
            'completed' => $this->faker->boolean(),
            'markForPo' => $this->faker->boolean(),
            'poSource' => $this->faker->randomElement(SalesOrderLinePoSourceEnum::cases()),
            'lotSerialNbr' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'reasonCode' => $this->faker->word(),
            'salesPerson' => $this->faker->word(),
            'taxCategory' => $this->faker->word(),
            'commissionable' => $this->faker->boolean(),
            'alternateId' => $this->faker->uuid(),
            'projectTask' => $this->faker->word(),
            'subaccount' => [],
            'externalLink' => $this->faker->word(),
            'isRotRutDeductible' => $this->faker->boolean(),
            'branchNumber' => $this->faker->word(),
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'inventoryId' => $this->faker->uuid(),
            'inventoryNumber' => $this->faker->word(),
            'warehouse' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'quantity' => null,
            'unitCost' => null,
            'unitPrice' => null,
            'discountPercent' => null,
            'discountAmount' => null,
            'discountCode' => $this->faker->word(),
            'manualDiscount' => $this->faker->boolean(),
            'discUnitPrice' => null,
            'lineDescription' => $this->faker->sentence(),
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderLineUpdateDto::class;
    }
}
