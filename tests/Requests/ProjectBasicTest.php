<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\ProjectBasic\ProjectBasicGetAllCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the projectBasicGetAllCollection method in the ProjectBasic resource', function () {
    Saloon::fake([
        ProjectBasicGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'projectBasics',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'internalId' => 42,
                        'projectId' => 'mock-id-123',
                        'customer' => 'Mock value',
                        'hold' => true,
                        'status' => 'Mock value',
                        'description' => 'Mock value',
                        'startDate' => '2025-11-22T10:40:04.065Z',
                        'endDate' => '2025-11-22T10:40:04.065Z',
                        'autoAllocate' => true,
                        'automaticReleaseAr' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'publicId' => 'mock-id-123',
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'visibility' => 'Mock value',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'projectBasics',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'internalId' => 42,
                        'projectId' => 'mock-id-123',
                        'customer' => 'Mock value',
                        'hold' => true,
                        'status' => 'Mock value',
                        'description' => 'Mock value',
                        'startDate' => '2025-11-22T10:40:04.065Z',
                        'endDate' => '2025-11-22T10:40:04.065Z',
                        'autoAllocate' => true,
                        'automaticReleaseAr' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'publicId' => 'mock-id-123',
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'visibility' => 'Mock value',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new ProjectBasicGetAllCollectionRequest(status: 'test string', description: 'test string', projectId: 'test string', startDate: 'test string', nonProject: true, projectIdDesc: 'test string', publicId: 'test string', restrictedEmployee: 'test string', restrictedUser: 123, visibleInAp: true, visibleInAr: true, visibleInCa: true, visibleInCr: true, visibleInEa: true, visibleInGl: true, visibleInIn: true, visibleInPo: true, visibleInSo: true, visibleInTa: true, numberToRead: 123, skipRecords: 123, greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (ProjectBasicGetAllCollectionRequest $request) {
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
        ->description->toBe('Mock value')
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->autoAllocate->toBe(true)
        ->automaticReleaseAr->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->publicId->toBe('mock-id-123')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->visibility->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
