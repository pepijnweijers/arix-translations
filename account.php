<?php

return [
    'account-overview' => 'Pangkalahatang-tanaw ng Account',
    'twofactor-messagebox' => 'Dapat naka-enable ang two-factor authentication sa iyong account para magpatuloy.',
    'apikey' => 'API Key',
    'sshkey' => 'SSH Key',

    'update-password' => [
        'current' => 'Kasalukuyang Password',
        'new' => 'Bagong Password',
        'requirements' => 'Ang iyong bagong password ay dapat na hindi bababa sa 8 karakter ang haba at natatangi sa website na ito.',
        'confirm' => 'Kumpirmahin ang Bagong Password',
        'update' => 'I-update ang Password',
    ],

    'update-email' => [
        'isUpdated' => 'Na-update na ang iyong pangunahing email.',
        'update' => 'I-update ang Email',
        'email' => 'Email',
        'confirm' => 'Kumpirmahin ang Password',
    ],

    'appearance' => [
        'title' => 'Itsura', 
        'lightDarkMode' => 'Light/Dark Mode',
        'light' => 'Light',
        'dark' => 'Dark',
        'language' => 'Wika ng Panel', 
        'panel-sounds' => 'Mga Tunog ng Panel', 
        'on' => 'Naka-on',
        'off' => 'Naka-off',
    ],

    'twofactor' => [
        'title' => 'Two Factor Authentication',
        'isEnabled' => 'Kasalukuyang naka-enable ang two-step verification sa iyong account.',
        'isDisabled' => 'Wala kang naka-enable na two-step verification sa iyong account. I-click ang button sa ibaba para simulan ang pagsasaayos nito.',
        'disable' => 'I-disable ang Two-Step', 
        'enable' => 'I-enable ang Two-Step', 
        
        'disable-dialog' => [
            'password' => 'Password',
            'cancel' => 'Kanselahin',
            'must-enter-password' => 'Dapat mong ilagay ang iyong account password para magpatuloy.',
            'disable' => 'I-disable',
        ],

        'setup-dialog' => [
            'description' => 'I-scan ang QR code sa itaas gamit ang two-step authentication app na gusto mo. Pagkatapos, ilagay ang 6-digit na code na nabuo sa field sa ibaba.',
            'account-password' => 'Password ng Account',
            'qrcode-loading' => 'Naghihintay na mag-load ang QR code...', 
            'enter-6digit-password' => 'Dapat mong ilagay ang 6-digit na code at ang iyong password para magpatuloy.',
            'enable' => 'I-enable',
            'cancel' => 'Kanselahin',
        ],
    ],

    'apiKey' => [
        'label' => 'Paglalarawan', 
        'description' => 'Isang paglalarawan ng API key na ito.',
        'allowedIPs-label' => 'Mga Pinapayagang IP', 
        'allowedIPs-description' => 'Mag-iwan ng blangko upang payagan ang anumang IP address na gamitin ang API key na ito, kung hindi, ilagay ang bawat IP address sa isang bagong linya.',
        'createButton' => 'Gumawa', 

        'your-keys' => 'Ang Iyong API Key',
        'store-save' => 'Ang API key na iyong hiniling ay ipinapakita sa ibaba. Mangyaring itabi ito sa isang ligtas na lugar, hindi na ito muling ipapakita.',
        'close' => 'Isara',

        'delete-api-key' => 'Tanggalin ang API Key',
        'delete-key' => 'Tanggalin ang Key',
        'all-requests-invalidated-1' => 'Ang lahat ng mga request na gumagamit ng', 
        'all-requests-invalidated-2' => 'key ay hindi na magiging valid.',
        'loading' => 'Naglo-load...',
        'no-key-found' => 'Walang umiiral na API key para sa account na ito.', 
        'last-used' => 'Huling ginamit', 
    ],

    'sshKey' => [
        'loading' => 'Naglo-load...',
        'no-key-found' => 'Walang umiiral na SSH Keys para sa account na ito.',
        'added-on' => 'Idinagdag noong',

        'createForm' => [
            'key-name' => 'Pangalan ng SSH Key',
            'public-key' => 'Public Key',
            'public-key-desc' => 'Ilagay ang iyong public SSH key.',
            'save' => 'i-save',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'Tanggalin ang SSH Key',
            'delete-key' => 'Tanggalin ang Key',
            'will-invalidate-1' => 'Ang pag-aalis ng',
            'will-invalidate-2' => 'SSH key ay mag-iinvalidate sa paggamit nito sa buong Panel.',
        ],
    ],

    'recoveryTokensDialog' => [
        'title' => 'Naka-Enable ang Two-Step Authentication',
        'description' => 'Itabi ang mga code sa ibaba sa isang safe na lugar. Kung mawala sa iyo ang access sa iyong phone, maaari mong gamitin ang mga backup code na ito para mag-sign in.',
        'alert' => 'Ang mga code na ito ay hindi na muling ipapakita.',
        'doneButton' => 'Tapos na',
    ],
];
