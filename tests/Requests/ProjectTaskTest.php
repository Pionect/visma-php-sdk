<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\ProjectTask\ProjectTaskGetAllTasksCollectionRequest;
use Pionect\VismaSdk\Requests\ProjectTask\ProjectTaskGetTaskByinternalIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the projectTaskGetTaskByinternalId method in the ProjectTask resource', function () {
    Saloon::fake([
        ProjectTaskGetTaskByinternalIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'projectTasks',
                'id' => 'mock-id-123',
                'attributes' => [
                    'internalId' => 42,
                    'projectInternalId' => 42,
                    'defAccount' => 'Mock value',
                    'defSub' => 'Mock value',
                    'defAccrualAccount' => 'Mock value',
                    'defAccrualSub' => 'Mock value',
                    'taxCategory' => 'Mock value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'createdDateTime' => '2025-11-22T10:40:04.065Z',
                    'taskId' => 'mock-id-123',
                    'description' => 'Mock value',
                    'plannedStart' => '2025-11-22T10:40:04.065Z',
                    'plannedEnd' => '2025-11-22T10:40:04.065Z',
                    'startDate' => '2025-11-22T10:40:04.065Z',
                    'endDate' => '2025-11-22T10:40:04.065Z',
                    'branch' => 'Mock value',
                    'rateTable' => 'Mock value',
                    'status' => 'Mock value',
                    'restrictEmployees' => true,
                    'visibility' => 'Mock value',
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'employees' => [],
                    'attributes' => [],
                ],
            ],
        ], 200),
    ]);

    $request = new ProjectTaskGetTaskByinternalIdRequest(
        internalIdId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectTaskGetTaskByinternalIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->internalId->toBe(42)
        ->projectInternalId->toBe(42)
        ->defAccount->toBe('Mock value')
        ->defSub->toBe('Mock value')
        ->defAccrualAccount->toBe('Mock value')
        ->defAccrualSub->toBe('Mock value')
        ->taxCategory->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->taskId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->plannedStart->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->plannedEnd->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branch->toBe('Mock value')
        ->rateTable->toBe('Mock value')
        ->status->toBe('Mock value')
        ->restrictEmployees->toBe(true)
        ->visibility->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the projectTaskGetAllTasksCollection method in the ProjectTask resource', function () {
    Saloon::fake([
        ProjectTaskGetAllTasksCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'projectTasks',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'internalId' => 42,
                        'projectInternalId' => 42,
                        'defAccount' => 'Mock value',
                        'defSub' => 'Mock value',
                        'defAccrualAccount' => 'Mock value',
                        'defAccrualSub' => 'Mock value',
                        'taxCategory' => 'Mock value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'createdDateTime' => '2025-11-22T10:40:04.065Z',
                        'taskId' => 'mock-id-123',
                        'description' => 'Mock value',
                        'plannedStart' => '2025-11-22T10:40:04.065Z',
                        'plannedEnd' => '2025-11-22T10:40:04.065Z',
                        'startDate' => '2025-11-22T10:40:04.065Z',
                        'endDate' => '2025-11-22T10:40:04.065Z',
                        'branch' => 'Mock value',
                        'rateTable' => 'Mock value',
                        'status' => 'Mock value',
                        'restrictEmployees' => true,
                        'visibility' => 'Mock value',
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'employees' => [],
                        'attributes' => [],
                    ],
                ],
                1 => [
                    'type' => 'projectTasks',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'internalId' => 42,
                        'projectInternalId' => 42,
                        'defAccount' => 'Mock value',
                        'defSub' => 'Mock value',
                        'defAccrualAccount' => 'Mock value',
                        'defAccrualSub' => 'Mock value',
                        'taxCategory' => 'Mock value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'createdDateTime' => '2025-11-22T10:40:04.065Z',
                        'taskId' => 'mock-id-123',
                        'description' => 'Mock value',
                        'plannedStart' => '2025-11-22T10:40:04.065Z',
                        'plannedEnd' => '2025-11-22T10:40:04.065Z',
                        'startDate' => '2025-11-22T10:40:04.065Z',
                        'endDate' => '2025-11-22T10:40:04.065Z',
                        'branch' => 'Mock value',
                        'rateTable' => 'Mock value',
                        'status' => 'Mock value',
                        'restrictEmployees' => true,
                        'visibility' => 'Mock value',
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'employees' => [],
                        'attributes' => [],
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new ProjectTaskGetAllTasksCollectionRequest(projectId: 'test string', publicId: 'test string', projectInternalId: 123, description: 'test string', taskCd: 'test string', taskCdDesc: 'test string', status: 'test string', expandAttribute: true, visibleInAp: true, visibleInAr: true, visibleInCa: true, visibleInCr: true, visibleInEa: true, visibleInGl: true, visibleInIn: true, visibleInPo: true, visibleInSo: true, visibleInTa: true, restrictedEmployee: 'test string', restrictedUser: 123, greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (ProjectTaskGetAllTasksCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->internalId->toBe(42)
        ->projectInternalId->toBe(42)
        ->defAccount->toBe('Mock value')
        ->defSub->toBe('Mock value')
        ->defAccrualAccount->toBe('Mock value')
        ->defAccrualSub->toBe('Mock value')
        ->taxCategory->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->taskId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->plannedStart->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->plannedEnd->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branch->toBe('Mock value')
        ->rateTable->toBe('Mock value')
        ->status->toBe('Mock value')
        ->restrictEmployees->toBe(true)
        ->visibility->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});
