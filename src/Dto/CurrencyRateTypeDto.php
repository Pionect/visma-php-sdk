<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CurrencyRateTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyRateTypeDtoFactory factory()
 */
class CurrencyRateTypeDto extends Model
{
    /** Currency rate type Id. */
    #[Property]
    public ?string $id;

    /** Description. */
    #[Property]
    public ?string $description;

    /** Days effective. */
    #[Property]
    public ?int $daysEffective;
}
