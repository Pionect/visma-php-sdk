<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Attribute\AttributeGetAttributeByattributeIdRequest;
use Pionect\VismaSdk\Requests\Attribute\AttributeGetAttributesCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the attributeGetAttributeByattributeId method in the Attribute resource', function () {
    Saloon::fake([
        AttributeGetAttributeByattributeIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'attributes',
                'id' => 'mock-id-123',
                'attributes' => [
                    'attributeId' => 'mock-id-123',
                    'description' => 'Mock value',
                    'controlType' => 'Mock value',
                    'internal' => true,
                    'entryMask' => 'Mock value',
                    'regExp' => 'Mock value',
                    'details' => [],
                    'createdDateTime' => '2025-11-22T10:40:04.065Z',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new AttributeGetAttributeByattributeIdRequest(
        attributeIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(AttributeGetAttributeByattributeIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->attributeId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->controlType->toBe('Mock value')
        ->internal->toBe(true)
        ->entryMask->toBe('Mock value')
        ->regExp->toBe('Mock value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the attributeGetAttributesCollection method in the Attribute resource', function () {
    Saloon::fake([
        AttributeGetAttributesCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'attributes',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'attributeId' => 'mock-id-123',
                        'description' => 'Mock value',
                        'controlType' => 'Mock value',
                        'internal' => true,
                        'entryMask' => 'Mock value',
                        'regExp' => 'Mock value',
                        'details' => [],
                        'createdDateTime' => '2025-11-22T10:40:04.065Z',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'attributes',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'attributeId' => 'mock-id-123',
                        'description' => 'Mock value',
                        'controlType' => 'Mock value',
                        'internal' => true,
                        'entryMask' => 'Mock value',
                        'regExp' => 'Mock value',
                        'details' => [],
                        'createdDateTime' => '2025-11-22T10:40:04.065Z',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new AttributeGetAttributesCollectionRequest(attributeId: 'test string', controlType: 'test string', internal: true, greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (AttributeGetAttributesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->attributeId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->controlType->toBe('Mock value')
        ->internal->toBe(true)
        ->entryMask->toBe('Mock value')
        ->regExp->toBe('Mock value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
