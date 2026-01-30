<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ChangeCustomerCdActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ChangeCustomerCdActionDtoFactory factory()
 */
class ChangeCustomerCdActionDto extends Model
{
    public function __construct(
        public ?string $customerCd = null,
    ) {}
}
