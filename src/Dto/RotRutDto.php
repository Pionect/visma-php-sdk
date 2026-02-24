<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CashSaleDocumentTypeEnum;
use Pionect\VismaSdk\Enums\WorkTypeRutRotTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a RutRot in RutRotController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\RotRutDtoFactory testFactory()
 */
class RotRutDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\RotRutDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?CashSaleDocumentTypeEnum $docType = null,
        public ?string $refNbr = null,
        public ?bool $distributedAutomaticaly = null,
        public ?WorkTypeRutRotTypeEnum $type = null,
        public int|float|null $totalDeductableAmount = null,
        public int|float|null $otherCost = null,
        public int|float|null $materialCost = null,
        public int|float|null $workPrice = null,
        public int|float|null $distributedAmount = null,
        public ?string $appartment = null,
        public ?string $estate = null,
        public ?string $organizationNbr = null,
        /** @var RotRutDistributionDto[]|null */
        public ?array $distribution = null,
    ) {}
}
