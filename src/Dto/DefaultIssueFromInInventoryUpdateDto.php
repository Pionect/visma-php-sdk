<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Warehouse defaults section &gt; Default issue from &gt; The location of
 * the warehouse to be used by default to issue quantities of the selected stock item.
 */
class DefaultIssueFromInInventoryUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
