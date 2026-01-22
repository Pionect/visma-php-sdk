<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class PeppolSchemeUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $endpoint;

    #[Property]
    public ?\DtoValueOfString $partyIdentification;

    #[Property]
    public ?\DtoValueOfString $partyLegal;
}
