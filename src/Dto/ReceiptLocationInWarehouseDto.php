<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Location table tab &gt; Receiving location &gt; The warehouse location to be used to receive goods.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReceiptLocationInWarehouseDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReceiptLocationInWarehouseDtoFactory factory()
 */
class ReceiptLocationInWarehouseDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
