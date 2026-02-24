<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerGlAccountsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CustomerGlAccountsDto>
 */
class CustomerGlAccountsDtoFactory extends Factory
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
        return CustomerGlAccountsDto::class;
    }
}
