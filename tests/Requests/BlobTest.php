<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Blob\BlobGetByblobIdRequest;
use Pionect\VismaSdk\Requests\Blob\BlobGetMetadataByblobIdRequest;
use Pionect\VismaSdk\Requests\Blob\BlobGetPresignedUrlCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
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
        ->writeTimeout->toBe(42);
});

it('calls the blobGetPresignedUrlCollection method in the Blob resource', function () {
    Saloon::fake([
        BlobGetPresignedUrlCollectionRequest::class => MockResponse::make([
            0 => [
                'preSignedUrl' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'preSignedUrl' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new BlobGetPresignedUrlCollectionRequest(blobId: 'test string', includeMetadata: true));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (BlobGetPresignedUrlCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->preSignedUrl->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the blobGetMetadataByblobId method in the Blob resource', function () {
    Saloon::fake([
        BlobGetMetadataByblobIdRequest::class => MockResponse::make([
            'blobId' => 'mock-id-123',
            'blobName' => 'Mock value',
            'contentType' => 'Mock value',
            'mD5hash' => 'Mock value',
            'fileChecksum' => 'Mock value',
            'size' => 42,
            'countryCode' => 'Mock value',
            'createdDateTimeUtc' => '2025-11-22T10:40:04.065Z',
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
        ->blobName->toBe('Mock value')
        ->contentType->toBe('Mock value')
        ->mD5hash->toBe('Mock value')
        ->fileChecksum->toBe('Mock value')
        ->size->toBe(42)
        ->countryCode->toBe('Mock value')
        ->createdDateTimeUtc->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});
