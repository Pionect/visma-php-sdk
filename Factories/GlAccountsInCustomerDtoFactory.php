<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\GlAccountsInCustomerDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class GlAccountsInCustomerDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'customerLedgerAccount' => AccountNumberTypeDescriptionDtoFactory::new()->make(),
            'customerLedgerSubaccount' => SubAccountDtoFactory::new()->make(),
            'salesAccount' => AccountNumberTypeDescriptionDtoFactory::new()->make(),
            'salesNonTaxableAccount' => AccountNumberTypeDescriptionDtoFactory::new()->make(),
            'salesEuAccount' => AccountNumberTypeDescriptionDtoFactory::new()->make(),
            'salesExportAccount' => AccountNumberTypeDescriptionDtoFactory::new()->make(),
            'salesSubaccount' => SubAccountDtoFactory::new()->make(),
            'discountAccount' => AccountNumberTypeDescriptionDtoFactory::new()->make(),
            'discountSubaccount' => SubAccountDtoFactory::new()->make(),
            'freightAccount' => AccountNumberTypeDescriptionDtoFactory::new()->make(),
            'freightSubaccount' => SubAccountDtoFactory::new()->make(),
            'cashDiscountAccount' => AccountNumberTypeDescriptionDtoFactory::new()->make(),
            'cashDiscountSubaccount' => SubAccountDtoFactory::new()->make(),
            'prepaymentAccount' => AccountNumberTypeDescriptionDtoFactory::new()->make(),
            'prepaymentSubaccount' => SubAccountDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return GlAccountsInCustomerDto::class;
    }
}
