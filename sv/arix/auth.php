<?php

return [
    'support' => 'Hjälp center',

    'login' => [
        'title' => 'Logga in för att fortsätta',
        'username-or-email' => 'Användarnamn eller E-Post',
        'password' => 'Lösenord',
        'forgot-password' => 'Glömt Lösenord?',
        'login' => 'Logga in',

        'must-be-provided' => 'Ett användarnamn eller e-postadress måste anges.',
        'new-here' => 'Ny här? Skapa ett konto.',
        'please-enter-password' => 'Vänligen ange ditt kontolösenord',
    ],

    'forgot' => [
        'title' => 'Begär Lösenordsåterställning',
        'email' => 'E-Post',
        'email-description' => 'Ange e-postadressen för ditt konto för att få instruktioner om hur du återställer ditt lösenord.',
        'send-email' => 'Skicka E-Post',
        'return-to-login' => 'Återgå till inloggning',

        'a-valid-email-provided' => 'En giltig e-postadress måste anges för att fortsätta.',
    ],

    'device' => [
        'title' => 'Enhetskontrollpunkt',
        'recovery-code' => 'Återställningskod',
        'authentication-code' => 'Autentiseringskod',

        'continue' => 'Fortsätta',

        'lost-device' => 'Jag har tappat bort min enhet',
        'have-device' => 'Jag har min enhet',

        'return-to-login' => 'Återgå till inloggning',

        'enter-one-of-recovery-codes' => 'Ange en av återställningskoderna som genererades när du konfigurerade tvåfaktorsautentisering på det här kontot för att fortsätta.',
        'enter-two-factor' => 'Ange tvåfaktorkoden som genereras av din enhet',
    ],

    'register' => [
        'title' => 'Skapa ett konto',
        'username' => 'Användarnamn',
        'firstname' => 'Förnamn',
        'lastname' => 'Efternamn',
        'email' => 'E-Post',
        'register' => 'Registrera',

        'already-have-account' => 'Har du redan ett konto?',

        'username-required' => 'Ett användarnamn krävs.',
        'email-required' => 'En e-postadress krävs.',
        'valid-email-required' => 'En giltig e-postadress krävs.',
        'firstname-required' => 'Ett förnamn krävs.',
        'lastname-required' => 'Ett efternamn krävs.',

        'valid-username-required' => 'Ett giltigt användarnamn krävs (3-16 tecken, endast bokstäver, siffror, bindestreck och understreck).',
        'username-taken' => 'Det angivna användarnamnet används redan.',

        'success-message' => 'Du har registrerat dig, kontrollera din e-post.',
    ],

    'reset' => [
        'title' => 'Återställ Lösenord',

        'email' => 'E-Post',
        'password' => 'Lösenord',
        'confirm-password' => 'Bekräfta Nytt Lösenord',

        'return-to-login' => 'Återgå till inloggning',
        
        'password-required' => 'Ett nytt lösenord krävs.',
        'at-least-8-characters' => 'Ditt nya lösenord bör vara minst 8 tecken långt.',
        'password-does-not-match' => 'Ditt nya lösenord matchar inte.',
    ]
];
