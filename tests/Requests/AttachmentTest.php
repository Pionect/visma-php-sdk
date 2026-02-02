<?php

use Pionect\VismaSdk\Dto\AttachmentMetadataUpdateDto;
use Pionect\VismaSdk\Requests\Attachment\AttachmentGetByattachmentIdRequest;
use Pionect\VismaSdk\Requests\Attachment\AttachmentPutByattachmentIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the attachmentGetByattachmentIdRequest method in the Attachment resource', function () {
    Saloon::fake([
        AttachmentGetByattachmentIdRequest::class => MockResponse::make([], 200),
    ]);

    $request = new AttachmentGetByattachmentIdRequest(
        attachmentId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(AttachmentGetByattachmentIdRequest::class);

    expect($response->status())->toBe(200);
});

it('calls the attachmentPutByattachmentIdRequest method in the Attachment resource', function () {
    $bodyData = new AttachmentMetadataUpdateDto(
        sendToAutoinvoice: []
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
