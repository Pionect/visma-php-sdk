<?php

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
            'customer' => null,
            'hold' => true,
            'status' => 'String value',
            'template' => null,
            'description' => 'String value',
            'assets' => 42,
            'liability' => 42,
            'income' => 42,
            'expenses' => 42,
            'startDate' => '2025-11-22T10:40:04+00:00',
            'endDate' => '2025-11-22T10:40:04+00:00',
            'projectManager' => null,
            'restrictEmployees' => true,
            'restrictEquipment' => true,
            'visibility' => null,
            'defAccount' => null,
            'defSub' => null,
            'defAccrualAccount' => null,
            'defAccrualSub' => null,
            'billingPeriod' => 'String value',
            'nextBillingDate' => '2025-11-22T10:40:04+00:00',
            'lastBillingDate' => '2025-11-22T10:40:04+00:00',
            'customerLocation' => null,
            'allocationRule' => null,
            'billingRule' => null,
            'branch' => null,
            'rateTable' => null,
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
        ->customer->toBeNull()
        ->hold->toBe(true)
        ->status->toBe('String value')
        ->template->toBeNull()
        ->description->toBe('String value')
        ->assets->toBe(42)
        ->liability->toBe(42)
        ->income->toBe(42)
        ->expenses->toBe(42)
        ->startDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->endDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->projectManager->toBeNull()
        ->restrictEmployees->toBe(true)
        ->restrictEquipment->toBe(true)
        ->visibility->toBeNull()
        ->defAccount->toBeNull()
        ->defSub->toBeNull()
        ->defAccrualAccount->toBeNull()
        ->defAccrualSub->toBeNull()
        ->billingPeriod->toBe('String value')
        ->nextBillingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastBillingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customerLocation->toBeNull()
        ->allocationRule->toBeNull()
        ->billingRule->toBeNull()
        ->branch->toBeNull()
        ->rateTable->toBeNull()
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
            'customer' => null,
            'hold' => true,
            'status' => 'String value',
            'template' => null,
            'description' => 'String value',
            'assets' => 42,
            'liability' => 42,
            'income' => 42,
            'expenses' => 42,
            'startDate' => '2025-11-22T10:40:04+00:00',
            'endDate' => '2025-11-22T10:40:04+00:00',
            'projectManager' => null,
            'restrictEmployees' => true,
            'restrictEquipment' => true,
            'visibility' => null,
            'defAccount' => null,
            'defSub' => null,
            'defAccrualAccount' => null,
            'defAccrualSub' => null,
            'billingPeriod' => 'String value',
            'nextBillingDate' => '2025-11-22T10:40:04+00:00',
            'lastBillingDate' => '2025-11-22T10:40:04+00:00',
            'customerLocation' => null,
            'allocationRule' => null,
            'billingRule' => null,
            'branch' => null,
            'rateTable' => null,
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
        ->customer->toBeNull()
        ->hold->toBe(true)
        ->status->toBe('String value')
        ->template->toBeNull()
        ->description->toBe('String value')
        ->assets->toBe(42)
        ->liability->toBe(42)
        ->income->toBe(42)
        ->expenses->toBe(42)
        ->startDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->endDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->projectManager->toBeNull()
        ->restrictEmployees->toBe(true)
        ->restrictEquipment->toBe(true)
        ->visibility->toBeNull()
        ->defAccount->toBeNull()
        ->defSub->toBeNull()
        ->defAccrualAccount->toBeNull()
        ->defAccrualSub->toBeNull()
        ->billingPeriod->toBe('String value')
        ->nextBillingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastBillingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customerLocation->toBeNull()
        ->allocationRule->toBeNull()
        ->billingRule->toBeNull()
        ->branch->toBeNull()
        ->rateTable->toBeNull()
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
                'customer' => null,
                'hold' => true,
                'status' => 'String value',
                'template' => null,
                'description' => 'String value',
                'assets' => 42,
                'liability' => 42,
                'income' => 42,
                'expenses' => 42,
                'startDate' => '2025-11-22T10:40:04+00:00',
                'endDate' => '2025-11-22T10:40:04+00:00',
                'projectManager' => null,
                'restrictEmployees' => true,
                'restrictEquipment' => true,
                'visibility' => null,
                'defAccount' => null,
                'defSub' => null,
                'defAccrualAccount' => null,
                'defAccrualSub' => null,
                'billingPeriod' => 'String value',
                'nextBillingDate' => '2025-11-22T10:40:04+00:00',
                'lastBillingDate' => '2025-11-22T10:40:04+00:00',
                'customerLocation' => null,
                'allocationRule' => null,
                'billingRule' => null,
                'branch' => null,
                'rateTable' => null,
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
                'customer' => null,
                'hold' => true,
                'status' => 'String value',
                'template' => null,
                'description' => 'String value',
                'assets' => 42,
                'liability' => 42,
                'income' => 42,
                'expenses' => 42,
                'startDate' => '2025-11-22T10:40:04+00:00',
                'endDate' => '2025-11-22T10:40:04+00:00',
                'projectManager' => null,
                'restrictEmployees' => true,
                'restrictEquipment' => true,
                'visibility' => null,
                'defAccount' => null,
                'defSub' => null,
                'defAccrualAccount' => null,
                'defAccrualSub' => null,
                'billingPeriod' => 'String value',
                'nextBillingDate' => '2025-11-22T10:40:04+00:00',
                'lastBillingDate' => '2025-11-22T10:40:04+00:00',
                'customerLocation' => null,
                'allocationRule' => null,
                'billingRule' => null,
                'branch' => null,
                'rateTable' => null,
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
        ->customer->toBeNull()
        ->hold->toBe(true)
        ->status->toBe('String value')
        ->template->toBeNull()
        ->description->toBe('String value')
        ->assets->toBe(42)
        ->liability->toBe(42)
        ->income->toBe(42)
        ->expenses->toBe(42)
        ->startDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->endDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->projectManager->toBeNull()
        ->restrictEmployees->toBe(true)
        ->restrictEquipment->toBe(true)
        ->visibility->toBeNull()
        ->defAccount->toBeNull()
        ->defSub->toBeNull()
        ->defAccrualAccount->toBeNull()
        ->defAccrualSub->toBeNull()
        ->billingPeriod->toBe('String value')
        ->nextBillingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastBillingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customerLocation->toBeNull()
        ->allocationRule->toBeNull()
        ->billingRule->toBeNull()
        ->branch->toBeNull()
        ->rateTable->toBeNull()
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
        description: null,
        hold: true,
        template: 'String value',
        status: 'String value',
        defAccount: 'String value',
        defSub: [],
        defAccrualAccount: 'String value',
        defAccrualSub: [],
        startDate: null,
        endDate: '2025-11-22T10:40:04+00:00',
        billingPeriod: 'String value',
        allocationRule: 'String value',
        billingRule: 'String value',
        branch: null,
        rateTable: 'String value',
        projectManger: 'String value',
        projectManagerInternalId: 42,
        autoAllocate: true,
        automaticReleaseArDoc: true,
        restricEmployees: true,
        restricEquipment: true,
        customerLocation: 'String value',
        visibility: null,
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
                'defAccount' => null,
                'defSub' => null,
                'defAccrualAccount' => null,
                'defAccrualSub' => null,
                'taxCategory' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'taskId' => 'mock-id-123',
                'description' => 'String value',
                'plannedStart' => '2025-11-22T10:40:04+00:00',
                'plannedEnd' => '2025-11-22T10:40:04+00:00',
                'startDate' => '2025-11-22T10:40:04+00:00',
                'endDate' => '2025-11-22T10:40:04+00:00',
                'branch' => null,
                'rateTable' => null,
                'status' => 'String value',
                'restrictEmployees' => true,
                'visibility' => null,
                'timeStamp' => 'String value',
                'employees' => [],
                'attributes' => [],
            ],
            1 => [
                'internalId' => 42,
                'projectInternalId' => 42,
                'defAccount' => null,
                'defSub' => null,
                'defAccrualAccount' => null,
                'defAccrualSub' => null,
                'taxCategory' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'taskId' => 'mock-id-123',
                'description' => 'String value',
                'plannedStart' => '2025-11-22T10:40:04+00:00',
                'plannedEnd' => '2025-11-22T10:40:04+00:00',
                'startDate' => '2025-11-22T10:40:04+00:00',
                'endDate' => '2025-11-22T10:40:04+00:00',
                'branch' => null,
                'rateTable' => null,
                'status' => 'String value',
                'restrictEmployees' => true,
                'visibility' => null,
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
        ->defAccount->toBeNull()
        ->defSub->toBeNull()
        ->defAccrualAccount->toBeNull()
        ->defAccrualSub->toBeNull()
        ->taxCategory->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->taskId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->plannedStart->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->plannedEnd->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->startDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->endDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branch->toBeNull()
        ->rateTable->toBeNull()
        ->status->toBe('String value')
        ->restrictEmployees->toBe(true)
        ->visibility->toBeNull()
        ->timeStamp->toBe('String value');
});

