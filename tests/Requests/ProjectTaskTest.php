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
            'internalId' => 42,
            'projectInternalId' => 42,
            'defAccount' => null,
            'defSub' => null,
            'defAccrualAccount' => null,
            'defAccrualSub' => null,
            'taxCategory' => null,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'taskId' => 'mock-id-123',
            'description' => 'String value',
            'plannedStart' => '2025-11-22T10:40:04.065Z',
            'plannedEnd' => '2025-11-22T10:40:04.065Z',
            'startDate' => '2025-11-22T10:40:04.065Z',
            'endDate' => '2025-11-22T10:40:04.065Z',
            'branch' => null,
            'rateTable' => null,
            'status' => 'String value',
            'restrictEmployees' => true,
            'visibility' => null,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'employees' => [],
            'attributes' => [],
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
        ->defAccount->toBeNull()
        ->defSub->toBeNull()
        ->defAccrualAccount->toBeNull()
        ->defAccrualSub->toBeNull()
        ->taxCategory->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->taskId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->plannedStart->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->plannedEnd->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branch->toBeNull()
        ->rateTable->toBeNull()
        ->status->toBe('String value')
        ->restrictEmployees->toBeTrue()
        ->visibility->toBeNull()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the projectTaskGetAllTasksCollection method in the ProjectTask resource', function () {
    Saloon::fake([
        ProjectTaskGetAllTasksCollectionRequest::class => MockResponse::make([
            0 => [
                'internalId' => 42,
                'projectInternalId' => 42,
                'defAccount' => null,
                'defSub' => null,
                'defAccrualAccount' => null,
                'defAccrualSub' => null,
                'taxCategory' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'taskId' => 'mock-id-123',
                'description' => 'String value',
                'plannedStart' => '2025-11-22T10:40:04.065Z',
                'plannedEnd' => '2025-11-22T10:40:04.065Z',
                'startDate' => '2025-11-22T10:40:04.065Z',
                'endDate' => '2025-11-22T10:40:04.065Z',
                'branch' => null,
                'rateTable' => null,
                'status' => 'String value',
                'restrictEmployees' => true,
                'visibility' => null,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
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
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'taskId' => 'mock-id-123',
                'description' => 'String value',
                'plannedStart' => '2025-11-22T10:40:04.065Z',
                'plannedEnd' => '2025-11-22T10:40:04.065Z',
                'startDate' => '2025-11-22T10:40:04.065Z',
                'endDate' => '2025-11-22T10:40:04.065Z',
                'branch' => null,
                'rateTable' => null,
                'status' => 'String value',
                'restrictEmployees' => true,
                'visibility' => null,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'employees' => [],
                'attributes' => [],
            ],
        ], 200),
    ]);

    $request = (new ProjectTaskGetAllTasksCollectionRequest(projectId: 'test string', publicId: 'test string', projectInternalId: 123, description: 'test string', taskCd: 'test string', taskCdDesc: 'test string', status: 'test string', expandAttribute: true, visibleInAp: true, visibleInAr: true, visibleInCa: true, visibleInCr: true, visibleInEa: true, visibleInGl: true, visibleInIn: true, visibleInPo: true, visibleInSo: true, visibleInTa: true, restrictedEmployee: 'test string', restrictedUser: 123, greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (ProjectTaskGetAllTasksCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->internalId->toBe(42)
        ->projectInternalId->toBe(42)
        ->defAccount->toBeNull()
        ->defSub->toBeNull()
        ->defAccrualAccount->toBeNull()
        ->defAccrualSub->toBeNull()
        ->taxCategory->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->taskId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->plannedStart->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->plannedEnd->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branch->toBeNull()
        ->rateTable->toBeNull()
        ->status->toBe('String value')
        ->restrictEmployees->toBeTrue()
        ->visibility->toBeNull()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});
