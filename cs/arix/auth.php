<?php

return [
    'support' => 'Podpora',

    'login' => [
        'title' => 'Přihlašte se',
        'username-or-email' => 'Uživ. jméno nebo Email',
        'password' => 'Heslo',
        'forgot-password' => 'Zapomenuté heslo?',
        'login' => 'Přihlásit se',

        'must-be-provided' => 'Nezadali jste uživatelské jméno nebo email.',
        'new-here' => 'Jste tu nový? Vytvořte si účet.',
        'please-enter-password' => 'Prosím zadejte heslo',
    ],

    'forgot' => [
        'title' => 'Žádost o reset hesla',
        'email' => 'Email',
        'email-description' => 'Zadejte email k účtu, pro který chcete resetovat heslo.',
        'send-email' => 'Poslat Email',
        'return-to-login' => 'Zpět k přihlášení',

        'a-valid-email-provided' => 'Zadejte platný email.',
    ],

    'device' => [
        'title' => 'Zařízení',
        'recovery-code' => 'Obnovovací kód',
        'authentication-code' => 'Autentikační kód',

        'continue' => 'Pokračovat',

        'lost-device' => 'Ztratil jsem své zařízení',
        'have-device' => 'Mám své zařízení',

        'return-to-login' => 'Zpět k přihlášení',

        'enter-one-of-recovery-codes' => 'Zadejte jeden z obnovovacích kódů získaných při nastavení 2FA.',
        'enter-two-factor' => 'Zadejte token z vaší 2FA aplikace.',
    ],

    'register' => [
        'title' => 'Vytvořit účet',
        'username' => 'Uživatelské jméno',
        'firstname' => 'Jméno',
        'lastname' => 'Příjmení',
        'email' => 'Email',
        'register' => 'Registrovat',

        'already-have-account' => 'Již máte účet?',

        'username-required' => 'Uživatelské jméno je povinné.',
        'email-required' => 'Emailová adresa je povinná.',
        'valid-email-required' => 'Je požadována platná emailová adresa.',
        'firstname-required' => 'Jméno je povinné.',
        'lastname-required' => 'Příjmení je povinné.',

        'valid-username-required' => 'Je požadováno platné uživatelské jméno (3–16 znaků, pouze písmena, čísla, pomlčky a podtržítka).',
        'username-taken' => 'Zadané uživatelské jméno je již používáno.',

        'success-message' => 'Úspěšně jste se zaregistrovali, zkontrolujte svůj email.',
    ],

    'reset' => [
        'title' => 'Resetovat heslo',

        'email' => 'Email',
        'password' => 'Heslo',
        'confirm-password' => 'Potvrďte nové heslo',

        'return-to-login' => 'Zpět k přihlášení',
        
        'password-required' => 'Je požadováno nové heslo.',
        'at-least-8-characters' => 'Vaše heslo by mělo být minimálně 8 znaků dlouhé.',
        'password-does-not-match' => 'Hesla se neshodují.',
    ]
];
