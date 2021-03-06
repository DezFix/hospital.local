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
    'doctor' => [
        'controller' => 'doctor',
        'action' => 'index',
    ],

    'doctor/cards' => [
        'controller' => 'doctor',
        'action' => 'cards',
    ],

    'doctor/appoint' => [
        'controller' => 'doctor',
        'action' => 'appoint',
    ],

    'user' => [
        'controller' => 'models',
        'action' => 'Users',
    ],

    'person' => [
        'controller' => 'person',
        'action' => 'index',
    ]

];