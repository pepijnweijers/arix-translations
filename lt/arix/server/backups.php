<?php

return [
    'backups' => 'Atsarginės kopijos',
    'manage-backups' => 'Tvarkyti atsargines kopijas',
    'create-backup' => 'Sukurti atsarginę kopiją',
    'have-been-allocated' => 'Šiam serveriui sukurta {{current}} iš {{max}} atsarginių kopijų.',

    'name' => 'Pavadinimas',
    'size' => 'Dydis',
    'creation-date' => 'Sukūrimo data',
    'checksum' => 'Kontrolinė suma',

    'failed' => 'Nepavyko',
    'continue' => 'Tęsti',

    'download' => 'Atsisiųsti',
    'restore' => 'Atkurti',
    'lock' => 'Užrakinti',
    'unlock' => 'Atrakinti',
    'delete' => 'Ištrinti',

    'limit-is-0' => 'Šiam serveriui negalima sukurti atsarginių kopijų, nes kopijų limitas nustatytas į 0.',
    'try-going-back' => 'Atrodo, kad nebeliko atsarginių kopijų rodymui, pabandykite grįžti puslapiu atgal.',
    'no-backups' => 'Atrodo, kad šiam serveriui šiuo metu nėra išsaugotų atsarginių kopijų.',
    'no-longer-protected' => 'Ši atsarginė kopija nebebus apsaugota nuo automatinių ar atsitiktinių ištrynimų.',
    'your-server-will-be-stopped' => 'Jūsų serveris bus sustabdytas. Kol procesas nebus baigtas, negalėsite valdyti maitinimo būsenos, pasiekti failų tvarkyklės ar kurti papildomų atsarginių kopijų.',
    'delete-all-files' => 'Ištrinti visus failus prieš atkuriant atsarginę kopiją.',
    'permanent-operation' => 'Tai yra negrįžtamas veiksmas. Atsarginės kopijos atkurti po ištrynimo nebegalima.',

    'create' => [
        'title' => 'Sukurti serverio atsarginę kopiją',
        'backup-name' => 'Atsarginės kopijos pavadinimas',
        'backup-name-description' => 'Jei nurodyta, pavadinimas, kuris turėtų būti naudojamas šiai atsarginei kopijai identifikuoti.',
        'ignored-files-directories' => 'Ignoruojami failai ir katalogai',
        'ignored-files-directories-description' => 'Įveskite failus ar aplankus, kuriuos norite ignoruoti generuojant šią atsarginę kopiją. Palikite tuščią, kad naudotumėte .pteroignore failo turinį, esantį serverio šakninio katalogo kataloge, jei toks yra. Failų ir aplankų šablonų atitikimas (wildcard) palaikomas, taip pat galima paneigti taisyklę prieš kelią pridedant šauktuką.',
        'locked' => 'Užrakinta',
        'locked-description' => 'Neleidžia ištrinti šios atsarginės kopijos, kol ji nebus aiškiai atrakinta.',
        'start' => 'Pradėti kopijavimą',
    ]
];