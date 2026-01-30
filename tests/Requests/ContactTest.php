<?php

// Generated 2026-01-30 14:10:14
use Pionect\VismaSdk\Dto\ContactUpdateDto;
use Pionect\VismaSdk\Requests\Contact\ContactCreateContactRequest;
use Pionect\VismaSdk\Requests\Contact\ContactGetAllContactsRequest;
use Pionect\VismaSdk\Requests\Contact\ContactGetBycontactIdRequest;
use Pionect\VismaSdk\Requests\Contact\ContactPutBycontactIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the contactGetBycontactIdRequest method in the Contact resource', function () {
    Saloon::fake([
        ContactGetBycontactIdRequest::class => MockResponse::make([
            'displayName' => 'String value',
            'active' => true,
            'title' => 'String value',
            'firstName' => 'String value',
            'lastName' => 'String value',
            'position' => 'String value',
            'businessAccount' => 'String value',
            'businessAccountType' => 'String value',
            'sameAsAccount' => true,
            'address' => null,
            'email' => 'test@example.com',
            'web' => 'String value',
            'phone1' => 'String value',
            'phone2' => 'String value',
            'phone3' => 'String value',
            'fax' => 'String value',
            'contactMethod' => 'String value',
            'doNotCall' => true,
            'doNotFax' => true,
            'doNotEmail' => true,
            'doNotMail' => true,
            'noMassMail' => true,
            'noMarketing' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'contactId' => 42,
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new ContactGetBycontactIdRequest(
        contactId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ContactGetBycontactIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->displayName->toBe('String value')
        ->active->toBe(true)
        ->title->toBe('String value')
        ->firstName->toBe('String value')
        ->lastName->toBe('String value')
        ->position->toBe('String value')
        ->businessAccount->toBe('String value')
        ->businessAccountType->toBe('String value')
        ->sameAsAccount->toBe(true)
        ->address->toBeNull()
        ->email->toBe('test@example.com')
        ->web->toBe('String value')
        ->phone1->toBe('String value')
        ->phone2->toBe('String value')
        ->phone3->toBe('String value')
        ->fax->toBe('String value')
        ->contactMethod->toBe('String value')
        ->doNotCall->toBe(true)
        ->doNotFax->toBe(true)
        ->doNotEmail->toBe(true)
        ->doNotMail->toBe(true)
        ->noMassMail->toBe(true)
        ->noMarketing->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->contactId->toBe(42)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the contactPutBycontactIdRequest method in the Contact resource', function () {
    $bodyData = new ContactUpdateDto(
        active: true,
        title: 'String value',
        firstName: 'String value',
        lastName: 'String value',
        position: 'String value',
        businessAccount: 'String value',
        sameAsAccount: true,
        address: null,
        email: 'test@example.com',
        web: 'String value',
        phone1: 'String value',
        phone2: 'String value',
        phone3: 'String value',
        fax: 'String value',
        contactMethod: 'String value',
        doNotCall: true,
        doNotFax: true,
        doNotEmail: true,
        doNotMail: true,
        noMassMail: true,
        noMarketing: true
    );

    Saloon::fake([
        ContactPutBycontactIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ContactPutBycontactIdRequest(
        contactId: 123,
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ContactPutBycontactIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the contactGetAllContactsRequest method in the Contact resource', function () {
    Saloon::fake([
        ContactGetAllContactsRequest::class => MockResponse::make([
            0 => [
                'displayName' => 'String value',
                'active' => true,
                'title' => 'String value',
                'firstName' => 'String value',
                'lastName' => 'String value',
                'position' => 'String value',
                'businessAccount' => 'String value',
                'businessAccountType' => 'String value',
                'sameAsAccount' => true,
                'address' => null,
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'phone3' => 'String value',
                'fax' => 'String value',
                'contactMethod' => 'String value',
                'doNotCall' => true,
                'doNotFax' => true,
                'doNotEmail' => true,
                'doNotMail' => true,
                'noMassMail' => true,
                'noMarketing' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'contactId' => 42,
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'displayName' => 'String value',
                'active' => true,
                'title' => 'String value',
                'firstName' => 'String value',
                'lastName' => 'String value',
                'position' => 'String value',
                'businessAccount' => 'String value',
                'businessAccountType' => 'String value',
                'sameAsAccount' => true,
                'address' => null,
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'phone3' => 'String value',
                'fax' => 'String value',
                'contactMethod' => 'String value',
                'doNotCall' => true,
                'doNotFax' => true,
                'doNotEmail' => true,
                'doNotMail' => true,
                'noMassMail' => true,
                'noMarketing' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'contactId' => 42,
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new ContactGetAllContactsRequest(
        displayName: 'test string',
        active: 'test string',
        firstName: 'test string',
        lastName: 'test string',
        businessAccount: 'test string',
        email: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ContactGetAllContactsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->displayName->toBe('String value')
        ->active->toBe(true)
        ->title->toBe('String value')
        ->firstName->toBe('String value')
        ->lastName->toBe('String value')
        ->position->toBe('String value')
        ->businessAccount->toBe('String value')
        ->businessAccountType->toBe('String value')
        ->sameAsAccount->toBe(true)
        ->address->toBeNull()
        ->email->toBe('test@example.com')
        ->web->toBe('String value')
        ->phone1->toBe('String value')
        ->phone2->toBe('String value')
        ->phone3->toBe('String value')
        ->fax->toBe('String value')
        ->contactMethod->toBe('String value')
        ->doNotCall->toBe(true)
        ->doNotFax->toBe(true)
        ->doNotEmail->toBe(true)
        ->doNotMail->toBe(true)
        ->noMassMail->toBe(true)
        ->noMarketing->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->contactId->toBe(42)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the contactCreateContactRequest method in the Contact resource', function () {
    $bodyData = new ContactUpdateDto(
        active: true,
        title: 'String value',
        firstName: 'String value',
        lastName: 'String value',
        position: 'String value',
        businessAccount: 'String value',
        sameAsAccount: true,
        address: null,
        email: 'test@example.com',
        web: 'String value',
        phone1: 'String value',
        phone2: 'String value',
        phone3: 'String value',
        fax: 'String value',
        contactMethod: 'String value',
        doNotCall: true,
        doNotFax: true,
        doNotEmail: true,
        doNotMail: true,
        noMassMail: true,
        noMarketing: true
    );

    Saloon::fake([
        ContactCreateContactRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ContactCreateContactRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ContactCreateContactRequest::class);

    expect($response->status())->toBe(201);
});
