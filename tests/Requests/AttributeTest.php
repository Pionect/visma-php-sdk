<?php

use Pionect\VismaSdk\Dto\AttributeUpdateDto;
use Pionect\VismaSdk\Requests\Attribute\AttributeDeleteByattributeIdRequest;
use Pionect\VismaSdk\Requests\Attribute\AttributeGetAttributeByattributeIdRequest;
use Pionect\VismaSdk\Requests\Attribute\AttributeGetAttributesRequest;
use Pionect\VismaSdk\Requests\Attribute\AttributePostRequest;
use Pionect\VismaSdk\Requests\Attribute\AttributePutByattributeIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the attributeGetAttributeByattributeIdRequest method in the Attribute resource', function () {
    Saloon::fake([
        AttributeGetAttributeByattributeIdRequest::class => MockResponse::make([
            'attributeId' => 'mock-id-123',
            'description' => 'String value',
            'controlType' => 'String value',
            'internal' => true,
            'entryMask' => 'String value',
            'regExp' => 'String value',
            'details' => [],
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new AttributeGetAttributeByattributeIdRequest(
        attributeId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(AttributeGetAttributeByattributeIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->attributeId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->controlType->toBe('String value')
        ->internal->toBe(true)
        ->entryMask->toBe('String value')
        ->regExp->toBe('String value')
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});

it('calls the attributePutByattributeIdRequest method in the Attribute resource', function () {
    $bodyData = new AttributeUpdateDto(
        attributeId: 'mock-id-123',
        description: 'String value',
        internal: true,
        controlType: 'String value',
        entryMask: 'String value',
        regExp: 'String value',
        details: []
    );

    Saloon::fake([
        AttributePutByattributeIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new AttributePutByattributeIdRequest(
        attributeId: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(AttributePutByattributeIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the attributeDeleteByattributeIdRequest method in the Attribute resource', function () {
    Saloon::fake([
        AttributeDeleteByattributeIdRequest::class => MockResponse::make([], 204),
    ]);

    $request = new AttributeDeleteByattributeIdRequest(
        attributeId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(AttributeDeleteByattributeIdRequest::class);

    expect($response->status())->toBe(204);
});

it('calls the attributeGetAttributesRequest method in the Attribute resource', function () {
    Saloon::fake([
        AttributeGetAttributesRequest::class => MockResponse::make([
            0 => [
                'attributeId' => 'mock-id-123',
                'description' => 'String value',
                'controlType' => 'String value',
                'internal' => true,
                'entryMask' => 'String value',
                'regExp' => 'String value',
                'details' => [],
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
            1 => [
                'attributeId' => 'mock-id-123',
                'description' => 'String value',
                'controlType' => 'String value',
                'internal' => true,
                'entryMask' => 'String value',
                'regExp' => 'String value',
                'details' => [],
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new AttributeGetAttributesRequest(
        attributeId: 'test string',
        controlType: 'test string',
        internal: true,
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(AttributeGetAttributesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->attributeId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->controlType->toBe('String value')
        ->internal->toBe(true)
        ->entryMask->toBe('String value')
        ->regExp->toBe('String value')
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});

it('calls the attributePostRequest method in the Attribute resource', function () {
    $bodyData = new AttributeUpdateDto(
        attributeId: 'mock-id-123',
        description: 'String value',
        internal: true,
        controlType: 'String value',
        entryMask: 'String value',
        regExp: 'String value',
        details: []
    );

    Saloon::fake([
        AttributePostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new AttributePostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(AttributePostRequest::class);

    expect($response->status())->toBe(201);
});
