<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/markinho/Dropbox/argenta-web.github.io/MEFaplicado/user/plugins/bibliography/blueprints.yaml',
    'modified' => 1472569969,
    'data' => [
        'name' => 'Bibliography',
        'version' => '1.0.0',
        'description' => 'Renders a Bibliography-file into footnotes and appends it to the page.',
        'icon' => 'asterisk',
        'author' => [
            'name' => 'Ole Vik',
            'email' => 'git@olevik.me',
            'url' => 'http://olevik.me'
        ],
        'homepage' => 'https://github.com/olevik/grav-plugin-bibliography',
        'keywords' => 'responsive, srcset',
        'bugs' => 'https://github.com/olevik/grav-plugin-bibliography/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
