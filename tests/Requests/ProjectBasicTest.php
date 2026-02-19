<?php

use Pionect\VismaSdk\Enums\TemplateNumberDescriptionStatusEnum;
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
                'customer' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'hold' => true,
                'status' => 'Planned',
                'description' => 'String value',
                'startDate' => '2025-11-22T10:40:04+00:00',
                'endDate' => '2025-11-22T10:40:04+00:00',
                'autoAllocate' => true,
                'automaticReleaseAr' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'publicId' => 'mock-id-123',
                'timeStamp' => 'String value',
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
                'status' => 'Planned',
                'description' => 'String value',
                'startDate' => '2025-11-22T10:40:04+00:00',
                'endDate' => '2025-11-22T10:40:04+00:00',
                'autoAllocate' => true,
                'automaticReleaseAr' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'publicId' => 'mock-id-123',
                'timeStamp' => 'String value',
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

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->internalId->toBe(42)
        ->projectId->toBe('mock-id-123')
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->hold->toBe(true)
        ->status->toEqual(TemplateNumberDescriptionStatusEnum::PLANNED)
        ->description->toBe('String value')
        ->startDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->endDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->autoAllocate->toBe(true)
        ->automaticReleaseAr->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->publicId->toBe('mock-id-123')
        ->timeStamp->toBe('String value')
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
        ->errorInfo->toBe('String value');
});
