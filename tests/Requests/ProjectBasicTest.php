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
            0 => [
                'internalId' => 42,
                'projectId' => 'mock-id-123',
                'customer' => null,
                'hold' => true,
                'status' => 'String value',
                'description' => 'String value',
                'startDate' => '2025-11-22T10:40:04.065Z',
                'endDate' => '2025-11-22T10:40:04.065Z',
                'autoAllocate' => true,
                'automaticReleaseAr' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'publicId' => 'mock-id-123',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'visibility' => null,
                'errorInfo' => 'String value',
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
                'description' => 'String value',
                'startDate' => '2025-11-22T10:40:04.065Z',
                'endDate' => '2025-11-22T10:40:04.065Z',
                'autoAllocate' => true,
                'automaticReleaseAr' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'publicId' => 'mock-id-123',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'visibility' => null,
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new ProjectBasicGetAllCollectionRequest(status: 'test string', description: 'test string', projectId: 'test string', startDate: 'test string', nonProject: true, projectIdDesc: 'test string', publicId: 'test string', restrictedEmployee: 'test string', restrictedUser: 123, visibleInAp: true, visibleInAr: true, visibleInCa: true, visibleInCr: true, visibleInEa: true, visibleInGl: true, visibleInIn: true, visibleInPo: true, visibleInSo: true, visibleInTa: true, numberToRead: 123, skipRecords: 123, greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (ProjectBasicGetAllCollectionRequest $request) {
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
        ->description->toBe('String value')
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->autoAllocate->toBeTrue()
        ->automaticReleaseAr->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->publicId->toBe('mock-id-123')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->visibility->toBeNull()
        ->errorInfo->toBe('String value');
});
