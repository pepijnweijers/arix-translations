<?php

return[
    'backups' => 'Backups',
    'manage-backups' => 'Backups manage karo',
    'create-backup' => 'Backup banao',
    'have-been-allocated' => '{{current}} of {{max}} backups is server ke liye ban chuke hain.',

    'name' => 'Naam',
    'size' => 'Size',
    'creation-date' => 'Banane ki date',
    'checksum' => 'Checksum',

    'failed' => 'Fail ho gaya',
    'continue' => 'Continue',

    'download' => 'Download karo',
    'restore' => 'Restore karo',
    'lock' => 'Lock',
    'unlock' => 'Unlock',
    'delete' => 'Delete',

    'limit-is-0' => 'Is server ke liye backups nahi ban sakte kyunki backup limit 0 par set hai.',
    'try-going-back' => 'Lagta hai backup me problem aayi, ek page peeche jaane ki koshish karo.',
    'no-backups' => 'Lagta hai is server ke liye abhi koi backup save nahi hai.',
    'no-longer-protected' => 'Yeh backup ab automatic ya galti se delete hone se protected nahi rahega.',
    'your-server-will-be-stopped' => 'Aapka server stop ho jayega. Aap power state control nahi kar paoge, file manager use nahi kar paoge, ya complete hone tak extra backups nahi bana paoge.',
    'delete-all-files' => 'Backup restore karne se pehle saari files delete karo.',
    'permanent-operation' => 'Yeh permanent action hai. Ek baar delete hone ke baad backup wapas nahi aayega.',

    'create' => [
        'title' => 'Server backup banao',
        'backup-name' => 'Backup ka naam',
        'backup-name-description' => 'Agar dena chaho to woh naam jisse is backup ko refer kiya jayega.',
        'ignored-files-directories' => 'Ignore ki hui files aur directories',
        'ignored-files-directories-description' => 'Is backup me ignore karni wali files ya folders yahan likho. Agar .pteroignore file root me ho to use use karne ke liye khaali chhodo. Files aur folders ke liye wildcard match support hai, aur path ke shuru me exclamation laga kar rule ko negate bhi kar sakte ho.',
        'locked' => 'Locked',
        'locked-description' => 'Jab tak aap manually unlock na karo tab tak yeh backup delete nahi hoga.',
        'start' => 'Backup start karo',
    ]
];
