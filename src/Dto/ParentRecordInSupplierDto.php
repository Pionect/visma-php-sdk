<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * General information tab &gt; Main contact section &gt; Parent account &gt; The parent supplier's
 * account, which you can select from the list of existing supplier accounts.
 *
 * @method static \Pionect\VismaSdk\Factories\ParentRecordInSupplierDtoFactory testFactory()
 */
class ParentRecordInSupplierDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier. > The identifier. */
        public ?string $number = null,
        /** Click the magnifier. > The name. */
        public ?string $name = null,
    ) {}
}
