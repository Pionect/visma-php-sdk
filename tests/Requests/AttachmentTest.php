<?php

use Pionect\VismaSdk\Dto\AttachmentDto;
use Pionect\VismaSdk\Requests\Attachment\AttachmentGetByattachmentIdRequest;
use Pionect\VismaSdk\Requests\Attachment\AttachmentPutByattachmentIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the attachmentGetByattachmentIdRequest method in the Attachment resource', function () {
    Saloon::fake([
        AttachmentGetByattachmentIdRequest::class => MockResponse::make([
            'name' => 'String value',
            'revision' => 42,
        ], 200),
    ]);

    $request = new AttachmentGetByattachmentIdRequest(
        attachmentId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(AttachmentGetByattachmentIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->name->toBe('String value')
        ->revision->toBe(42);
});

it('calls the attachmentPutByattachmentIdRequest method in the Attachment resource', function () {
    $bodyData = new AttachmentDto(
        name: 'String value',
        revision: 42
    );

    Saloon::fake([
        AttachmentPutByattachmentIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new AttachmentPutByattachmentIdRequest(
        attachmentId: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(AttachmentPutByattachmentIdRequest::class);

    expect($response->status())->toBe(201);
});
