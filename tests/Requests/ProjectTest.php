<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Project\ProjectChangeProjectIdactionByinternalIdRequest;
use Pionect\VismaSdk\Requests\Project\ProjectGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\Project\ProjectGetByinternalIdRequest;
use Pionect\VismaSdk\Requests\Project\ProjectGetByprojectIdRequest;
use Pionect\VismaSdk\Requests\Project\ProjectGetTasksCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the projectGetByprojectId method in the Project resource', function () {
    Saloon::fake([
        ProjectGetByprojectIdRequest::class => MockResponse::make([
            'internalId' => 42,
            'projectId' => 'mock-id-123',
            'customer' => null,
            'hold' => true,
            'status' => 'String value',
            'template' => null,
            'description' => 'String value',
            'assets' => 3.14,
            'liability' => 3.14,
            'income' => 3.14,
            'expenses' => 3.14,
            'startDate' => '2025-11-22T10:40:04.065Z',
            'endDate' => '2025-11-22T10:40:04.065Z',
            'projectManager' => null,
            'restrictEmployees' => true,
            'restrictEquipment' => true,
            'visibility' => null,
            'defAccount' => null,
            'defSub' => null,
            'defAccrualAccount' => null,
            'defAccrualSub' => null,
            'billingPeriod' => 'String value',
            'nextBillingDate' => '2025-11-22T10:40:04.065Z',
            'lastBillingDate' => '2025-11-22T10:40:04.065Z',
            'customerLocation' => null,
            'allocationRule' => null,
            'billingRule' => null,
            'branch' => null,
            'rateTable' => null,
            'autoAllocate' => true,
            'automaticReleaseAr' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'tasks' => [],
            'employees' => [],
            'publicId' => 'mock-id-123',
            'systemTemplate' => true,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'attributes' => [],
            'note' => 'String value',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new ProjectGetByprojectIdRequest(
        projectIdId: 'test string',
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
        ->hold->toBeTrue()
        ->status->toBe('String value')
        ->template->toBeNull()
        ->description->toBe('String value')
        ->assets->toBe(3.14)
        ->liability->toBe(3.14)
        ->income->toBe(3.14)
        ->expenses->toBe(3.14)
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->projectManager->toBeNull()
        ->restrictEmployees->toBeTrue()
        ->restrictEquipment->toBeTrue()
        ->visibility->toBeNull()
        ->defAccount->toBeNull()
        ->defSub->toBeNull()
        ->defAccrualAccount->toBeNull()
        ->defAccrualSub->toBeNull()
        ->billingPeriod->toBe('String value')
        ->nextBillingDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastBillingDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerLocation->toBeNull()
        ->allocationRule->toBeNull()
        ->billingRule->toBeNull()
        ->branch->toBeNull()
        ->rateTable->toBeNull()
        ->autoAllocate->toBeTrue()
        ->automaticReleaseAr->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->publicId->toBe('mock-id-123')
        ->systemTemplate->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('String value')
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the projectGetByinternalId method in the Project resource', function () {
    Saloon::fake([
        ProjectGetByinternalIdRequest::class => MockResponse::make([
            'internalId' => 42,
            'projectId' => 'mock-id-123',
            'customer' => null,
            'hold' => true,
            'status' => 'String value',
            'template' => null,
            'description' => 'String value',
            'assets' => 3.14,
            'liability' => 3.14,
            'income' => 3.14,
            'expenses' => 3.14,
            'startDate' => '2025-11-22T10:40:04.065Z',
            'endDate' => '2025-11-22T10:40:04.065Z',
            'projectManager' => null,
            'restrictEmployees' => true,
            'restrictEquipment' => true,
            'visibility' => null,
            'defAccount' => null,
            'defSub' => null,
            'defAccrualAccount' => null,
            'defAccrualSub' => null,
            'billingPeriod' => 'String value',
            'nextBillingDate' => '2025-11-22T10:40:04.065Z',
            'lastBillingDate' => '2025-11-22T10:40:04.065Z',
            'customerLocation' => null,
            'allocationRule' => null,
            'billingRule' => null,
            'branch' => null,
            'rateTable' => null,
            'autoAllocate' => true,
            'automaticReleaseAr' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'tasks' => [],
            'employees' => [],
            'publicId' => 'mock-id-123',
            'systemTemplate' => true,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'attributes' => [],
            'note' => 'String value',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new ProjectGetByinternalIdRequest(
        internalIdId: 123,
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
        ->hold->toBeTrue()
        ->status->toBe('String value')
        ->template->toBeNull()
        ->description->toBe('String value')
        ->assets->toBe(3.14)
        ->liability->toBe(3.14)
        ->income->toBe(3.14)
        ->expenses->toBe(3.14)
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->projectManager->toBeNull()
        ->restrictEmployees->toBeTrue()
        ->restrictEquipment->toBeTrue()
        ->visibility->toBeNull()
        ->defAccount->toBeNull()
        ->defSub->toBeNull()
        ->defAccrualAccount->toBeNull()
        ->defAccrualSub->toBeNull()
        ->billingPeriod->toBe('String value')
        ->nextBillingDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastBillingDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerLocation->toBeNull()
        ->allocationRule->toBeNull()
        ->billingRule->toBeNull()
        ->branch->toBeNull()
        ->rateTable->toBeNull()
        ->autoAllocate->toBeTrue()
        ->automaticReleaseAr->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->publicId->toBe('mock-id-123')
        ->systemTemplate->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('String value')
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the projectGetAllCollection method in the Project resource', function () {
    Saloon::fake([
        ProjectGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'internalId' => 42,
                'projectId' => 'mock-id-123',
                'customer' => null,
                'hold' => true,
                'status' => 'String value',
                'template' => null,
                'description' => 'String value',
                'assets' => 3.14,
                'liability' => 3.14,
                'income' => 3.14,
                'expenses' => 3.14,
                'startDate' => '2025-11-22T10:40:04.065Z',
                'endDate' => '2025-11-22T10:40:04.065Z',
                'projectManager' => null,
                'restrictEmployees' => true,
                'restrictEquipment' => true,
                'visibility' => null,
                'defAccount' => null,
                'defSub' => null,
                'defAccrualAccount' => null,
                'defAccrualSub' => null,
                'billingPeriod' => 'String value',
                'nextBillingDate' => '2025-11-22T10:40:04.065Z',
                'lastBillingDate' => '2025-11-22T10:40:04.065Z',
                'customerLocation' => null,
                'allocationRule' => null,
                'billingRule' => null,
                'branch' => null,
                'rateTable' => null,
                'autoAllocate' => true,
                'automaticReleaseAr' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'tasks' => [],
                'employees' => [],
                'publicId' => 'mock-id-123',
                'systemTemplate' => true,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'attributes' => [],
                'note' => 'String value',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'internalId' => 42,
                'projectId' => 'mock-id-123',
                'customer' => null,
                'hold' => true,
                'status' => 'String value',
                'template' => null,
                'description' => 'String value',
                'assets' => 3.14,
                'liability' => 3.14,
                'income' => 3.14,
                'expenses' => 3.14,
                'startDate' => '2025-11-22T10:40:04.065Z',
                'endDate' => '2025-11-22T10:40:04.065Z',
                'projectManager' => null,
                'restrictEmployees' => true,
                'restrictEquipment' => true,
                'visibility' => null,
                'defAccount' => null,
                'defSub' => null,
                'defAccrualAccount' => null,
                'defAccrualSub' => null,
                'billingPeriod' => 'String value',
                'nextBillingDate' => '2025-11-22T10:40:04.065Z',
                'lastBillingDate' => '2025-11-22T10:40:04.065Z',
                'customerLocation' => null,
                'allocationRule' => null,
                'billingRule' => null,
                'branch' => null,
                'rateTable' => null,
                'autoAllocate' => true,
                'automaticReleaseAr' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'tasks' => [],
                'employees' => [],
                'publicId' => 'mock-id-123',
                'systemTemplate' => true,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'attributes' => [],
                'note' => 'String value',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new ProjectGetAllCollectionRequest(status: 'test string', systemTemplate: true, visibleInAp: true, startDate: 'test string', expandAttribute: true, attributes: 'test string', taskStatus: 'test string', taskVisibleInAp: true, taskVisibleInAr: true, taskVisibleInCa: true, taskVisibleInCr: true, taskVisibleInEa: true, taskVisibleInGl: true, taskVisibleInIn: true, taskVisibleInPo: true, taskVisibleInSo: true, taskVisibleInTa: true, nonProject: true, publicId: 'test string', restrictedEmployee: 'test string', restrictedUser: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', branch: 'test string', onHold: true, pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (ProjectGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->internalId->toBe(42)
        ->projectId->toBe('mock-id-123')
        ->customer->toBeNull()
        ->hold->toBeTrue()
        ->status->toBe('String value')
        ->template->toBeNull()
        ->description->toBe('String value')
        ->assets->toBe(3.14)
        ->liability->toBe(3.14)
        ->income->toBe(3.14)
        ->expenses->toBe(3.14)
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->projectManager->toBeNull()
        ->restrictEmployees->toBeTrue()
        ->restrictEquipment->toBeTrue()
        ->visibility->toBeNull()
        ->defAccount->toBeNull()
        ->defSub->toBeNull()
        ->defAccrualAccount->toBeNull()
        ->defAccrualSub->toBeNull()
        ->billingPeriod->toBe('String value')
        ->nextBillingDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastBillingDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerLocation->toBeNull()
        ->allocationRule->toBeNull()
        ->billingRule->toBeNull()
        ->branch->toBeNull()
        ->rateTable->toBeNull()
        ->autoAllocate->toBeTrue()
        ->automaticReleaseAr->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->publicId->toBe('mock-id-123')
        ->systemTemplate->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('String value')
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the projectGetTasksCollection method in the Project resource', function () {
    Saloon::fake([
        ProjectGetTasksCollectionRequest::class => MockResponse::make([
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
                'id' => 'mock-id-123',
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
                'id' => 'mock-id-123',
            ],
        ], 200),
    ]);

    $request = (new ProjectGetTasksCollectionRequest(projectId: 'test string', publicId: 'test string', projectInternalId: 123, description: 'test string', taskCd: 'test string', taskCdDesc: 'test string', status: 'test string', expandAttribute: true, visibleInAp: true, visibleInAr: true, visibleInCa: true, visibleInCr: true, visibleInEa: true, visibleInGl: true, visibleInIn: true, visibleInPo: true, visibleInSo: true, visibleInTa: true, restrictedEmployee: 'test string', restrictedUser: 123, greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (ProjectGetTasksCollectionRequest $request) {
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
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->id->toBe('mock-id-123');
});

it('calls the projectChangeProjectIdactionByinternalId method in the Project resource', function () {
    $mockClient = Saloon::fake([
        ProjectChangeProjectIdactionByinternalIdRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ChangeProjectIdActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new ProjectChangeProjectIdactionByinternalIdRequest(internalId: 42, data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectChangeProjectIdactionByinternalIdRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('projects')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
