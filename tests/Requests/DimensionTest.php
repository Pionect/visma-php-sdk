<?php

use Pionect\VismaSdk\Dto\DtoSegmentUpdateDto;
use Pionect\VismaSdk\Requests\Dimension\DimensionGetDimensionBydimensionIdRequest;
use Pionect\VismaSdk\Requests\Dimension\DimensionGetDimensionListRequest;
use Pionect\VismaSdk\Requests\Dimension\DimensionGetSegmentBydimensionIdsegmentIdRequest;
use Pionect\VismaSdk\Requests\Dimension\DimensionGetSegmentValueBydimensionIdsegmentIdpublicIdRequest;
use Pionect\VismaSdk\Requests\Dimension\DimensionGetSegmentValueBydimensionIdsegmentIdvalueIdRequest;
use Pionect\VismaSdk\Requests\Dimension\DimensionUpdateSegmentBydimensionIdsegmentIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the dimensionGetDimensionListRequest method in the Dimension resource', function () {
    Saloon::fake([
        DimensionGetDimensionListRequest::class => MockResponse::make([], 200),
    ]);

    $request = new DimensionGetDimensionListRequest(
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DimensionGetDimensionListRequest::class);

    expect($response->status())->toBe(200);
});

it('calls the dimensionGetDimensionBydimensionIdRequest method in the Dimension resource', function () {
    Saloon::fake([
        DimensionGetDimensionBydimensionIdRequest::class => MockResponse::make([
            'length' => 42,
            'description' => 'String value',
            'segments' => [],
        ], 200),
    ]);

    $request = new DimensionGetDimensionBydimensionIdRequest(
        dimensionId: 'test string',
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

it('calls the dimensionGetSegmentBydimensionIdsegmentIdRequest method in the Dimension resource', function () {
    Saloon::fake([
        DimensionGetSegmentBydimensionIdsegmentIdRequest::class => MockResponse::make([
            'internalId' => 'mock-id-123',
            'segmentId' => 42,
            'description' => 'String value',
            'length' => 42,
            'publicId' => 'mock-id-123',
            'timeStamp' => 'String value',
            'lastModified' => '2025-11-22T10:40:04+00:00',
            'validate' => true,
            'segmentValues' => [],
            'isAutoNumber' => true,
            'consolNumChar' => 42,
            'consolOrder' => 42,
        ], 200),
    ]);

    $request = new DimensionGetSegmentBydimensionIdsegmentIdRequest(
        dimensionId: 'test string',
        segmentId: 123,
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
        ->timeStamp->toBe('String value')
        ->lastModified->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->validate->toBe(true)
        ->isAutoNumber->toBe(true)
        ->consolNumChar->toBe(42)
        ->consolOrder->toBe(42);
});

it('calls the dimensionUpdateSegmentBydimensionIdsegmentIdRequest method in the Dimension resource', function () {
    $bodyData = new DtoSegmentUpdateDto(
        segmentValues: [],
        dimensionId: 'mock-id-123',
        segementId: 42,
        description: 'String value'
    );

    Saloon::fake([
        DimensionUpdateSegmentBydimensionIdsegmentIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new DimensionUpdateSegmentBydimensionIdsegmentIdRequest(
        dimensionId: 'test string',
        segmentId: 123,
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DimensionUpdateSegmentBydimensionIdsegmentIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the dimensionGetSegmentValueBydimensionIdsegmentIdvalueIdRequest method in the Dimension resource', function () {
    Saloon::fake([
        DimensionGetSegmentValueBydimensionIdsegmentIdvalueIdRequest::class => MockResponse::make([
            'internalId' => 'mock-id-123',
            'segmentId' => 42,
            'valueId' => 'mock-id-123',
            'description' => 'String value',
            'publicId' => 'mock-id-123',
            'active' => true,
            'timeStamp' => 'String value',
            'lastModified' => '2025-11-22T10:40:04+00:00',
            'mappedSegValue' => 'String value',
        ], 200),
    ]);

    $request = new DimensionGetSegmentValueBydimensionIdsegmentIdvalueIdRequest(
        dimensionId: 'test string',
        segmentId: 123,
        valueId: 'test string',
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
        ->active->toBe(true)
        ->timeStamp->toBe('String value')
        ->lastModified->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->mappedSegValue->toBe('String value');
});

it('calls the dimensionGetSegmentValueBydimensionIdsegmentIdpublicIdRequest method in the Dimension resource', function () {
    Saloon::fake([
        DimensionGetSegmentValueBydimensionIdsegmentIdpublicIdRequest::class => MockResponse::make([
            'internalId' => 'mock-id-123',
            'segmentId' => 42,
            'valueId' => 'mock-id-123',
            'description' => 'String value',
            'publicId' => 'mock-id-123',
            'active' => true,
            'timeStamp' => 'String value',
            'lastModified' => '2025-11-22T10:40:04+00:00',
            'mappedSegValue' => 'String value',
        ], 200),
    ]);

    $request = new DimensionGetSegmentValueBydimensionIdsegmentIdpublicIdRequest(
        dimensionId: 'test string',
        segmentId: 123,
        publicId: 'test string',
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
        ->active->toBe(true)
        ->timeStamp->toBe('String value')
        ->lastModified->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->mappedSegValue->toBe('String value');
});
