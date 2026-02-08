<?php

return [
    'settings' => 'Settings',

    'sftp' => [
        'title' => 'SFTP Details',
        'server-address' => 'Server Address',
        'username' => 'Username',
        'description' => 'Your SFTP password is the same as the password you use to access this panel.',
        'launch-sftp' => 'Launch SFTP',
    ],

    'rename' => [
        'title' => 'Change Server Details',
        'server-name' => 'Server Name',
        'server-description' => 'Server Description',
        'save' => 'Save',
    ],

    'debug' => [
        'title' => 'Debug Information',
        'node' => 'Node',
        'server-id' => 'Server ID',
    ],

    'reinstall' => [
        'title' => 'Reinstall Server',
        'reinstall-started' => 'Your server has begun the reinstallation process.',
        'confirm-reinstallation' => 'Confirm server reinstallation',
        'yes-reinstall' => 'Yes, reinstall server',
        'are-you-sure' => 'Your server will be stopped and some files may be deleted or modified during this process, are you sure you wish to continue?',
        'desc-1' => 'Reinstalling your server will stop it, and then re-run the installation script that initially set it up.',
        'desc-2' => 'Some files may be deleted or modified during this process, please back up your data before continuing.',
        'reinstall-server' => 'Reinstall Server',
    ],
];