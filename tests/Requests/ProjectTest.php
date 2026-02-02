<?php

use Pionect\VismaSdk\Dto\ChangeProjectIdActionDto;
use Pionect\VismaSdk\Dto\ProjectUpdateDto;
use Pionect\VismaSdk\Requests\Project\ProjectChangeProjectIdactionByinternalIdRequest;
use Pionect\VismaSdk\Requests\Project\ProjectGetAllRequest;
use Pionect\VismaSdk\Requests\Project\ProjectGetByinternalIdRequest;
use Pionect\VismaSdk\Requests\Project\ProjectGetByprojectIdRequest;
use Pionect\VismaSdk\Requests\Project\ProjectGetTasksRequest;
use Pionect\VismaSdk\Requests\Project\ProjectPostRequest;
use Pionect\VismaSdk\Requests\Project\ProjectPutByinternalIdRequest;
use Pionect\VismaSdk\Requests\Project\ProjectPutByprojectIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the projectGetByprojectIdRequest method in the Project resource', function () {
    Saloon::fake([
        ProjectGetByprojectIdRequest::class => MockResponse::make([
            'internalId' => 42,
            'projectId' => 'mock-id-123',
            'customer' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'hold' => true,
            'status' => 'String value',
            'template' => [
                'status' => 'String value',
                'number' => 'String value',
                'description' => 'String value',
            ],
            'description' => 'String value',
            'assets' => 42,
            'liability' => 42,
            'income' => 42,
            'expenses' => 42,
            'startDate' => '2025-11-22T10:40:04+00:00',
            'endDate' => '2025-11-22T10:40:04+00:00',
            'projectManager' => [
                'employeeUserId' => 'mock-id-123',
                'employeeId' => 42,
                'employeeNumber' => 'String value',
                'employeeName' => 'String value',
                'status' => 'String value',
                'department' => 'String value',
                'contact' => [
                    'employeeContact' => 'String value',
                    'title' => 'String value',
                    'firstName' => 'String value',
                    'midName' => 'String value',
                    'lastName' => 'String value',
                    'phone3' => 'String value',
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'address' => [
                    'addressId' => 42,
                    'addressLine1' => 'String value',
                    'addressLine2' => 'String value',
                    'addressLine3' => 'String value',
                    'postalCode' => 'String value',
                    'city' => 'String value',
                    'country' => [
                        'name' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'county' => [
                        'name' => 'String value',
                    ],
                ],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'employeeClass' => [
                    'description' => 'String value',
                ],
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'calendarId' => 'mock-id-123',
                'employeeLogin' => 'String value',
                'workGroupDescription' => [],
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            'restrictEmployees' => true,
            'restrictEquipment' => true,
            'visibility' => [
                'visibleInGl' => true,
                'visibleInAp' => true,
                'visibleInAr' => true,
                'visibleInSo' => true,
                'visibleInPo' => true,
                'visibleInEa' => true,
                'visibleInTa' => true,
                'visibleInIn' => true,
                'visibleInCa' => true,
                'visibleInCr' => true,
            ],
            'defAccount' => [
                'type' => 'String value',
                'number' => 'String value',
                'description' => 'String value',
            ],
            'defSub' => [
                'active' => true,
                'description' => 'String value',
            ],
            'defAccrualAccount' => [
                'type' => 'String value',
                'number' => 'String value',
                'description' => 'String value',
            ],
            'defAccrualSub' => [
                'active' => true,
                'description' => 'String value',
            ],
            'billingPeriod' => 'String value',
            'nextBillingDate' => '2025-11-22T10:40:04+00:00',
            'lastBillingDate' => '2025-11-22T10:40:04+00:00',
            'customerLocation' => [
                'name' => 'String value',
            ],
            'allocationRule' => [
                'active' => true,
                'description' => 'String value',
            ],
            'billingRule' => [
                'active' => true,
                'description' => 'String value',
            ],
            'branch' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'rateTable' => [
                'description' => 'String value',
            ],
            'autoAllocate' => true,
            'automaticReleaseAr' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'tasks' => [],
            'employees' => [],
            'publicId' => 'mock-id-123',
            'systemTemplate' => true,
            'timeStamp' => 'String value',
            'attributes' => [],
            'note' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new ProjectGetByprojectIdRequest(
        projectId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectGetByprojectIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->internalId->toBe(42)
        ->projectId->toBe('mock-id-123')
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->hold->toBe(true)
        ->status->toBe('String value')
        ->template->status->toBe('String value')
        ->template->number->toBe('String value')
        ->template->description->toBe('String value')
        ->description->toBe('String value')
        ->assets->toBe(42)
        ->liability->toBe(42)
        ->income->toBe(42)
        ->expenses->toBe(42)
        ->startDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->endDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->projectManager->employeeUserId->toBe('mock-id-123')
        ->projectManager->employeeId->toBe(42)
        ->projectManager->employeeNumber->toBe('String value')
        ->projectManager->employeeName->toBe('String value')
        ->projectManager->status->toBe('String value')
        ->projectManager->department->toBe('String value')
        ->projectManager->contact->employeeContact->toBe('String value')
        ->projectManager->contact->title->toBe('String value')
        ->projectManager->contact->firstName->toBe('String value')
        ->projectManager->contact->midName->toBe('String value')
        ->projectManager->contact->lastName->toBe('String value')
        ->projectManager->contact->phone3->toBe('String value')
        ->projectManager->contact->contactId->toBe(42)
        ->projectManager->contact->name->toBe('String value')
        ->projectManager->contact->attention->toBe('String value')
        ->projectManager->contact->email->toBe('test@example.com')
        ->projectManager->contact->web->toBe('String value')
        ->projectManager->contact->phone1->toBe('String value')
        ->projectManager->contact->phone2->toBe('String value')
        ->projectManager->contact->fax->toBe('String value')
        ->projectManager->address->addressId->toBe(42)
        ->projectManager->address->addressLine1->toBe('String value')
        ->projectManager->address->addressLine2->toBe('String value')
        ->projectManager->address->addressLine3->toBe('String value')
        ->projectManager->address->postalCode->toBe('String value')
        ->projectManager->address->city->toBe('String value')
        ->projectManager->address->country->name->toBe('String value')
        ->projectManager->address->country->errorInfo->toBe('String value')
        ->projectManager->address->county->name->toBe('String value')
        ->projectManager->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->projectManager->employeeClass->description->toBe('String value')
        ->projectManager->branch->number->toBe('String value')
        ->projectManager->branch->name->toBe('String value')
        ->projectManager->calendarId->toBe('mock-id-123')
        ->projectManager->employeeLogin->toBe('String value')
        ->projectManager->timeStamp->toBe('String value')
        ->projectManager->errorInfo->toBe('String value')
        ->restrictEmployees->toBe(true)
        ->restrictEquipment->toBe(true)
        ->visibility->visibleInGl->toBe(true)
        ->visibility->visibleInAp->toBe(true)
        ->visibility->visibleInAr->toBe(true)
        ->visibility->visibleInSo->toBe(true)
        ->visibility->visibleInPo->toBe(true)
        ->visibility->visibleInEa->toBe(true)
        ->visibility->visibleInTa->toBe(true)
        ->visibility->visibleInIn->toBe(true)
        ->visibility->visibleInCa->toBe(true)
        ->visibility->visibleInCr->toBe(true)
        ->defAccount->type->toBe('String value')
        ->defAccount->number->toBe('String value')
        ->defAccount->description->toBe('String value')
        ->defSub->active->toBe(true)
        ->defSub->description->toBe('String value')
        ->defAccrualAccount->type->toBe('String value')
        ->defAccrualAccount->number->toBe('String value')
        ->defAccrualAccount->description->toBe('String value')
        ->defAccrualSub->active->toBe(true)
        ->defAccrualSub->description->toBe('String value')
        ->billingPeriod->toBe('String value')
        ->nextBillingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastBillingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customerLocation->name->toBe('String value')
        ->allocationRule->active->toBe(true)
        ->allocationRule->description->toBe('String value')
        ->billingRule->active->toBe(true)
        ->billingRule->description->toBe('String value')
        ->branch->number->toBe('String value')
        ->branch->name->toBe('String value')
        ->rateTable->description->toBe('String value')
        ->autoAllocate->toBe(true)
        ->automaticReleaseAr->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->publicId->toBe('mock-id-123')
        ->systemTemplate->toBe(true)
        ->timeStamp->toBe('String value')
        ->note->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the projectGetByinternalIdRequest method in the Project resource', function () {
    Saloon::fake([
        ProjectGetByinternalIdRequest::class => MockResponse::make([
            'internalId' => 42,
            'projectId' => 'mock-id-123',
            'customer' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'hold' => true,
            'status' => 'String value',
            'template' => [
                'status' => 'String value',
                'number' => 'String value',
                'description' => 'String value',
            ],
            'description' => 'String value',
            'assets' => 42,
            'liability' => 42,
            'income' => 42,
            'expenses' => 42,
            'startDate' => '2025-11-22T10:40:04+00:00',
            'endDate' => '2025-11-22T10:40:04+00:00',
            'projectManager' => [
                'employeeUserId' => 'mock-id-123',
                'employeeId' => 42,
                'employeeNumber' => 'String value',
                'employeeName' => 'String value',
                'status' => 'String value',
                'department' => 'String value',
                'contact' => [
                    'employeeContact' => 'String value',
                    'title' => 'String value',
                    'firstName' => 'String value',
                    'midName' => 'String value',
                    'lastName' => 'String value',
                    'phone3' => 'String value',
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'address' => [
                    'addressId' => 42,
                    'addressLine1' => 'String value',
                    'addressLine2' => 'String value',
                    'addressLine3' => 'String value',
                    'postalCode' => 'String value',
                    'city' => 'String value',
                    'country' => [
                        'name' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'county' => [
                        'name' => 'String value',
                    ],
                ],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'employeeClass' => [
                    'description' => 'String value',
                ],
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'calendarId' => 'mock-id-123',
                'employeeLogin' => 'String value',
                'workGroupDescription' => [],
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            'restrictEmployees' => true,
            'restrictEquipment' => true,
            'visibility' => [
                'visibleInGl' => true,
                'visibleInAp' => true,
                'visibleInAr' => true,
                'visibleInSo' => true,
                'visibleInPo' => true,
                'visibleInEa' => true,
                'visibleInTa' => true,
                'visibleInIn' => true,
                'visibleInCa' => true,
                'visibleInCr' => true,
            ],
            'defAccount' => [
                'type' => 'String value',
                'number' => 'String value',
                'description' => 'String value',
            ],
            'defSub' => [
                'active' => true,
                'description' => 'String value',
            ],
            'defAccrualAccount' => [
                'type' => 'String value',
                'number' => 'String value',
                'description' => 'String value',
            ],
            'defAccrualSub' => [
                'active' => true,
                'description' => 'String value',
            ],
            'billingPeriod' => 'String value',
            'nextBillingDate' => '2025-11-22T10:40:04+00:00',
            'lastBillingDate' => '2025-11-22T10:40:04+00:00',
            'customerLocation' => [
                'name' => 'String value',
            ],
            'allocationRule' => [
                'active' => true,
                'description' => 'String value',
            ],
            'billingRule' => [
                'active' => true,
                'description' => 'String value',
            ],
            'branch' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'rateTable' => [
                'description' => 'String value',
            ],
            'autoAllocate' => true,
            'automaticReleaseAr' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'tasks' => [],
            'employees' => [],
            'publicId' => 'mock-id-123',
            'systemTemplate' => true,
            'timeStamp' => 'String value',
            'attributes' => [],
            'note' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new ProjectGetByinternalIdRequest(
        internalId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectGetByinternalIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->internalId->toBe(42)
        ->projectId->toBe('mock-id-123')
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->hold->toBe(true)
        ->status->toBe('String value')
        ->template->status->toBe('String value')
        ->template->number->toBe('String value')
        ->template->description->toBe('String value')
        ->description->toBe('String value')
        ->assets->toBe(42)
        ->liability->toBe(42)
        ->income->toBe(42)
        ->expenses->toBe(42)
        ->startDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->endDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->projectManager->employeeUserId->toBe('mock-id-123')
        ->projectManager->employeeId->toBe(42)
        ->projectManager->employeeNumber->toBe('String value')
        ->projectManager->employeeName->toBe('String value')
        ->projectManager->status->toBe('String value')
        ->projectManager->department->toBe('String value')
        ->projectManager->contact->employeeContact->toBe('String value')
        ->projectManager->contact->title->toBe('String value')
        ->projectManager->contact->firstName->toBe('String value')
        ->projectManager->contact->midName->toBe('String value')
        ->projectManager->contact->lastName->toBe('String value')
        ->projectManager->contact->phone3->toBe('String value')
        ->projectManager->contact->contactId->toBe(42)
        ->projectManager->contact->name->toBe('String value')
        ->projectManager->contact->attention->toBe('String value')
        ->projectManager->contact->email->toBe('test@example.com')
        ->projectManager->contact->web->toBe('String value')
        ->projectManager->contact->phone1->toBe('String value')
        ->projectManager->contact->phone2->toBe('String value')
        ->projectManager->contact->fax->toBe('String value')
        ->projectManager->address->addressId->toBe(42)
        ->projectManager->address->addressLine1->toBe('String value')
        ->projectManager->address->addressLine2->toBe('String value')
        ->projectManager->address->addressLine3->toBe('String value')
        ->projectManager->address->postalCode->toBe('String value')
        ->projectManager->address->city->toBe('String value')
        ->projectManager->address->country->name->toBe('String value')
        ->projectManager->address->country->errorInfo->toBe('String value')
        ->projectManager->address->county->name->toBe('String value')
        ->projectManager->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->projectManager->employeeClass->description->toBe('String value')
        ->projectManager->branch->number->toBe('String value')
        ->projectManager->branch->name->toBe('String value')
        ->projectManager->calendarId->toBe('mock-id-123')
        ->projectManager->employeeLogin->toBe('String value')
        ->projectManager->timeStamp->toBe('String value')
        ->projectManager->errorInfo->toBe('String value')
        ->restrictEmployees->toBe(true)
        ->restrictEquipment->toBe(true)
        ->visibility->visibleInGl->toBe(true)
        ->visibility->visibleInAp->toBe(true)
        ->visibility->visibleInAr->toBe(true)
        ->visibility->visibleInSo->toBe(true)
        ->visibility->visibleInPo->toBe(true)
        ->visibility->visibleInEa->toBe(true)
        ->visibility->visibleInTa->toBe(true)
        ->visibility->visibleInIn->toBe(true)
        ->visibility->visibleInCa->toBe(true)
        ->visibility->visibleInCr->toBe(true)
        ->defAccount->type->toBe('String value')
        ->defAccount->number->toBe('String value')
        ->defAccount->description->toBe('String value')
        ->defSub->active->toBe(true)
        ->defSub->description->toBe('String value')
        ->defAccrualAccount->type->toBe('String value')
        ->defAccrualAccount->number->toBe('String value')
        ->defAccrualAccount->description->toBe('String value')
        ->defAccrualSub->active->toBe(true)
        ->defAccrualSub->description->toBe('String value')
        ->billingPeriod->toBe('String value')
        ->nextBillingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastBillingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customerLocation->name->toBe('String value')
        ->allocationRule->active->toBe(true)
        ->allocationRule->description->toBe('String value')
        ->billingRule->active->toBe(true)
        ->billingRule->description->toBe('String value')
        ->branch->number->toBe('String value')
        ->branch->name->toBe('String value')
        ->rateTable->description->toBe('String value')
        ->autoAllocate->toBe(true)
        ->automaticReleaseAr->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->publicId->toBe('mock-id-123')
        ->systemTemplate->toBe(true)
        ->timeStamp->toBe('String value')
        ->note->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the projectGetAllRequest method in the Project resource', function () {
    Saloon::fake([
        ProjectGetAllRequest::class => MockResponse::make([
            0 => [
                'internalId' => 42,
                'projectId' => 'mock-id-123',
                'customer' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'hold' => true,
                'status' => 'String value',
                'template' => [
                    'status' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'description' => 'String value',
                'assets' => 42,
                'liability' => 42,
                'income' => 42,
                'expenses' => 42,
                'startDate' => '2025-11-22T10:40:04+00:00',
                'endDate' => '2025-11-22T10:40:04+00:00',
                'projectManager' => [
                    'employeeUserId' => 'mock-id-123',
                    'employeeId' => 42,
                    'employeeNumber' => 'String value',
                    'employeeName' => 'String value',
                    'status' => 'String value',
                    'department' => 'String value',
                    'contact' => [
                        'employeeContact' => 'String value',
                        'title' => 'String value',
                        'firstName' => 'String value',
                        'midName' => 'String value',
                        'lastName' => 'String value',
                        'phone3' => 'String value',
                        'contactId' => 42,
                        'name' => 'String value',
                        'attention' => 'String value',
                        'email' => 'test@example.com',
                        'web' => 'String value',
                        'phone1' => 'String value',
                        'phone2' => 'String value',
                        'fax' => 'String value',
                    ],
                    'address' => [
                        'addressId' => 42,
                        'addressLine1' => 'String value',
                        'addressLine2' => 'String value',
                        'addressLine3' => 'String value',
                        'postalCode' => 'String value',
                        'city' => 'String value',
                        'country' => [
                            'name' => 'String value',
                            'errorInfo' => 'String value',
                        ],
                        'county' => [
                            'name' => 'String value',
                        ],
                    ],
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'employeeClass' => [
                        'description' => 'String value',
                    ],
                    'branch' => [
                        'number' => 'String value',
                        'name' => 'String value',
                    ],
                    'calendarId' => 'mock-id-123',
                    'employeeLogin' => 'String value',
                    'workGroupDescription' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'restrictEmployees' => true,
                'restrictEquipment' => true,
                'visibility' => [
                    'visibleInGl' => true,
                    'visibleInAp' => true,
                    'visibleInAr' => true,
                    'visibleInSo' => true,
                    'visibleInPo' => true,
                    'visibleInEa' => true,
                    'visibleInTa' => true,
                    'visibleInIn' => true,
                    'visibleInCa' => true,
                    'visibleInCr' => true,
                ],
                'defAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'defSub' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'defAccrualAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'defAccrualSub' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'billingPeriod' => 'String value',
                'nextBillingDate' => '2025-11-22T10:40:04+00:00',
                'lastBillingDate' => '2025-11-22T10:40:04+00:00',
                'customerLocation' => [
                    'name' => 'String value',
                ],
                'allocationRule' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'billingRule' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'rateTable' => [
                    'description' => 'String value',
                ],
                'autoAllocate' => true,
                'automaticReleaseAr' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'tasks' => [],
                'employees' => [],
                'publicId' => 'mock-id-123',
                'systemTemplate' => true,
                'timeStamp' => 'String value',
                'attributes' => [],
                'note' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'internalId' => 42,
                'projectId' => 'mock-id-123',
                'customer' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'hold' => true,
                'status' => 'String value',
                'template' => [
                    'status' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'description' => 'String value',
                'assets' => 42,
                'liability' => 42,
                'income' => 42,
                'expenses' => 42,
                'startDate' => '2025-11-22T10:40:04+00:00',
                'endDate' => '2025-11-22T10:40:04+00:00',
                'projectManager' => [
                    'employeeUserId' => 'mock-id-123',
                    'employeeId' => 42,
                    'employeeNumber' => 'String value',
                    'employeeName' => 'String value',
                    'status' => 'String value',
                    'department' => 'String value',
                    'contact' => [
                        'employeeContact' => 'String value',
                        'title' => 'String value',
                        'firstName' => 'String value',
                        'midName' => 'String value',
                        'lastName' => 'String value',
                        'phone3' => 'String value',
                        'contactId' => 42,
                        'name' => 'String value',
                        'attention' => 'String value',
                        'email' => 'test@example.com',
                        'web' => 'String value',
                        'phone1' => 'String value',
                        'phone2' => 'String value',
                        'fax' => 'String value',
                    ],
                    'address' => [
                        'addressId' => 42,
                        'addressLine1' => 'String value',
                        'addressLine2' => 'String value',
                        'addressLine3' => 'String value',
                        'postalCode' => 'String value',
                        'city' => 'String value',
                        'country' => [
                            'name' => 'String value',
                            'errorInfo' => 'String value',
                        ],
                        'county' => [
                            'name' => 'String value',
                        ],
                    ],
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'employeeClass' => [
                        'description' => 'String value',
                    ],
                    'branch' => [
                        'number' => 'String value',
                        'name' => 'String value',
                    ],
                    'calendarId' => 'mock-id-123',
                    'employeeLogin' => 'String value',
                    'workGroupDescription' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'restrictEmployees' => true,
                'restrictEquipment' => true,
                'visibility' => [
                    'visibleInGl' => true,
                    'visibleInAp' => true,
                    'visibleInAr' => true,
                    'visibleInSo' => true,
                    'visibleInPo' => true,
                    'visibleInEa' => true,
                    'visibleInTa' => true,
                    'visibleInIn' => true,
                    'visibleInCa' => true,
                    'visibleInCr' => true,
                ],
                'defAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'defSub' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'defAccrualAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'defAccrualSub' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'billingPeriod' => 'String value',
                'nextBillingDate' => '2025-11-22T10:40:04+00:00',
                'lastBillingDate' => '2025-11-22T10:40:04+00:00',
                'customerLocation' => [
                    'name' => 'String value',
                ],
                'allocationRule' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'billingRule' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'rateTable' => [
                    'description' => 'String value',
                ],
                'autoAllocate' => true,
                'automaticReleaseAr' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'tasks' => [],
                'employees' => [],
                'publicId' => 'mock-id-123',
                'systemTemplate' => true,
                'timeStamp' => 'String value',
                'attributes' => [],
                'note' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new ProjectGetAllRequest(
        status: 'test string',
        systemTemplate: true,
        visibleInAp: true,
        startDate: 'test string',
        expandAttribute: true,
        attributes: 'test string',
        taskStatus: 'test string',
        taskVisibleInAp: true,
        taskVisibleInAr: true,
        taskVisibleInCa: true,
        taskVisibleInCr: true,
        taskVisibleInEa: true,
        taskVisibleInGl: true,
        taskVisibleInIn: true,
        taskVisibleInPo: true,
        taskVisibleInSo: true,
        taskVisibleInTa: true,
        nonProject: true,
        publicId: 'test string',
        restrictedEmployee: 'test string',
        restrictedUser: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        branch: 'test string',
        onHold: true,
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->internalId->toBe(42)
        ->projectId->toBe('mock-id-123')
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->hold->toBe(true)
        ->status->toBe('String value')
        ->template->status->toBe('String value')
        ->template->number->toBe('String value')
        ->template->description->toBe('String value')
        ->description->toBe('String value')
        ->assets->toBe(42)
        ->liability->toBe(42)
        ->income->toBe(42)
        ->expenses->toBe(42)
        ->startDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->endDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->projectManager->employeeUserId->toBe('mock-id-123')
        ->projectManager->employeeId->toBe(42)
        ->projectManager->employeeNumber->toBe('String value')
        ->projectManager->employeeName->toBe('String value')
        ->projectManager->status->toBe('String value')
        ->projectManager->department->toBe('String value')
        ->projectManager->contact->employeeContact->toBe('String value')
        ->projectManager->contact->title->toBe('String value')
        ->projectManager->contact->firstName->toBe('String value')
        ->projectManager->contact->midName->toBe('String value')
        ->projectManager->contact->lastName->toBe('String value')
        ->projectManager->contact->phone3->toBe('String value')
        ->projectManager->contact->contactId->toBe(42)
        ->projectManager->contact->name->toBe('String value')
        ->projectManager->contact->attention->toBe('String value')
        ->projectManager->contact->email->toBe('test@example.com')
        ->projectManager->contact->web->toBe('String value')
        ->projectManager->contact->phone1->toBe('String value')
        ->projectManager->contact->phone2->toBe('String value')
        ->projectManager->contact->fax->toBe('String value')
        ->projectManager->address->addressId->toBe(42)
        ->projectManager->address->addressLine1->toBe('String value')
        ->projectManager->address->addressLine2->toBe('String value')
        ->projectManager->address->addressLine3->toBe('String value')
        ->projectManager->address->postalCode->toBe('String value')
        ->projectManager->address->city->toBe('String value')
        ->projectManager->address->country->name->toBe('String value')
        ->projectManager->address->country->errorInfo->toBe('String value')
        ->projectManager->address->county->name->toBe('String value')
        ->projectManager->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->projectManager->employeeClass->description->toBe('String value')
        ->projectManager->branch->number->toBe('String value')
        ->projectManager->branch->name->toBe('String value')
        ->projectManager->calendarId->toBe('mock-id-123')
        ->projectManager->employeeLogin->toBe('String value')
        ->projectManager->timeStamp->toBe('String value')
        ->projectManager->errorInfo->toBe('String value')
        ->restrictEmployees->toBe(true)
        ->restrictEquipment->toBe(true)
        ->visibility->visibleInGl->toBe(true)
        ->visibility->visibleInAp->toBe(true)
        ->visibility->visibleInAr->toBe(true)
        ->visibility->visibleInSo->toBe(true)
        ->visibility->visibleInPo->toBe(true)
        ->visibility->visibleInEa->toBe(true)
        ->visibility->visibleInTa->toBe(true)
        ->visibility->visibleInIn->toBe(true)
        ->visibility->visibleInCa->toBe(true)
        ->visibility->visibleInCr->toBe(true)
        ->defAccount->type->toBe('String value')
        ->defAccount->number->toBe('String value')
        ->defAccount->description->toBe('String value')
        ->defSub->active->toBe(true)
        ->defSub->description->toBe('String value')
        ->defAccrualAccount->type->toBe('String value')
        ->defAccrualAccount->number->toBe('String value')
        ->defAccrualAccount->description->toBe('String value')
        ->defAccrualSub->active->toBe(true)
        ->defAccrualSub->description->toBe('String value')
        ->billingPeriod->toBe('String value')
        ->nextBillingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastBillingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customerLocation->name->toBe('String value')
        ->allocationRule->active->toBe(true)
        ->allocationRule->description->toBe('String value')
        ->billingRule->active->toBe(true)
        ->billingRule->description->toBe('String value')
        ->branch->number->toBe('String value')
        ->branch->name->toBe('String value')
        ->rateTable->description->toBe('String value')
        ->autoAllocate->toBe(true)
        ->automaticReleaseAr->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->publicId->toBe('mock-id-123')
        ->systemTemplate->toBe(true)
        ->timeStamp->toBe('String value')
        ->note->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the projectPostRequest method in the Project resource', function () {
    $bodyData = new ProjectUpdateDto(
        projectId: 'mock-id-123',
        internalId: 42,
        customer: 'String value',
        description: 'String value',
        hold: true,
        template: 'String value',
        status: 'String value',
        defAccount: 'String value',
        defSub: [],
        defAccrualAccount: 'String value',
        defAccrualSub: [],
        startDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        endDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        billingPeriod: 'String value',
        allocationRule: 'String value',
        billingRule: 'String value',
        branch: 'String value',
        rateTable: 'String value',
        projectManger: 'String value',
        projectManagerInternalId: 42,
        autoAllocate: true,
        automaticReleaseArDoc: true,
        restricEmployees: true,
        restricEquipment: true,
        customerLocation: 'String value',
        visibility: new VisibilityUpdateDto(
            visibleInGl: true,
            visibleInAp: true,
            visibleInAr: true,
            visibleInSo: true,
            visibleInPo: true,
            visibleInEa: true,
            visibleInTa: true,
            visibleInIn: true,
            visibleInCa: true,
            visibleInCr: true
        ),
        tasks: [],
        employees: [],
        note: 'String value'
    );

    Saloon::fake([
        ProjectPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ProjectPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the projectGetTasksRequest method in the Project resource', function () {
    Saloon::fake([
        ProjectGetTasksRequest::class => MockResponse::make([
            0 => [
                'internalId' => 42,
                'projectInternalId' => 42,
                'defAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'defSub' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'defAccrualAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'defAccrualSub' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'taxCategory' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'taskId' => 'mock-id-123',
                'description' => 'String value',
                'plannedStart' => '2025-11-22T10:40:04+00:00',
                'plannedEnd' => '2025-11-22T10:40:04+00:00',
                'startDate' => '2025-11-22T10:40:04+00:00',
                'endDate' => '2025-11-22T10:40:04+00:00',
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'rateTable' => [
                    'description' => 'String value',
                ],
                'status' => 'String value',
                'restrictEmployees' => true,
                'visibility' => [
                    'visibleInGl' => true,
                    'visibleInAp' => true,
                    'visibleInAr' => true,
                    'visibleInSo' => true,
                    'visibleInPo' => true,
                    'visibleInEa' => true,
                    'visibleInTa' => true,
                    'visibleInIn' => true,
                    'visibleInCa' => true,
                    'visibleInCr' => true,
                ],
                'timeStamp' => 'String value',
                'employees' => [],
                'attributes' => [],
            ],
            1 => [
                'internalId' => 42,
                'projectInternalId' => 42,
                'defAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'defSub' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'defAccrualAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'defAccrualSub' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'taxCategory' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'taskId' => 'mock-id-123',
                'description' => 'String value',
                'plannedStart' => '2025-11-22T10:40:04+00:00',
                'plannedEnd' => '2025-11-22T10:40:04+00:00',
                'startDate' => '2025-11-22T10:40:04+00:00',
                'endDate' => '2025-11-22T10:40:04+00:00',
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'rateTable' => [
                    'description' => 'String value',
                ],
                'status' => 'String value',
                'restrictEmployees' => true,
                'visibility' => [
                    'visibleInGl' => true,
                    'visibleInAp' => true,
                    'visibleInAr' => true,
                    'visibleInSo' => true,
                    'visibleInPo' => true,
                    'visibleInEa' => true,
                    'visibleInTa' => true,
                    'visibleInIn' => true,
                    'visibleInCa' => true,
                    'visibleInCr' => true,
                ],
                'timeStamp' => 'String value',
                'employees' => [],
                'attributes' => [],
            ],
        ], 200),
    ]);

    $request = new ProjectGetTasksRequest(
        projectId: 'test string',
        publicId: 'test string',
        projectInternalId: 123,
        description: 'test string',
        taskCd: 'test string',
        taskCdDesc: 'test string',
        status: 'test string',
        expandAttribute: true,
        visibleInAp: true,
        visibleInAr: true,
        visibleInCa: true,
        visibleInCr: true,
        visibleInEa: true,
        visibleInGl: true,
        visibleInIn: true,
        visibleInPo: true,
        visibleInSo: true,
        visibleInTa: true,
        restrictedEmployee: 'test string',
        restrictedUser: 123,
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectGetTasksRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->internalId->toBe(42)
        ->projectInternalId->toBe(42)
        ->defAccount->type->toBe('String value')
        ->defAccount->number->toBe('String value')
        ->defAccount->description->toBe('String value')
        ->defSub->active->toBe(true)
        ->defSub->description->toBe('String value')
        ->defAccrualAccount->type->toBe('String value')
        ->defAccrualAccount->number->toBe('String value')
        ->defAccrualAccount->description->toBe('String value')
        ->defAccrualSub->active->toBe(true)
        ->defAccrualSub->description->toBe('String value')
        ->taxCategory->number->toBe('String value')
        ->taxCategory->description->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->taskId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->plannedStart->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->plannedEnd->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->startDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->endDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branch->number->toBe('String value')
        ->branch->name->toBe('String value')
        ->rateTable->description->toBe('String value')
        ->status->toBe('String value')
        ->restrictEmployees->toBe(true)
        ->visibility->visibleInGl->toBe(true)
        ->visibility->visibleInAp->toBe(true)
        ->visibility->visibleInAr->toBe(true)
        ->visibility->visibleInSo->toBe(true)
        ->visibility->visibleInPo->toBe(true)
        ->visibility->visibleInEa->toBe(true)
        ->visibility->visibleInTa->toBe(true)
        ->visibility->visibleInIn->toBe(true)
        ->visibility->visibleInCa->toBe(true)
        ->visibility->visibleInCr->toBe(true)
        ->timeStamp->toBe('String value');
});

it('calls the projectChangeProjectIdactionByinternalIdRequest method in the Project resource', function () {
    $bodyData = new ChangeProjectIdActionDto(
        projectId: 'mock-id-123'
    );

    Saloon::fake([
        ProjectChangeProjectIdactionByinternalIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ProjectChangeProjectIdactionByinternalIdRequest(
        internalId: 123,
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectChangeProjectIdactionByinternalIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the projectPutByprojectIdRequest method in the Project resource', function () {
    $bodyData = new ProjectUpdateDto(
        projectId: 'mock-id-123',
        internalId: 42,
        customer: 'String value',
        description: 'String value',
        hold: true,
        template: 'String value',
        status: 'String value',
        defAccount: 'String value',
        defSub: [],
        defAccrualAccount: 'String value',
        defAccrualSub: [],
        startDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        endDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        billingPeriod: 'String value',
        allocationRule: 'String value',
        billingRule: 'String value',
        branch: 'String value',
        rateTable: 'String value',
        projectManger: 'String value',
        projectManagerInternalId: 42,
        autoAllocate: true,
        automaticReleaseArDoc: true,
        restricEmployees: true,
        restricEquipment: true,
        customerLocation: 'String value',
        visibility: new VisibilityUpdateDto(
            visibleInGl: true,
            visibleInAp: true,
            visibleInAr: true,
            visibleInSo: true,
            visibleInPo: true,
            visibleInEa: true,
            visibleInTa: true,
            visibleInIn: true,
            visibleInCa: true,
            visibleInCr: true
        ),
        tasks: [],
        employees: [],
        note: 'String value'
    );

    Saloon::fake([
        ProjectPutByprojectIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ProjectPutByprojectIdRequest(
        projectId: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectPutByprojectIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the projectPutByinternalIdRequest method in the Project resource', function () {
    $bodyData = new ProjectUpdateDto(
        projectId: 'mock-id-123',
        internalId: 42,
        customer: 'String value',
        description: 'String value',
        hold: true,
        template: 'String value',
        status: 'String value',
        defAccount: 'String value',
        defSub: [],
        defAccrualAccount: 'String value',
        defAccrualSub: [],
        startDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        endDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        billingPeriod: 'String value',
        allocationRule: 'String value',
        billingRule: 'String value',
        branch: 'String value',
        rateTable: 'String value',
        projectManger: 'String value',
        projectManagerInternalId: 42,
        autoAllocate: true,
        automaticReleaseArDoc: true,
        restricEmployees: true,
        restricEquipment: true,
        customerLocation: 'String value',
        visibility: new VisibilityUpdateDto(
            visibleInGl: true,
            visibleInAp: true,
            visibleInAr: true,
            visibleInSo: true,
            visibleInPo: true,
            visibleInEa: true,
            visibleInTa: true,
            visibleInIn: true,
            visibleInCa: true,
            visibleInCr: true
        ),
        tasks: [],
        employees: [],
        note: 'String value'
    );

    Saloon::fake([
        ProjectPutByinternalIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ProjectPutByinternalIdRequest(
        internalId: 123,
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectPutByinternalIdRequest::class);

    expect($response->status())->toBe(201);
});
