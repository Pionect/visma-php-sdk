<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreditTermDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreditTermDtoFactory factory()
 */
class CreditTermDto extends Model
{
    #[Property]
    public ?string $termsId;

    #[Property]
    public ?string $description;

    /** VisibleTo: AL - All, VE - Suppliers, CU - Customers, DS - Disabled */
    #[Property]
    public ?string $visibleTo;

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
    #[Property]
    public ?string $dueDateType;

    /**
     * Move Due Date If On The Weekend, values:
     * 1 - Keep the exact date,
     * 2 - Day before (Friday),
     * 3 - Day after (Monday).
     */
    #[Property]
    public ?string $moveDueDateIfOnTheWeekend;

    #[Property]
    public ?int $dueDay1;

    #[Property]
    public ?int $dueDay1dayFrom1;

    #[Property]
    public ?int $dueDay1dayTo1;

    #[Property]
    public ?int $dueDay2;

    #[Property]
    public ?int $dueDay2dayFrom1;

    #[Property]
    public ?int $dueDay2dayTo1;

    /**
     * Discount Type , values:
     * N - Fixed Number of Days,
     * D - Day of Next Month,
     * E - End of the Month,
     * M - End of Next Month,
     * T - Day of the Month,
     * P - Fixed Number of Days starting Next Month.
     */
    #[Property]
    public ?string $discountType;

    #[Property]
    public ?int $discountDay;

    #[Property]
    public ?float $discountPercent;

    #[Property]
    public ?int $delayDays;

    /** Calculation Type: G - Gross amount, N - Net amount */
    #[Property]
    public ?string $calculationType;

    /** Instalment Type: S - Simple, M - Multiple */
    #[Property]
    public ?string $instalmentType;

    #[Property]
    public ?int $numberOfInstalments;

    /**
     * Instalment Frequency, values:
     * W - Weekly,
     * M - Monthly,
     * B - Semi-monthly (the second installment comes a half a month after the first one, and so on).
     */
    #[Property]
    public ?string $instalmentFrequency;

    /**
     * Instalment Method, values:
     * E - Equal Parts,
     * A - All Tax in First Installment (the total amount before tax is split equally between installments and the entire amount of tax is added to the first installment),
     * S - Split by Percents in Table (the days and amounts of installments are defined by the related Instalments Schedule records).
     */
    #[Property]
    public ?string $instalmentMethod;

    #[Property]
    public ?array $instalmentsSchedule;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $createdDateTime;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;
}