it('calls the projectChangeProjectIdactionByinternalIdRequest method in the Project resource', function () {
    $bodyData = new ProjectUpdateDto(
        projectId: 'mock-id-123',
        internalId: 42,
        customer: 'String value',
        description: null,
        hold: true,
        template: 'String value',
        status: 'String value',
        defAccount: 'String value',
        defSub: [],
        defAccrualAccount: 'String value',
        defAccrualSub: [],
        startDate: null,
        endDate: '2025-11-22T10:40:04+00:00',
        billingPeriod: 'String value',
        allocationRule: 'String value',
        billingRule: 'String value',
        branch: null,
        rateTable: 'String value',
        projectManger: 'String value',
        projectManagerInternalId: 42,
        autoAllocate: true,
        automaticReleaseArDoc: true,
        restricEmployees: true,
        restricEquipment: true,
        customerLocation: 'String value',
        visibility: null,
        tasks: [],
        employees: [],
        note: 'String value'
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
        description: null,
        hold: true,
        template: 'String value',
        status: 'String value',
        defAccount: 'String value',
        defSub: [],
        defAccrualAccount: 'String value',
        defAccrualSub: [],
        startDate: null,
        endDate: '2025-11-22T10:40:04+00:00',
        billingPeriod: 'String value',
        allocationRule: 'String value',
        billingRule: 'String value',
        branch: null,
        rateTable: 'String value',
        projectManger: 'String value',
        projectManagerInternalId: 42,
        autoAllocate: true,
        automaticReleaseArDoc: true,
        restricEmployees: true,
        restricEquipment: true,
        customerLocation: 'String value',
        visibility: null,
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
        description: null,
        hold: true,
        template: 'String value',
        status: 'String value',
        defAccount: 'String value',
        defSub: [],
        defAccrualAccount: 'String value',
        defAccrualSub: [],
        startDate: null,
        endDate: '2025-11-22T10:40:04+00:00',
        billingPeriod: 'String value',
        allocationRule: 'String value',
        billingRule: 'String value',
        branch: null,
        rateTable: 'String value',
        projectManger: 'String value',
        projectManagerInternalId: 42,
        autoAllocate: true,
        automaticReleaseArDoc: true,
        restricEmployees: true,
        restricEquipment: true,
        customerLocation: 'String value',
        visibility: null,
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
