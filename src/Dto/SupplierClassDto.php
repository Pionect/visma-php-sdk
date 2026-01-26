<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SupplierClassDto extends Model
{
    #[Property]
    public ?array $attributes;

    #[Property]
    public ?string $paymentMethodId;

    #[Property]
    public ?string $paymentMethodDescription;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
