<?php

// Generated 2026-01-30 15:19:40

use Pionect\VismaSdk\Requests\ProjectBasic\ProjectBasicGetAllRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the projectBasicGetAllRequest method in the ProjectBasic resource', function () {
    Saloon::fake([
        ProjectBasicGetAllRequest::class => MockResponse::make([
            0 => [
                'internalId' => 42,
                'projectId' => 'mock-id-123',
                'customer' => null,
                'hold' => true,
                'status' => 'String value',
                'description' => 'String value',
                'startDate' => '2025-11-22T10:40:04+00:00',
                'endDate' => '2025-11-22T10:40:04+00:00',
                'autoAllocate' => true,
                'automaticReleaseAr' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'publicId' => 'mock-id-123',
                'timeStamp' => 'String value',
                'visibility' => null,
                'errorInfo' => 'String value',
            ],
            1 => [
                'internalId' => 42,
                'projectId' => 'mock-id-123',
                'customer' => null,
                'hold' => true,
                'status' => 'String value',
                'description' => 'String value',
                'startDate' => '2025-11-22T10:40:04+00:00',
                'endDate' => '2025-11-22T10:40:04+00:00',
                'autoAllocate' => true,
                'automaticReleaseAr' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'publicId' => 'mock-id-123',
                'timeStamp' => 'String value',
                'visibility' => null,
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new ProjectBasicGetAllRequest(
        status: 'test string',
        description: 'test string',
        projectId: 'test string',
        startDate: 'test string',
        nonProject: true,
        projectIdDesc: 'test string',
        publicId: 'test string',
        restrictedEmployee: 'test string',
        restrictedUser: 123,
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
        numberToRead: 123,
        skipRecords: 123,
        greaterThanValue: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectBasicGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->internalId->toBe(42)
        ->projectId->toBe('mock-id-123')
        ->customer->toBeNull()
        ->hold->toBe(true)
        ->status->toBe('String value')
        ->description->toBe('String value')
        ->startDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->endDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->autoAllocate->toBe(true)
        ->automaticReleaseAr->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->publicId->toBe('mock-id-123')
        ->timeStamp->toBe('String value')
        ->visibility->toBeNull()
        ->errorInfo->toBe('String value');
});
