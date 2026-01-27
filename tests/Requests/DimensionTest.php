<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Dimension\DimensionGetDimensionBydimensionIdRequest;
use Pionect\VismaSdk\Requests\Dimension\DimensionGetSegmentBydimensionIdsegmentIdRequest;
use Pionect\VismaSdk\Requests\Dimension\DimensionGetSegmentValueBydimensionIdsegmentIdpublicIdRequest;
use Pionect\VismaSdk\Requests\Dimension\DimensionGetSegmentValueBydimensionIdsegmentIdvalueIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the dimensionGetDimensionBydimensionId method in the Dimension resource', function () {
    Saloon::fake([
        DimensionGetDimensionBydimensionIdRequest::class => MockResponse::make([
            'length' => 42,
            'description' => 'String value',
            'segments' => [],
        ], 200),
    ]);

    $request = new DimensionGetDimensionBydimensionIdRequest(
        dimensionIdId: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        expandSegmentsValues: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DimensionGetDimensionBydimensionIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->length->toBe(42)
        ->description->toBe('String value');
});

it('calls the dimensionGetSegmentBydimensionIdsegmentId method in the Dimension resource', function () {
    Saloon::fake([
        DimensionGetSegmentBydimensionIdsegmentIdRequest::class => MockResponse::make([
            'internalId' => 'mock-id-123',
            'segmentId' => 42,
            'description' => 'String value',
            'length' => 42,
            'publicId' => 'mock-id-123',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'lastModified' => '2025-11-22T10:40:04.065Z',
            'validate' => true,
            'segmentValues' => [],
            'isAutoNumber' => true,
            'consolNumChar' => 42,
            'consolOrder' => 42,
        ], 200),
    ]);

    $request = new DimensionGetSegmentBydimensionIdsegmentIdRequest(
        dimensionIdId: 'test string',
        segmentIdId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DimensionGetSegmentBydimensionIdsegmentIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->internalId->toBe('mock-id-123')
        ->segmentId->toBe(42)
        ->description->toBe('String value')
        ->length->toBe(42)
        ->publicId->toBe('mock-id-123')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModified->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->validate->toBeTrue()
        ->isAutoNumber->toBeTrue()
        ->consolNumChar->toBe(42)
        ->consolOrder->toBe(42);
});

it('calls the dimensionGetSegmentValueBydimensionIdsegmentIdvalueId method in the Dimension resource', function () {
    Saloon::fake([
        DimensionGetSegmentValueBydimensionIdsegmentIdvalueIdRequest::class => MockResponse::make([
            'internalId' => 'mock-id-123',
            'segmentId' => 42,
            'valueId' => 'mock-id-123',
            'description' => 'String value',
            'publicId' => 'mock-id-123',
            'active' => true,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'lastModified' => '2025-11-22T10:40:04.065Z',
            'mappedSegValue' => 'String value',
        ], 200),
    ]);

    $request = new DimensionGetSegmentValueBydimensionIdsegmentIdvalueIdRequest(
        dimensionIdId: 'test string',
        segmentIdId: 123,
        valueIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DimensionGetSegmentValueBydimensionIdsegmentIdvalueIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->internalId->toBe('mock-id-123')
        ->segmentId->toBe(42)
        ->valueId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->publicId->toBe('mock-id-123')
        ->active->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModified->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->mappedSegValue->toBe('String value');
});

it('calls the dimensionGetSegmentValueBydimensionIdsegmentIdpublicId method in the Dimension resource', function () {
    Saloon::fake([
        DimensionGetSegmentValueBydimensionIdsegmentIdpublicIdRequest::class => MockResponse::make([
            'internalId' => 'mock-id-123',
            'segmentId' => 42,
            'valueId' => 'mock-id-123',
            'description' => 'String value',
            'publicId' => 'mock-id-123',
            'active' => true,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'lastModified' => '2025-11-22T10:40:04.065Z',
            'mappedSegValue' => 'String value',
        ], 200),
    ]);

    $request = new DimensionGetSegmentValueBydimensionIdsegmentIdpublicIdRequest(
        dimensionIdId: 'test string',
        segmentIdId: 123,
        publicIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DimensionGetSegmentValueBydimensionIdsegmentIdpublicIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->internalId->toBe('mock-id-123')
        ->segmentId->toBe(42)
        ->valueId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->publicId->toBe('mock-id-123')
        ->active->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModified->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->mappedSegValue->toBe('String value');
});
