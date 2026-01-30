<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Main contact section &gt; Parent account &gt; The parent supplier's
 * account, which you can select from the list of existing supplier accounts.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ParentRecordInSupplierDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ParentRecordInSupplierDtoFactory factory()
 */
class ParentRecordInSupplierDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
