<?php

return [

	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
    'sql' => [
        'controller' => 'main',
        'action' => 'sql',
    ],
    [
        'controller' => 'add',
        'action' => 'add',
    ],

	'account/login' => [
		'controller' => 'account',
		'action' => 'login',
	],
    'account/out' => [
        'controller' => 'account',
        'action' => 'out',
    ],

	'account/register' => [
		'controller' => 'account',
		'action' => 'register',
	],

    // me
    'doctors' => [
        'controller' => '-',
        'action' => '-',
    ],

    'user' => [
        'controller' => 'models',
        'action' => 'Users',
    ],

    'person' => [
        'controller' => '-',
        'action' => '-',
    ]

];