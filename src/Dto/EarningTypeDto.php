<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\EarningTypeDtoFactory testFactory()
 */
class EarningTypeDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\EarningTypeDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Mandatory field: Code* > The unique ID of the type of hour. */
        public ?string $code = null,
        /** Mandatory field: Description > The brief description of the type of hour. */
        public ?string $description = null,
        /**
         * Overtime > A check box that indicates (if selected) that the type of hour is
         * treated as overtime.
         */
        public ?bool $isOvertime = null,
        /**
         * Invoicable > A check box that indicates (if selected) that the type is
         * treated as invoiceable by default.
         */
        public ?bool $isBillable = null,
        /**
         * Active > A check box that indicates (if selected) that the type of hour is
         * active and can be used.
         */
        public ?bool $isActive = null,
        /**
         * Multiplier > The value by which the employee cost for this type of hour is
         * multiplied when the time activity is released.
         */
        public int|float|null $overtimeMultiplier = null,
        /** System generated information. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
