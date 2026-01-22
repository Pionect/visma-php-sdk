<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ApprovalDetailsUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $attachmentId;

    #[Property]
    public ?\DtoValueOfString $comment;
}
