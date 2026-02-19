<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Approval status > The approval status, which indicates whether the summary
 * row requires approval and, if it does, what the current state of approval is.
 */
enum TimeCardSummaryApprovalStatusEnum: string
{
    case NEW = 'New';
    case CANCELED = 'Canceled';
    case SENT_TO_APPROVAL = 'SentToApproval';
    case RECEIVED_BY_APPROVAL = 'ReceivedByApproval';
    case IN_PROGRESS_APPROVAL = 'InProgressApproval';
    case REJECTED_IN_APPROVAL = 'RejectedInApproval';
    case APPROVED_IN_APPROVAL = 'ApprovedInApproval';
    case ACTIVE_WORKFLOW_APPROVAL = 'ActiveWorkflowApproval';
}
