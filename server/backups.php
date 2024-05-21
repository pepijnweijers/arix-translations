<?php

return[
    'backups' => 'Mga Backup',
    'manage-backups' => 'Pamahalaan ang mga backup',
    'create-backup' => 'Gumawa ng backup',
    'have-been-allocated' => 'Nalikha na ang {{current}} ng {{max}} na mga backup para sa server na ito.', 

    'name' => 'Pangalan',
    'size' => 'Laki',
    'creation-date' => 'Petsa ng pagkakagawa',
    'checksum' => 'Checksum',

    'failed' => 'Nabigo',
    'continue' => 'Ipagpatuloy',

    'download' => 'I-download',
    'restore' => 'Ibalik', 
    'lock' => 'I-lock',
    'unlock' => 'I-unlock',
    'delete' => 'Burahin',

    'limit-is-0' => 'Hindi maaaring gumawa ng mga backup para sa server na ito dahil ang limit ng backup ay nakatakda sa 0.', 
    'try-going-back' => 'Mukhang naubos na namin ang mga backup na maipapakita sa iyo, subukang bumalik sa nakaraang page.', 
    'no-backups' => 'Mukhang walang naka-store na mga backup sa kasalukuyan para sa server na ito.', 
    'no-longer-protected' => 'Ang backup na ito ay hindi na protektado mula sa automated o hindi sinasadyang pagbura.',
    'your-server-will-be-stopped' => 'Hihinto ang iyong server. Hindi mo makontrol ang state ng kuryente, ma-access ang file manager, o gumawa ng mga karagdagang backup hanggang sa makumpleto.',
    'delete-all-files' => 'Burahin ang lahat ng file bago ibalik ang backup.',
    'permanent-operation' => 'Ito ay isang permanenteng operasyon. Hindi na mababawi ang backup kapag nabura.',

    'create' => [
        'title' => 'Gumawa ng backup ng server', 
        'backup-name' => 'Pangalan ng Backup',
        'backup-name-description' => 'Kung ibinigay, ang pangalang gagamitin para i-reference ang backup na ito.',
        'ignored-files-directories' => 'Mga Hindi Kasamang File at Direktoryo',
        'ignored-files-directories-description' => 'Ilagay ang mga file o folder na hindi isasama habang ginagawa ang backup na ito. Mag-iwan ng blangko upang gamitin ang mga nilalaman ng file na .pteroignore sa root ng server directory kung mayroon. Sinusuportahan ang wildcard matching ng mga file at folder, bilang karagdagan sa pag-negate ng isang patakaran sa pamamagitan ng pag-prefix sa landas gamit ang exclamation point.',
        'locked' => 'Naka-lock', 
        'locked-description' => 'Pinipigilan ang pagbura ng backup na ito hanggang sa malinaw na ma-unlock.',
        'start' => 'Simulan ang backup', 
    ]
];
