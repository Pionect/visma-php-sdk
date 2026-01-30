<?php

// Generated 2026-01-30 15:19:40

use Pionect\VismaSdk\Requests\Blob\BlobGetByblobIdRequest;
use Pionect\VismaSdk\Requests\Blob\BlobGetMetadataByblobIdRequest;
use Pionect\VismaSdk\Requests\Blob\BlobGetPresignedUrlRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the blobGetByblobIdRequest method in the Blob resource', function () {
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
        blobId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(BlobGetByblobIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->canRead->toBe(true)
        ->canSeek->toBe(true)
        ->canTimeout->toBe(true)
        ->canWrite->toBe(true)
        ->length->toBe(42)
        ->position->toBe(42)
        ->readTimeout->toBe(42)
        ->writeTimeout->toBe(42);
});

it('calls the blobGetPresignedUrlRequest method in the Blob resource', function () {
    Saloon::fake([
        BlobGetPresignedUrlRequest::class => MockResponse::make([
            0 => [
                'preSignedUrl' => 'String value',
            ],
            1 => [
                'preSignedUrl' => 'String value',
            ],
        ], 200),
    ]);

    $request = new BlobGetPresignedUrlRequest(
        blobId: 'test string',
        includeMetadata: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(BlobGetPresignedUrlRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->preSignedUrl->toBe('String value');
});

it('calls the blobGetMetadataByblobIdRequest method in the Blob resource', function () {
    Saloon::fake([
        BlobGetMetadataByblobIdRequest::class => MockResponse::make([
            'blobId' => 'mock-id-123',
            'blobName' => 'String value',
            'contentType' => 'String value',
            'mD5hash' => 'String value',
            'fileChecksum' => 'String value',
            'size' => 42,
            'countryCode' => 'String value',
            'createdDateTimeUtc' => '2025-11-22T10:40:04+00:00',
        ], 200),
    ]);

    $request = new BlobGetMetadataByblobIdRequest(
        blobId: 'test string',
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
        ->createdDateTimeUtc->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});
