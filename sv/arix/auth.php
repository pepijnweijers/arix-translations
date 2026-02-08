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
        'new-here' => 'New here? Create an account.',
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
        'title' => 'Create an Account',
        'username' => 'Username',
        'firstname' => 'First Name',
        'lastname' => 'Last Name',
        'email' => 'Email',
        'register' => 'Register',

        'already-have-account' => 'Already have an account?',

        'username-required' => 'A username is required.',
        'email-required' => 'An email address is required.',
        'valid-email-required' => 'A valid email address is required.',
        'firstname-required' => 'A first name is required.',
        'lastname-required' => 'A last name is required.',

        'valid-username-required' => 'A valid username is required (3-16 characters, letters, numbers, dashes and underscores only).',
        'username-taken' => 'The provided username is already in use.',

        'success-message' => 'You have successfully registered, check your email',
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
