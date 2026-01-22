<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class TaskUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfString $taskId;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfNullableOfDateTime $plannedStart;

    #[Property]
    public ?\DtoValueOfNullableOfDateTime $plannedEnd;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $startDate;

    #[Property]
    public ?\DtoValueOfString $rateTable;

    #[Property]
    public ?\DtoValueOfNullableOfProjTaskStatus $status;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $restrictEmployees;

    #[Property]
    public ?array $employees;
}
