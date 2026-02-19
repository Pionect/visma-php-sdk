<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CreditTermDtoFactory testFactory()
 */
class CreditTermDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $termsId = null,
        public ?string $description = null,
        /** VisibleTo: AL - All, VE - Suppliers, CU - Customers, DS - Disabled */
        public ?string $visibleTo = null,
        /**
         * Due Date Type , values:
         * N - Fixed Number of Days,
         * D - Day of Next Month,
         * E - End of the Month,
         * M - End of Next Month,
         * T - Day of the Month,
         * P - Fixed Number of Days starting Next Month,
         * C - Custom.
         */
        public ?string $dueDateType = null,
        /**
         * Move Due Date If On The Weekend, values:
         * 1 - Keep the exact date,
         * 2 - Day before (Friday),
         * 3 - Day after (Monday).
         */
        public ?string $moveDueDateIfOnTheWeekend = null,
        public ?int $dueDay1 = null,
        #[MapName('dueDay1DayFrom1')]
        public ?int $dueDay1dayFrom1 = null,
        #[MapName('dueDay1DayTo1')]
        public ?int $dueDay1dayTo1 = null,
        public ?int $dueDay2 = null,
        #[MapName('dueDay2DayFrom1')]
        public ?int $dueDay2dayFrom1 = null,
        #[MapName('dueDay2DayTo1')]
        public ?int $dueDay2dayTo1 = null,
        /**
         * Discount Type , values:
         * N - Fixed Number of Days,
         * D - Day of Next Month,
         * E - End of the Month,
         * M - End of Next Month,
         * T - Day of the Month,
         * P - Fixed Number of Days starting Next Month.
         */
        public ?string $discountType = null,
        public ?int $discountDay = null,
        public int|float|null $discountPercent = null,
        public ?int $delayDays = null,
        /** Calculation Type: G - Gross amount, N - Net amount */
        public ?string $calculationType = null,
        /** Instalment Type: S - Simple, M - Multiple */
        public ?string $instalmentType = null,
        public ?int $numberOfInstalments = null,
        /**
         * Instalment Frequency, values:
         * W - Weekly,
         * M - Monthly,
         * B - Semi-monthly (the second installment comes a half a month after the first
         * one, and so on).
         */
        public ?string $instalmentFrequency = null,
        /**
         * Instalment Method, values:
         * E - Equal Parts,
         * A - All Tax in First Installment (the total amount before tax is split
         * equally between installments and the entire amount of tax is added to the
         * first installment),
         * S - Split by Percents in Table (the days and amounts of installments are
         * defined by the related Instalments Schedule records).
         */
        public ?string $instalmentMethod = null,
        /** @var InstalmentSchedule[]|null */
        public ?array $instalmentsSchedule = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
