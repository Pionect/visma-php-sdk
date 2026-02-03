<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\RotRutUpdateDtoFactory testFactory()
 */
class RotRutUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $distributedAutomaticaly = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $type = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $appartment = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $estate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $organizationNbr = null,
        /** @var RotRutDistributionUpdateDto[]|null */
        public ?array $distribution = null,
    ) {}
}
