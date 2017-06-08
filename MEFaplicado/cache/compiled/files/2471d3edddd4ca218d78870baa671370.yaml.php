<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/markinho/Dropbox/argenta-web.github.io/MEFaplicado/user/plugins/langswitcher/blueprints.yaml',
    'modified' => 1491499105,
    'data' => [
        'name' => 'LangSwitcher',
        'version' => '1.3.0',
        'description' => 'LangSwitcher is a [Grav](http://github.com/getgrav/grav) plugin that provides native language text links to switch between [multiple languages](http://learn.getgrav.org/content/multi-language) in Grav **v0.9.30** or greater.',
        'icon' => 'globe',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-langswitcher',
        'keywords' => 'mulitlang, multilanguage, translation, switcher',
        'bugs' => 'https://github.com/getgrav/grav-plugin-langswitcher/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use built in CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
