<?php

return [
    'account-overview' => 'Accountoverzicht',
    'twofactor-messagebox' => 'Uw account moet tweestapsverificatie ingeschakeld hebben om door te kunnen gaan.',
    'apikey' => 'API-sleutel',
    'sshkey' => 'SSH-sleutel',

    'update-password' => [
        'current' => 'Huidig wachtwoord',
        'new' => 'Nieuw wachtwoord',
        'requirements' => 'Uw nieuwe wachtwoord moet minimaal 8 tekens lang zijn en uniek zijn voor deze website.',
        'confirm' => 'Bevestig nieuw wachtwoord',
        'update' => 'Wachtwoord bijwerken',
    ],

    'update-email' => [
        'isUpdated' => 'Uw primaire e-mailadres is bijgewerkt',
        'update' => 'E-mail bijwerken',
        'email' => 'E-mail',
        'confirm' => 'Bevestig wachtwoord',
    ],

    'appearance' => [
        'title' => 'Weergave',
        'lightDarkMode' => 'Licht/donkere modus',
        'light' => 'Licht',
        'dark' => 'Donker',
        'language' => 'Taal',
        'panel-sounds' => 'Geluiden',
        'on' => 'Aan',
        'off' => 'Uit',
    ],

    'twofactor' => [
        'title' => 'Tweestapsverificatie',
        'isEnabled' => 'Tweestapsverificatie is momenteel ingeschakeld voor uw account.',
        'isDisabled' => 'U heeft momenteel geen tweestapsverificatie ingeschakeld voor uw account. Klik op de onderstaande knop om het configureren te starten.',
        'disable' => 'Tweestapsverificatie uitschakelen',
        'enable' => 'Tweestapsverificatie inschakelen',
        
        'disable-dialog' => [
            'password' => 'Wachtwoord',
            'cancel' => 'Annuleren',
            'must-enter-password' => 'U moet uw accountwachtwoord invoeren om door te gaan.',
            'disable' => 'Uitschakelen',
        ],

        'setup-dialog' => [
            'description' => 'Scan de bovenstaande QR-code met de tweestapsverificatie-app van uw keuze. Voer vervolgens de 6-cijferige code in die hieronder wordt gegenereerd.',
            'account-password' => 'Accountwachtwoord',
            'qrcode-loading' => 'Wachten tot de QR-code is geladen...',
            'enter-6digit-password' => 'U moet de 6-cijferige code en uw wachtwoord invoeren om door te gaan.',
            'enable' => 'Inschakelen',
            'cancel' => 'Annuleren',
        ],
    ],

    'apiKey' => [
        'label' => 'Beschrijving',
        'description' => 'Een beschrijving van deze API-sleutel.',
        'allowedIPs-label' => 'Toegestane IP-adressen',
        'allowedIPs-description' => 'Laat leeg om elk IP-adres toe te staan om deze API-sleutel te gebruiken, anders geef elk IP-adres op een nieuwe regel.',
        'createButton' => 'Maken',

        'your-keys' => 'Uw API-sleutel',
        'store-save' => 'De API-sleutel die u heeft aangevraagd, wordt hieronder weergegeven. Bewaar deze op een veilige locatie, het wordt niet opnieuw weergegeven.',
        'close' => 'Sluiten',

        'delete-api-key' => 'API-sleutel verwijderen',
        'delete-key' => 'Sleutel verwijderen',
        'all-requests-invalidated-1' => 'Alle verzoeken met gebruik van de',
        'all-requests-invalidated-2' => 'sleutel worden ongeldig gemaakt.',
        'loading' => 'Laden...',
        'no-key-found' => 'Er zijn geen API-sleutels voor dit account.',
        'last-used' => 'Laatst gebruikt',
    ],

    'sshKey' => [
        'loading' => 'Laden...',
        'no-key-found' => 'Er zijn geen SSH-sleutels voor dit account.',
        'added-on' => 'Toegevoegd op',

        'createForm' => [
            'key-name' => 'Naam SSH-sleutel',
            'public-key' => 'Openbare sleutel',
            'public-key-desc' => 'Voer uw openbare SSH-sleutel in.',
            'save' => 'Opslaan',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'SSH-sleutel verwijderen',
            'delete-key' => 'Sleutel verwijderen',
            'will-invalidate-1' => 'Het verwijderen van de',
            'will-invalidate-2' => 'SSH-sleutel maakt het gebruik ervan overal in het paneel ongeldig.',
        ],
    ],

    'recoveryTokensDialog' => [
        'title' => 'Tweestapsverificatie ingeschakeld',
        'description' => 'Bewaar de onderstaande codes op een veilige plaats. Als u geen toegang meer heeft tot uw telefoon, kunt u deze back-upcodes gebruiken om in te loggen.',
        'alert' => 'Deze codes worden niet opnieuw weergegeven.',
        'doneButton' => 'Klaar',
    ],
];