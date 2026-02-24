<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierPaymentAdjustmentUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Enums\SupplierInvoiceForSupplierQueryParametersDocumentTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SupplierPaymentAdjustmentUpdateDto>
 */
class SupplierPaymentAdjustmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'documentType' => $this->faker->randomElement(SupplierInvoiceForSupplierQueryParametersDocumentTypeEnum::cases()),
            'refNbr' => $this->faker->word(),
            'amountPaid' => null,
            'cashDiscountTaken' => null,
            'crossRate' => null,
        ];
    }

    protected function modelClass(): string
    {
        return SupplierPaymentAdjustmentUpdateDto::class;
    }
}
