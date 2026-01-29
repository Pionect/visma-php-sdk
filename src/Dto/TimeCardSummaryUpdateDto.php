<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TimeCardSummaryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TimeCardSummaryUpdateDtoFactory factory()
 */
class TimeCardSummaryUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?int $lineNumber;

    #[Property]
    public ?earningTypeInTimeCardSummaryUpdateDto $earningType;

    #[Property]
    public ?projectInTimeCardSummaryUpdateDto $project;

    #[Property]
    public ?projectTaskInTimeCardSummaryUpdateDto $projectTask;

    #[Property]
    public ?monInTimeCardSummaryUpdateDto $mon;

    #[Property]
    public ?tueInTimeCardSummaryUpdateDto $tue;

    #[Property]
    public ?wedInTimeCardSummaryUpdateDto $wed;

    #[Property]
    public ?thuInTimeCardSummaryUpdateDto $thu;

    #[Property]
    public ?friInTimeCardSummaryUpdateDto $fri;

    #[Property]
    public ?satInTimeCardSummaryUpdateDto $sat;

    #[Property]
    public ?sunInTimeCardSummaryUpdateDto $sun;

    #[Property]
    public ?invoiceableInTimeCardSummaryUpdateDto $invoiceable;

    #[Property]
    public ?descriptionInTimeCardSummaryUpdateDto $description;
}
