<?php

namespace Pionect\VismaSdk\Enums;

enum ReleaseCashTransactionActionResultActionResultEnum: string
{
    case QUEUED = 'Queued';
    case IN_PROCESS = 'InProcess';
    case FAILED = 'Failed';
    case DONE = 'Done';
}
