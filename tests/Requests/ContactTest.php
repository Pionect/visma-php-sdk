<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Contact\ContactGetAllContactsCollectionRequest;
use Pionect\VismaSdk\Requests\Contact\ContactGetBycontactIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the contactGetBycontactId method in the Contact resource', function () {
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
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'contactId' => 42,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->active->toBeTrue()
        ->title->toBe('String value')
        ->firstName->toBe('String value')
        ->lastName->toBe('String value')
        ->position->toBe('String value')
        ->businessAccount->toBe('String value')
        ->businessAccountType->toBe('String value')
        ->sameAsAccount->toBeTrue()
        ->address->toBeNull()
        ->email->toBe('test@example.com')
        ->web->toBe('String value')
        ->phone1->toBe('String value')
        ->phone2->toBe('String value')
        ->phone3->toBe('String value')
        ->fax->toBe('String value')
        ->contactMethod->toBe('String value')
        ->doNotCall->toBeTrue()
        ->doNotFax->toBeTrue()
        ->doNotEmail->toBeTrue()
        ->doNotMail->toBeTrue()
        ->noMassMail->toBeTrue()
        ->noMarketing->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->contactId->toBe(42)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the contactGetAllContactsCollection method in the Contact resource', function () {
    Saloon::fake([
        ContactGetAllContactsCollectionRequest::class => MockResponse::make([
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
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'contactId' => 42,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
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
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'contactId' => 42,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new ContactGetAllContactsCollectionRequest(displayName: 'test string', active: 'test string', firstName: 'test string', lastName: 'test string', businessAccount: 'test string', email: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (ContactGetAllContactsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->displayName->toBe('String value')
        ->active->toBeTrue()
        ->title->toBe('String value')
        ->firstName->toBe('String value')
        ->lastName->toBe('String value')
        ->position->toBe('String value')
        ->businessAccount->toBe('String value')
        ->businessAccountType->toBe('String value')
        ->sameAsAccount->toBeTrue()
        ->address->toBeNull()
        ->email->toBe('test@example.com')
        ->web->toBe('String value')
        ->phone1->toBe('String value')
        ->phone2->toBe('String value')
        ->phone3->toBe('String value')
        ->fax->toBe('String value')
        ->contactMethod->toBe('String value')
        ->doNotCall->toBeTrue()
        ->doNotFax->toBeTrue()
        ->doNotEmail->toBeTrue()
        ->doNotMail->toBeTrue()
        ->noMassMail->toBeTrue()
        ->noMarketing->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->contactId->toBe(42)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});
