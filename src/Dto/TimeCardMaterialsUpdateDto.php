<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class TimeCardMaterialsUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfInt32 $lineNumber;

    #[Property]
    public ?\itemIdInTimeCardMaterialsUpdateDto $itemId;

    #[Property]
    public ?\descriptionInTimeCardMaterialsUpdateDto $description;

    #[Property]
    public ?\uoMInTimeCardMaterialsUpdateDto $uoM;

    #[Property]
    public ?\projectInTimeCardMaterialsUpdateDto $project;

    #[Property]
    public ?\projectTaskInTimeCardMaterialsUpdateDto $projectTask;

    #[Property]
    public ?\monInTimeCardMaterialsUpdateDto $mon;

    #[Property]
    public ?\tueInTimeCardMaterialsUpdateDto $tue;

    #[Property]
    public ?\wedInTimeCardMaterialsUpdateDto $wed;

    #[Property]
    public ?\thuInTimeCardMaterialsUpdateDto $thu;

    #[Property]
    public ?\friInTimeCardMaterialsUpdateDto $fri;

    #[Property]
    public ?\satInTimeCardMaterialsUpdateDto $sat;

    #[Property]
    public ?\sunInTimeCardMaterialsUpdateDto $sun;
}
