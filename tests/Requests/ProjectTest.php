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
            'data' => [
                'type' => 'projects',
                'id' => 'mock-id-123',
                'attributes' => [
                    'internalId' => 42,
                    'projectId' => 'mock-id-123',
                    'customer' => 'Mock value',
                    'hold' => true,
                    'status' => 'Mock value',
                    'template' => 'Mock value',
                    'description' => 'Mock value',
                    'assets' => 3.14,
                    'liability' => 3.14,
                    'income' => 3.14,
                    'expenses' => 3.14,
                    'startDate' => '2025-11-22T10:40:04.065Z',
                    'endDate' => '2025-11-22T10:40:04.065Z',
                    'projectManager' => 'Mock value',
                    'restrictEmployees' => true,
                    'restrictEquipment' => true,
                    'visibility' => 'Mock value',
                    'defAccount' => 'Mock value',
                    'defSub' => 'Mock value',
                    'defAccrualAccount' => 'Mock value',
                    'defAccrualSub' => 'Mock value',
                    'billingPeriod' => 'Mock value',
                    'nextBillingDate' => '2025-11-22T10:40:04.065Z',
                    'lastBillingDate' => '2025-11-22T10:40:04.065Z',
                    'customerLocation' => 'Mock value',
                    'allocationRule' => 'Mock value',
                    'billingRule' => 'Mock value',
                    'branch' => 'Mock value',
                    'rateTable' => 'Mock value',
                    'autoAllocate' => true,
                    'automaticReleaseAr' => true,
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'tasks' => [],
                    'employees' => [],
                    'publicId' => 'mock-id-123',
                    'systemTemplate' => true,
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'attributes' => [],
                    'note' => 'Mock value',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
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
        ->customer->toBe('Mock value')
        ->hold->toBe(true)
        ->status->toBe('Mock value')
        ->template->toBe('Mock value')
        ->description->toBe('Mock value')
        ->assets->toBe(3.14)
        ->liability->toBe(3.14)
        ->income->toBe(3.14)
        ->expenses->toBe(3.14)
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->projectManager->toBe('Mock value')
        ->restrictEmployees->toBe(true)
        ->restrictEquipment->toBe(true)
        ->visibility->toBe('Mock value')
        ->defAccount->toBe('Mock value')
        ->defSub->toBe('Mock value')
        ->defAccrualAccount->toBe('Mock value')
        ->defAccrualSub->toBe('Mock value')
        ->billingPeriod->toBe('Mock value')
        ->nextBillingDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastBillingDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerLocation->toBe('Mock value')
        ->allocationRule->toBe('Mock value')
        ->billingRule->toBe('Mock value')
        ->branch->toBe('Mock value')
        ->rateTable->toBe('Mock value')
        ->autoAllocate->toBe(true)
        ->automaticReleaseAr->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->publicId->toBe('mock-id-123')
        ->systemTemplate->toBe(true)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the projectGetByinternalId method in the Project resource', function () {
    Saloon::fake([
        ProjectGetByinternalIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'projects',
                'id' => 'mock-id-123',
                'attributes' => [
                    'internalId' => 42,
                    'projectId' => 'mock-id-123',
                    'customer' => 'Mock value',
                    'hold' => true,
                    'status' => 'Mock value',
                    'template' => 'Mock value',
                    'description' => 'Mock value',
                    'assets' => 3.14,
                    'liability' => 3.14,
                    'income' => 3.14,
                    'expenses' => 3.14,
                    'startDate' => '2025-11-22T10:40:04.065Z',
                    'endDate' => '2025-11-22T10:40:04.065Z',
                    'projectManager' => 'Mock value',
                    'restrictEmployees' => true,
                    'restrictEquipment' => true,
                    'visibility' => 'Mock value',
                    'defAccount' => 'Mock value',
                    'defSub' => 'Mock value',
                    'defAccrualAccount' => 'Mock value',
                    'defAccrualSub' => 'Mock value',
                    'billingPeriod' => 'Mock value',
                    'nextBillingDate' => '2025-11-22T10:40:04.065Z',
                    'lastBillingDate' => '2025-11-22T10:40:04.065Z',
                    'customerLocation' => 'Mock value',
                    'allocationRule' => 'Mock value',
                    'billingRule' => 'Mock value',
                    'branch' => 'Mock value',
                    'rateTable' => 'Mock value',
                    'autoAllocate' => true,
                    'automaticReleaseAr' => true,
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'tasks' => [],
                    'employees' => [],
                    'publicId' => 'mock-id-123',
                    'systemTemplate' => true,
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'attributes' => [],
                    'note' => 'Mock value',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
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
        ->customer->toBe('Mock value')
        ->hold->toBe(true)
        ->status->toBe('Mock value')
        ->template->toBe('Mock value')
        ->description->toBe('Mock value')
        ->assets->toBe(3.14)
        ->liability->toBe(3.14)
        ->income->toBe(3.14)
        ->expenses->toBe(3.14)
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->projectManager->toBe('Mock value')
        ->restrictEmployees->toBe(true)
        ->restrictEquipment->toBe(true)
        ->visibility->toBe('Mock value')
        ->defAccount->toBe('Mock value')
        ->defSub->toBe('Mock value')
        ->defAccrualAccount->toBe('Mock value')
        ->defAccrualSub->toBe('Mock value')
        ->billingPeriod->toBe('Mock value')
        ->nextBillingDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastBillingDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerLocation->toBe('Mock value')
        ->allocationRule->toBe('Mock value')
        ->billingRule->toBe('Mock value')
        ->branch->toBe('Mock value')
        ->rateTable->toBe('Mock value')
        ->autoAllocate->toBe(true)
        ->automaticReleaseAr->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->publicId->toBe('mock-id-123')
        ->systemTemplate->toBe(true)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the projectGetAllCollection method in the Project resource', function () {
    Saloon::fake([
        ProjectGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'projects',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'internalId' => 42,
                        'projectId' => 'mock-id-123',
                        'customer' => 'Mock value',
                        'hold' => true,
                        'status' => 'Mock value',
                        'template' => 'Mock value',
                        'description' => 'Mock value',
                        'assets' => 3.14,
                        'liability' => 3.14,
                        'income' => 3.14,
                        'expenses' => 3.14,
                        'startDate' => '2025-11-22T10:40:04.065Z',
                        'endDate' => '2025-11-22T10:40:04.065Z',
                        'projectManager' => 'Mock value',
                        'restrictEmployees' => true,
                        'restrictEquipment' => true,
                        'visibility' => 'Mock value',
                        'defAccount' => 'Mock value',
                        'defSub' => 'Mock value',
                        'defAccrualAccount' => 'Mock value',
                        'defAccrualSub' => 'Mock value',
                        'billingPeriod' => 'Mock value',
                        'nextBillingDate' => '2025-11-22T10:40:04.065Z',
                        'lastBillingDate' => '2025-11-22T10:40:04.065Z',
                        'customerLocation' => 'Mock value',
                        'allocationRule' => 'Mock value',
                        'billingRule' => 'Mock value',
                        'branch' => 'Mock value',
                        'rateTable' => 'Mock value',
                        'autoAllocate' => true,
                        'automaticReleaseAr' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'tasks' => [],
                        'employees' => [],
                        'publicId' => 'mock-id-123',
                        'systemTemplate' => true,
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'attributes' => [],
                        'note' => 'Mock value',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'projects',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'internalId' => 42,
                        'projectId' => 'mock-id-123',
                        'customer' => 'Mock value',
                        'hold' => true,
                        'status' => 'Mock value',
                        'template' => 'Mock value',
                        'description' => 'Mock value',
                        'assets' => 3.14,
                        'liability' => 3.14,
                        'income' => 3.14,
                        'expenses' => 3.14,
                        'startDate' => '2025-11-22T10:40:04.065Z',
                        'endDate' => '2025-11-22T10:40:04.065Z',
                        'projectManager' => 'Mock value',
                        'restrictEmployees' => true,
                        'restrictEquipment' => true,
                        'visibility' => 'Mock value',
                        'defAccount' => 'Mock value',
                        'defSub' => 'Mock value',
                        'defAccrualAccount' => 'Mock value',
                        'defAccrualSub' => 'Mock value',
                        'billingPeriod' => 'Mock value',
                        'nextBillingDate' => '2025-11-22T10:40:04.065Z',
                        'lastBillingDate' => '2025-11-22T10:40:04.065Z',
                        'customerLocation' => 'Mock value',
                        'allocationRule' => 'Mock value',
                        'billingRule' => 'Mock value',
                        'branch' => 'Mock value',
                        'rateTable' => 'Mock value',
                        'autoAllocate' => true,
                        'automaticReleaseAr' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'tasks' => [],
                        'employees' => [],
                        'publicId' => 'mock-id-123',
                        'systemTemplate' => true,
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'attributes' => [],
                        'note' => 'Mock value',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new ProjectGetAllCollectionRequest(status: 'test string', systemTemplate: true, visibleInAp: true, startDate: 'test string', expandAttribute: true, attributes: 'test string', taskStatus: 'test string', taskVisibleInAp: true, taskVisibleInAr: true, taskVisibleInCa: true, taskVisibleInCr: true, taskVisibleInEa: true, taskVisibleInGl: true, taskVisibleInIn: true, taskVisibleInPo: true, taskVisibleInSo: true, taskVisibleInTa: true, nonProject: true, publicId: 'test string', restrictedEmployee: 'test string', restrictedUser: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', branch: 'test string', onHold: true, pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (ProjectGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->internalId->toBe(42)
        ->projectId->toBe('mock-id-123')
        ->customer->toBe('Mock value')
        ->hold->toBe(true)
        ->status->toBe('Mock value')
        ->template->toBe('Mock value')
        ->description->toBe('Mock value')
        ->assets->toBe(3.14)
        ->liability->toBe(3.14)
        ->income->toBe(3.14)
        ->expenses->toBe(3.14)
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->projectManager->toBe('Mock value')
        ->restrictEmployees->toBe(true)
        ->restrictEquipment->toBe(true)
        ->visibility->toBe('Mock value')
        ->defAccount->toBe('Mock value')
        ->defSub->toBe('Mock value')
        ->defAccrualAccount->toBe('Mock value')
        ->defAccrualSub->toBe('Mock value')
        ->billingPeriod->toBe('Mock value')
        ->nextBillingDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastBillingDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerLocation->toBe('Mock value')
        ->allocationRule->toBe('Mock value')
        ->billingRule->toBe('Mock value')
        ->branch->toBe('Mock value')
        ->rateTable->toBe('Mock value')
        ->autoAllocate->toBe(true)
        ->automaticReleaseAr->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->publicId->toBe('mock-id-123')
        ->systemTemplate->toBe(true)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the projectGetTasksCollection method in the Project resource', function () {
    Saloon::fake([
        ProjectGetTasksCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'projects',
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
                    'type' => 'projects',
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

    $request = (new ProjectGetTasksCollectionRequest(projectId: 'test string', publicId: 'test string', projectInternalId: 123, description: 'test string', taskCd: 'test string', taskCdDesc: 'test string', status: 'test string', expandAttribute: true, visibleInAp: true, visibleInAr: true, visibleInCa: true, visibleInCr: true, visibleInEa: true, visibleInGl: true, visibleInIn: true, visibleInPo: true, visibleInSo: true, visibleInTa: true, restrictedEmployee: 'test string', restrictedUser: 123, greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (ProjectGetTasksCollectionRequest $request) {
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
