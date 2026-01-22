<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class TimeCardSummaryUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfInt32 $lineNumber;

    #[Property]
    public ?\earningTypeInTimeCardSummaryUpdateDto $earningType;

    #[Property]
    public ?\projectInTimeCardSummaryUpdateDto $project;

    #[Property]
    public ?\projectTaskInTimeCardSummaryUpdateDto $projectTask;

    #[Property]
    public ?\monInTimeCardSummaryUpdateDto $mon;

    #[Property]
    public ?\tueInTimeCardSummaryUpdateDto $tue;

    #[Property]
    public ?\wedInTimeCardSummaryUpdateDto $wed;

    #[Property]
    public ?\thuInTimeCardSummaryUpdateDto $thu;

    #[Property]
    public ?\friInTimeCardSummaryUpdateDto $fri;

    #[Property]
    public ?\satInTimeCardSummaryUpdateDto $sat;

    #[Property]
    public ?\sunInTimeCardSummaryUpdateDto $sun;

    #[Property]
    public ?\invoiceableInTimeCardSummaryUpdateDto $invoiceable;

    #[Property]
    public ?\descriptionInTimeCardSummaryUpdateDto $description;
}
