<?php

use Pionect\VismaSdk\Dto\ProjectTaskUpdateDto;
use Pionect\VismaSdk\Requests\ProjectTask\ProjectTaskGetAllTasksRequest;
use Pionect\VismaSdk\Requests\ProjectTask\ProjectTaskGetTaskByinternalIdRequest;
use Pionect\VismaSdk\Requests\ProjectTask\ProjectTaskPostByinternalIdRequest;
use Pionect\VismaSdk\Requests\ProjectTask\ProjectTaskPutByinternalIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the projectTaskGetTaskByinternalIdRequest method in the ProjectTask resource', function () {
    Saloon::fake([
        ProjectTaskGetTaskByinternalIdRequest::class => MockResponse::make([
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
        ], 200),
    ]);

    $request = new ProjectTaskGetTaskByinternalIdRequest(
        internalId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectTaskGetTaskByinternalIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
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

it('calls the projectTaskPutByinternalIdRequest method in the ProjectTask resource', function () {
    $bodyData = new ProjectTaskUpdateDto(
        taskId: 'mock-id-123',
        description: 'String value',
        plannedStart: '2025-11-22T10:40:04+00:00',
        plannedEnd: '2025-11-22T10:40:04+00:00',
        startDate: '2025-11-22T10:40:04+00:00',
        rateTable: 'String value',
        status: 'String value',
        visibility: null,
        restrictEmployees: true,
        employees: []
    );

    Saloon::fake([
        ProjectTaskPutByinternalIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ProjectTaskPutByinternalIdRequest(
        internalId: 123,
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectTaskPutByinternalIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the projectTaskPostByinternalIdRequest method in the ProjectTask resource', function () {
    $bodyData = new ProjectTaskUpdateDto(
        taskId: 'mock-id-123',
        description: 'String value',
        plannedStart: '2025-11-22T10:40:04+00:00',
        plannedEnd: '2025-11-22T10:40:04+00:00',
        startDate: '2025-11-22T10:40:04+00:00',
        rateTable: 'String value',
        status: 'String value',
        visibility: null,
        restrictEmployees: true,
        employees: []
    );

    Saloon::fake([
        ProjectTaskPostByinternalIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ProjectTaskPostByinternalIdRequest(
        internalId: 123,
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectTaskPostByinternalIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the projectTaskGetAllTasksRequest method in the ProjectTask resource', function () {
    Saloon::fake([
        ProjectTaskGetAllTasksRequest::class => MockResponse::make([
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

    $request = new ProjectTaskGetAllTasksRequest(
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

    Saloon::assertSent(ProjectTaskGetAllTasksRequest::class);

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
