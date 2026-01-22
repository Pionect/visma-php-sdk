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
            'data' => [
                'type' => 'contacts',
                'id' => 'mock-id-123',
                'attributes' => [
                    'displayName' => 'Mock value',
                    'active' => true,
                    'title' => 'Mock value',
                    'firstName' => 'Mock value',
                    'lastName' => 'Mock value',
                    'position' => 'Mock value',
                    'businessAccount' => 'Mock value',
                    'businessAccountType' => 'Mock value',
                    'sameAsAccount' => true,
                    'address' => 'Mock value',
                    'email' => 'test@example.com',
                    'web' => 'Mock value',
                    'phone1' => 'Mock value',
                    'phone2' => 'Mock value',
                    'phone3' => 'Mock value',
                    'fax' => 'Mock value',
                    'contactMethod' => 'Mock value',
                    'doNotCall' => true,
                    'doNotFax' => true,
                    'doNotEmail' => true,
                    'doNotMail' => true,
                    'noMassMail' => true,
                    'noMarketing' => true,
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'contactId' => 42,
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new ContactGetBycontactIdRequest(
        contactIdId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ContactGetBycontactIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->displayName->toBe('Mock value')
        ->active->toBe(true)
        ->title->toBe('Mock value')
        ->firstName->toBe('Mock value')
        ->lastName->toBe('Mock value')
        ->position->toBe('Mock value')
        ->businessAccount->toBe('Mock value')
        ->businessAccountType->toBe('Mock value')
        ->sameAsAccount->toBe(true)
        ->address->toBe('Mock value')
        ->email->toBe('test@example.com')
        ->web->toBe('Mock value')
        ->phone1->toBe('Mock value')
        ->phone2->toBe('Mock value')
        ->phone3->toBe('Mock value')
        ->fax->toBe('Mock value')
        ->contactMethod->toBe('Mock value')
        ->doNotCall->toBe(true)
        ->doNotFax->toBe(true)
        ->doNotEmail->toBe(true)
        ->doNotMail->toBe(true)
        ->noMassMail->toBe(true)
        ->noMarketing->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->contactId->toBe(42)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the contactGetAllContactsCollection method in the Contact resource', function () {
    Saloon::fake([
        ContactGetAllContactsCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'contacts',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'displayName' => 'Mock value',
                        'active' => true,
                        'title' => 'Mock value',
                        'firstName' => 'Mock value',
                        'lastName' => 'Mock value',
                        'position' => 'Mock value',
                        'businessAccount' => 'Mock value',
                        'businessAccountType' => 'Mock value',
                        'sameAsAccount' => true,
                        'address' => 'Mock value',
                        'email' => 'test@example.com',
                        'web' => 'Mock value',
                        'phone1' => 'Mock value',
                        'phone2' => 'Mock value',
                        'phone3' => 'Mock value',
                        'fax' => 'Mock value',
                        'contactMethod' => 'Mock value',
                        'doNotCall' => true,
                        'doNotFax' => true,
                        'doNotEmail' => true,
                        'doNotMail' => true,
                        'noMassMail' => true,
                        'noMarketing' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'contactId' => 42,
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'contacts',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'displayName' => 'Mock value',
                        'active' => true,
                        'title' => 'Mock value',
                        'firstName' => 'Mock value',
                        'lastName' => 'Mock value',
                        'position' => 'Mock value',
                        'businessAccount' => 'Mock value',
                        'businessAccountType' => 'Mock value',
                        'sameAsAccount' => true,
                        'address' => 'Mock value',
                        'email' => 'test@example.com',
                        'web' => 'Mock value',
                        'phone1' => 'Mock value',
                        'phone2' => 'Mock value',
                        'phone3' => 'Mock value',
                        'fax' => 'Mock value',
                        'contactMethod' => 'Mock value',
                        'doNotCall' => true,
                        'doNotFax' => true,
                        'doNotEmail' => true,
                        'doNotMail' => true,
                        'noMassMail' => true,
                        'noMarketing' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'contactId' => 42,
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new ContactGetAllContactsCollectionRequest(displayName: 'test string', active: 'test string', firstName: 'test string', lastName: 'test string', businessAccount: 'test string', email: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (ContactGetAllContactsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->displayName->toBe('Mock value')
        ->active->toBe(true)
        ->title->toBe('Mock value')
        ->firstName->toBe('Mock value')
        ->lastName->toBe('Mock value')
        ->position->toBe('Mock value')
        ->businessAccount->toBe('Mock value')
        ->businessAccountType->toBe('Mock value')
        ->sameAsAccount->toBe(true)
        ->address->toBe('Mock value')
        ->email->toBe('test@example.com')
        ->web->toBe('Mock value')
        ->phone1->toBe('Mock value')
        ->phone2->toBe('Mock value')
        ->phone3->toBe('Mock value')
        ->fax->toBe('Mock value')
        ->contactMethod->toBe('Mock value')
        ->doNotCall->toBe(true)
        ->doNotFax->toBe(true)
        ->doNotEmail->toBe(true)
        ->doNotMail->toBe(true)
        ->noMassMail->toBe(true)
        ->noMarketing->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->contactId->toBe(42)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
