<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ProjectTransactionDocumentUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $refNbr;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfNullableOfProjectTransactionStatus $status;

    #[Property]
    public ?\DtoValueOfNullableOfJournalTransactionModule $module;

    #[Property]
    public ?array $lines;

    #[Property]
    public ?\DtoValueOfString $note;
}
