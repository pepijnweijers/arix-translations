<?php

return [
    'account-overview' => 'Przegląd konta',
    'twofactor-messagebox' => 'Twoje konto musi mieć włączone uwierzytelnianie dwuskładnikowe, aby kontynuować.',
    'apikey' => 'Klucz API',
    'sshkey' => 'Klucz SSH',

    'update-password' => [
        'current' => 'Obecne hasło',
        'new' => 'Nowe hasło',
        'requirements' => 'Twoje nowe hasło powinno mieć co najmniej 8 znaków i być unikalne dla tej strony.',
        'confirm' => 'Potwierdź nowe hasło',
        'update' => 'Zaktualizuj hasło',
    ],

    'update-email' => [
        'isUpdated' => 'Twój główny email został zaktualizowany',
        'update' => 'Zaktualizuj email',
        'email' => 'Email',
        'confirm' => 'Potwierdź hasło',
    ],

    'appearance' => [
        'title' => 'Wygląd',
        'lightDarkMode' => 'Tryb jasny/ciemny',
        'light' => 'Jasny',
        'dark' => 'Ciemny',
        'language' => 'Język panelu',
        'panel-sounds' => 'Dźwięki panelu',
        'on' => 'Włączone',
        'off' => 'Wyłączone',
    ],

    'twofactor' => [
        'title' => 'Uwierzytelnianie dwuskładnikowe',
        'isEnabled' => 'Weryfikacja dwuetapowa jest obecnie włączona na twoim koncie.',
        'isDisabled' => 'Obecnie nie masz włączonej weryfikacji dwuetapowej na swoim koncie. Kliknij przycisk poniżej, aby rozpocząć konfigurację.',
        'disable' => 'Wyłącz weryfikację dwuetapową',
        'enable' => 'Włącz weryfikację dwuetapową',
        
        'disable-dialog' => [
            'password' => 'Hasło',
            'cancel' => 'Anuluj',
            'must-enter-password' => 'Musisz wprowadzić hasło do konta, aby kontynuować.',
            'disable' => 'Wyłącz',
        ],

        'setup-dialog' => [
            'description' => 'Zeskanuj powyższy kod QR za pomocą aplikacji uwierzytelniającej, którą wybrałeś. Następnie wprowadź wygenerowany 6-cyfrowy kod w pole poniżej.',
            'account-password' => 'Hasło do konta',
            'qrcode-loading' => 'Oczekiwanie na załadowanie kodu QR...',
            'enter-6digit-password' => 'Musisz wprowadzić 6-cyfrowy kod i swoje hasło, aby kontynuować.',
            'enable' => 'Włącz',
            'cancel' => 'Anuluj',
        ],
    ],

    'apiKey' => [
        'label' => 'Opis',
        'description' => 'Opis tego klucza API.',
        'allowedIPs-label' => 'Dozwolone adresy IP',
        'allowedIPs-description' => 'Pozostaw puste, aby zezwolić na używanie tego klucza API z dowolnego adresu IP, w przeciwnym razie podaj każdy adres IP w nowej linii.',
        'createButton' => 'Utwórz',

        'your-keys' => 'Twój klucz API',
        'store-save' => 'Poniżej pokazano klucz API, o który prosiłeś. Przechowuj go w bezpiecznym miejscu, nie zostanie on ponownie wyświetlony.',
        'close' => 'Zamknij',

        'delete-api-key' => 'Usuń klucz API',
        'delete-key' => 'Usuń klucz',
        'all-requests-invalidated-1' => 'Wszystkie żądania używające',
        'all-requests-invalidated-2' => 'klucz zostaną unieważnione.',
        'loading' => 'Ładowanie...',
        'no-key-found' => 'Nie znaleziono żadnych kluczy API dla tego konta.',
        'last-used' => 'Ostatnio używany',
    ],

    'sshKey' => [
        'loading' => 'Ładowanie...',
        'no-key-found' => 'Nie znaleziono żadnych kluczy SSH dla tego konta.',
        'added-on' => 'Dodano',

        'createForm' => [
            'key-name' => 'Nazwa klucza SSH',
            'public-key' => 'Klucz publiczny',
            'public-key-desc' => 'Wprowadź swój publiczny klucz SSH.',
            'save' => 'Zapisz',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'Usuń klucz SSH',
            'delete-key' => 'Usuń klucz',
            'will-invalidate-1' => 'Usunięcie',
            'will-invalidate-2' => 'klucz SSH spowoduje unieważnienie jego użycia w panelu.',
        ],
    ],

    'recoveryTokensDialog' => [
        'title' => 'Uwierzytelnianie dwuskładnikowe włączone',
        'description' => 'Przechowuj poniższe kody w bezpiecznym miejscu. Jeśli stracisz dostęp do telefonu, możesz użyć tych kodów zapasowych do zalogowania się.',
        'alert' => 'Te kody nie będą ponownie wyświetlane.',
        'doneButton' => 'Gotowe',
    ],
];
