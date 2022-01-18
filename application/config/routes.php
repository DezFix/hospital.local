<?php

return [

	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
    [
        'controller' => 'add',
        'action' => 'add',
    ],

	'account/login' => [
		'controller' => 'account',
		'action' => 'login',
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
    ],
	
];