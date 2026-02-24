<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TimeCardUpdateDtoFactory testFactory()
 */
class TimeCardUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\TimeCardUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $refNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $employee = null,
        /**
         * @var TimeCardSummaryUpdateDto[]|null
         *                                      Time Card summary information
         */
        public ?array $summary = null,
        /**
         * @var TimeCardMaterialsUpdateDto[]|null
         *                                        Time Card Materials information
         */
        public ?array $materials = null,
    ) {}
}
