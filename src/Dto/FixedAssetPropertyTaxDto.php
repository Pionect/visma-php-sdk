<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents an attribute in FixedAssetPropertyTaxGroup. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetPropertyTaxDtoFactory testFactory()
 */
class FixedAssetPropertyTaxDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The property tax id of this property tax group */
        #[MapName('propertyTaxID')]
        public ?string $propertyTaxId = null,
        /** The description of this property tax group */
        public ?string $description = null,
        /** A flag that indicates whether this fixed asset property tax group is active. */
        public ?bool $active = null,
        /**
         * @var FixedAssetPropertyTaxDetailsDto[]|null
         *                                             Fixed Asset Property Tax Details
         */
        public ?array $details = null,
        public ?string $errorInfo = null,
    ) {}
}
