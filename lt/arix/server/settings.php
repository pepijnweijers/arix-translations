<?php

return [
    'settings' => 'Nustatymai',

    'sftp' => [
        'title' => 'SFTP duomenys',
        'server-address' => 'Serverio adresas',
        'username' => 'Vartotojo vardas',
        'description' => 'Jūsų SFTP slaptažodis yra toks pat, kaip slaptažodis, kurį naudojate prisijungdami prie šio valdymo skydelio.',
        'launch-sftp' => 'Paleisti SFTP',
    ],

    'rename' => [
        'title' => 'Keisti serverio duomenis',
        'server-name' => 'Serverio pavadinimas',
        'server-description' => 'Serverio aprašymas',
        'save' => 'Išsaugoti',
    ],

    'debug' => [
        'title' => 'Informacija derinimui',
        'node' => 'Mazgas',
        'server-id' => 'Serverio ID',
    ],

    'reinstall' => [
        'title' => 'Perrašyti serverį',
        'reinstall-started' => 'Jūsų serverio perrašymo procesas pradėtas.',
        'confirm-reinstallation' => 'Patvirtinkite serverio perrašymą',
        'yes-reinstall' => 'Taip, perrašyti serverį',
        'are-you-sure' => 'Jūsų serveris bus sustabdytas, o kai kurie failai gali būti ištrinti arba pakeisti šio proceso metu. Ar tikrai norite tęsti?',
        'desc-1' => 'Perrašant serverį jis bus sustabdytas, o tada iš naujo paleistas diegimo scenarijus, kuris jį pradžioje nustatė.',
        'desc-2' => 'Kai kurie failai gali būti ištrinti arba pakeisti šio proceso metu, prieš tęsdami sukurkite atsargines savo duomenų kopijas.',
        'reinstall-server' => 'Perrašyti serverį',
    ],
];