<?php

use Pionect\VismaSdk\Dto\AttributeUpdateDto;
use Pionect\VismaSdk\Dto\CreditNoteLineUpdateDto;
use Pionect\VismaSdk\Dto\SegmentUpdateDto;
use Pionect\VismaSdk\Requests\Attribute\AttributePutByattributeIdRequest;
use Pionect\VismaSdk\Requests\CreditNote\CreditNoteCreateLineAttachmentBycreditNoteNumberlineNumberRequest;

it('filters null values from request body', function () {
    $dto = new AttributeUpdateDto(
        attributeId: 'ATTR-001',
        description: null,
        internal: true,
    );

    $request = new AttributePutByattributeIdRequest('ATTR-001', $dto);
    $body = $request->body()->all();

    expect($body)
        ->toHaveKey('attributeID')
        ->not->toHaveKey('description')
        ->toHaveKey('internal');
});

it('preserves empty string values', function () {
    $dto = new AttributeUpdateDto(
        attributeId: 'ATTR-001',
        description: '',
    );

    $request = new AttributePutByattributeIdRequest('ATTR-001', $dto);
    $body = $request->body()->all();

    expect($body)
        ->toHaveKey('description')
        ->and($body['description'])->toBe(['value' => '']);
});

it('preserves zero and false values', function () {
    $dto = new CreditNoteLineUpdateDto(
        inventoryNumber: 'INV-001',
        quantity: 0,
        manualDiscount: false,
    );

    $request = new CreditNoteCreateLineAttachmentBycreditNoteNumberlineNumberRequest('CN-001', 1, $dto);
    $body = $request->body()->all();

    expect($body['quantity'])->toBe(['value' => 0])
        ->and($body['manualDiscount'])->toBe(['value' => false]);
});

it('filters nested null values in arrays', function () {
    $dto = new CreditNoteLineUpdateDto(
        inventoryNumber: 'INV-001',
        subaccount: [
            new SegmentUpdateDto(segmentId: 1, segmentValue: 'SEG-1'),
            new SegmentUpdateDto(segmentId: null, segmentValue: 'SEG-2'),
        ],
        description: null,
    );

    $request = new CreditNoteCreateLineAttachmentBycreditNoteNumberlineNumberRequest('CN-001', 1, $dto);
    $body = $request->body()->all();

    expect($body)
        ->toHaveKey('inventoryNumber')
        ->not->toHaveKey('description')
        ->and($body['subaccount'])->toBeArray()->toHaveCount(2)
        ->and($body['subaccount'][0])->toHaveKeys(['segmentId', 'segmentValue'])
        ->and($body['subaccount'][1])->toHaveKey('segmentValue')
        ->and($body['subaccount'][1])->not->toHaveKey('segmentId');
});

it('handles wrapped null values', function () {
    $dto = new CreditNoteLineUpdateDto(
        inventoryNumber: 'INV-001',
        description: null,
        quantity: 5,
    );

    $request = new CreditNoteCreateLineAttachmentBycreditNoteNumberlineNumberRequest('CN-001', 1, $dto);
    $body = $request->body()->all();

    expect($body)
        ->not->toHaveKey('description')
        ->toHaveKey('quantity')
        ->and($body['quantity'])->toBe(['value' => 5]);
});

it('preserves empty arrays', function () {
    $dto = new CreditNoteLineUpdateDto(
        inventoryNumber: 'INV-001',
        subaccount: [],
    );

    $request = new CreditNoteCreateLineAttachmentBycreditNoteNumberlineNumberRequest('CN-001', 1, $dto);
    $body = $request->body()->all();

    expect($body)
        ->toHaveKey('inventoryNumber')
        ->toHaveKey('subaccount')
        ->and($body['subaccount'])->toBe([]);
});

it('filters deeply nested structures', function () {
    $dto = new CreditNoteLineUpdateDto(
        inventoryNumber: 'INV-001',
        subaccount: [
            new SegmentUpdateDto(segmentId: 1, segmentValue: 'SEG-1'),
            new SegmentUpdateDto(segmentId: 2, segmentValue: null),
        ],
        quantity: null,
        description: 'Valid description',
    );

    $request = new CreditNoteCreateLineAttachmentBycreditNoteNumberlineNumberRequest('CN-001', 1, $dto);
    $body = $request->body()->all();

    expect($body)
        ->toHaveKey('inventoryNumber')
        ->toHaveKey('description')
        ->not->toHaveKey('quantity')
        ->and($body['subaccount'])->toHaveCount(2)
        ->and($body['subaccount'][0])->toHaveKeys(['segmentId', 'segmentValue'])
        ->and($body['subaccount'][1])->toHaveKey('segmentId')
        ->and($body['subaccount'][1])->not->toHaveKey('segmentValue');
});

it('handles mixed null and non-null values correctly', function () {
    $dto = new AttributeUpdateDto(
        attributeId: 'ATTR-001',
        description: 'Test Description',
        entryMask: null,
        internal: true,
    );

    $request = new AttributePutByattributeIdRequest('ATTR-001', $dto);
    $body = $request->body()->all();

    expect($body)
        ->toHaveKey('attributeID')
        ->toHaveKey('description')
        ->not->toHaveKey('entryMask')
        ->toHaveKey('internal')
        ->and($body['description'])->toBe(['value' => 'Test Description'])
        ->and($body['internal'])->toBe(['value' => true]);
});

it('handles DTOs with only null values', function () {
    $dto = new SegmentUpdateDto(
        segmentId: null,
        segmentValue: null,
    );

    $creditNoteDto = new CreditNoteLineUpdateDto(
        inventoryNumber: 'INV-001',
        subaccount: [$dto],
    );

    $request = new CreditNoteCreateLineAttachmentBycreditNoteNumberlineNumberRequest('CN-001', 1, $creditNoteDto);
    $body = $request->body()->all();

    expect($body['subaccount'])->toBeArray()->toHaveCount(1)
        ->and($body['subaccount'][0])->toBe([]);
});
