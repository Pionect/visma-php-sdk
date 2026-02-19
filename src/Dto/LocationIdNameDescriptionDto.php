<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\LocationIdNameDescriptionDtoFactory testFactory()
 */
class LocationIdNameDescriptionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier > The identifier */
        public ?int $internalId = null,
        /** Click the magnifier > The displayed name */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
