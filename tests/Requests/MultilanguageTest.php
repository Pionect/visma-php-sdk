<?php

// auto-generated

use Pionect\VismaSdk\Requests\Multilanguage\MultilanguageGetAllActiveLanguagesCollectionRequest;
use Pionect\VismaSdk\Requests\Multilanguage\MultilanguageGetInventoryTranslationsByinventoryNumberRequest;
use Pionect\VismaSdk\Requests\Multilanguage\MultilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the multilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIso method in the Multilanguage resource', function () {
    Saloon::fake([
        MultilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest::class => MockResponse::make([
            'data' => [
                'type' => 'multilanguages',
                'id' => 'mock-id-123',
                'attributes' => [
                    'languageIso' => 'Mock value',
                    'translation' => 'Mock value',
                    'isTranslated' => true,
                ],
            ],
        ], 200),
    ]);

    $request = new MultilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest(
        inventoryNumberId: 'test string',
        languageIsoId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(MultilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->languageIso->toBe('Mock value')
        ->translation->toBe('Mock value')
        ->isTranslated->toBe(true);
});

it('calls the multilanguageGetInventoryTranslationsByinventoryNumber method in the Multilanguage resource', function () {
    Saloon::fake([
        MultilanguageGetInventoryTranslationsByinventoryNumberRequest::class => MockResponse::make([
            'data' => [
                'type' => 'multilanguages',
                'id' => 'mock-id-123',
                'attributes' => [
                    'languageIso' => 'Mock value',
                    'translation' => 'Mock value',
                    'isTranslated' => true,
                ],
            ],
        ], 200),
    ]);

    $request = new MultilanguageGetInventoryTranslationsByinventoryNumberRequest(
        inventoryNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(MultilanguageGetInventoryTranslationsByinventoryNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->languageIso->toBe('Mock value')
        ->translation->toBe('Mock value')
        ->isTranslated->toBe(true);
});

it('calls the multilanguageGetAllActiveLanguagesCollection method in the Multilanguage resource', function () {
    Saloon::fake([
        MultilanguageGetAllActiveLanguagesCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'multilanguages',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'isDefault' => true,
                        'languageIso' => 'Mock value',
                        'nativeName' => 'Mock value',
                        'isActive' => true,
                    ],
                ],
                1 => [
                    'type' => 'multilanguages',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'isDefault' => true,
                        'languageIso' => 'Mock value',
                        'nativeName' => 'Mock value',
                        'isActive' => true,
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new MultilanguageGetAllActiveLanguagesCollectionRequest);

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (MultilanguageGetAllActiveLanguagesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->isDefault->toBe(true)
        ->languageIso->toBe('Mock value')
        ->nativeName->toBe('Mock value')
        ->isActive->toBe(true);
});
