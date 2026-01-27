<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Blob\BlobGetByblobIdRequest;
use Pionect\VismaSdk\Requests\Blob\BlobGetMetadataByblobIdRequest;
use Pionect\VismaSdk\Requests\Blob\BlobGetPresignedUrlCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the blobGetByblobId method in the Blob resource', function () {
    Saloon::fake([
        BlobGetByblobIdRequest::class => MockResponse::make([
            'canRead' => true,
            'canSeek' => true,
            'canTimeout' => true,
            'canWrite' => true,
            'length' => 42,
            'position' => 42,
            'readTimeout' => 42,
            'writeTimeout' => 42,
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new BlobGetByblobIdRequest(
        blobIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(BlobGetByblobIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->canRead->toBeTrue()
        ->canSeek->toBeTrue()
        ->canTimeout->toBeTrue()
        ->canWrite->toBeTrue()
        ->length->toBe(42)
        ->position->toBe(42)
        ->readTimeout->toBe(42)
        ->writeTimeout->toBe(42)
        ->id->toBe('mock-id-123');
});

it('calls the blobGetPresignedUrlCollection method in the Blob resource', function () {
    Saloon::fake([
        BlobGetPresignedUrlCollectionRequest::class => MockResponse::make([
            0 => [
                'preSignedUrl' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'preSignedUrl' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new BlobGetPresignedUrlCollectionRequest(blobId: 'test string', includeMetadata: true));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (BlobGetPresignedUrlCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->preSignedUrl->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the blobGetMetadataByblobId method in the Blob resource', function () {
    Saloon::fake([
        BlobGetMetadataByblobIdRequest::class => MockResponse::make([
            'blobId' => 'mock-id-123',
            'blobName' => 'String value',
            'contentType' => 'String value',
            'mD5hash' => 'String value',
            'fileChecksum' => 'String value',
            'size' => 42,
            'countryCode' => 'String value',
            'createdDateTimeUtc' => '2025-11-22T10:40:04.065Z',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new BlobGetMetadataByblobIdRequest(
        blobIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(BlobGetMetadataByblobIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->blobId->toBe('mock-id-123')
        ->blobName->toBe('String value')
        ->contentType->toBe('String value')
        ->mD5hash->toBe('String value')
        ->fileChecksum->toBe('String value')
        ->size->toBe(42)
        ->countryCode->toBe('String value')
        ->createdDateTimeUtc->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->id->toBe('mock-id-123');
});
