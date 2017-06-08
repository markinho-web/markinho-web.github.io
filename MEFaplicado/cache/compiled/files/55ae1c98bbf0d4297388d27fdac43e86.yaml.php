<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/markinho/Dropbox/argenta-web.github.io/MEFaplicado/user/plugins/mathjax/blueprints.yaml',
    'modified' => 1492023499,
    'data' => [
        'name' => 'MathJax',
        'version' => '1.5.1',
        'description' => 'This plugin allows you to include math formulas in your web pages, either using TeX and LaTeX notation, and/or as MathML.',
        'icon' => 'subscript',
        'author' => [
            'name' => 'Sommerregen',
            'email' => 'sommerregen@benjamin-regler.de'
        ],
        'homepage' => 'https://github.com/sommerregen/grav-plugin-mathjax',
        'keywords' => [
            0 => 'latex',
            1 => 'mathjax',
            2 => 'formula',
            3 => 'filter',
            4 => 'javascript',
            5 => 'plugin'
        ],
        'docs' => 'https://github.com/sommerregen/grav-plugin-mathjax/blob/master/README.md',
        'bugs' => 'https://github.com/sommerregen/grav-plugin-mathjax/issues',
        'license' => 'MIT/GPL',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'class' => 'subtle',
                    'fields' => [
                        'mathjax' => [
                            'type' => 'tab',
                            'title' => 'PLUGINS.MATHJAX.MATHJAX',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.MATHJAX.PLUGIN_STATUS',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'active' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.MATHJAX.ACTIVE',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'basic' => [
                            'type' => 'tab',
                            'title' => 'PLUGINS.MATHJAX.BASIC_CONFIGURATION',
                            'fields' => [
                                'built_in_css' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.MATHJAX.BUILTIN_CSS',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'built_in_js' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.MATHJAX.BUILTIN_JS',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'weight' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'PLUGINS.MATHJAX.WEIGHT',
                                    'default' => -5,
                                    'help' => 'PLUGINS.MATHJAX.WEIGHT_HELP',
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => -100,
                                        'max' => 100
                                    ]
                                ]
                            ]
                        ],
                        'cdn' => [
                            'type' => 'tab',
                            'title' => 'PLUGINS.MATHJAX.CDN',
                            'fields' => [
                                'CDN.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.MATHJAX.CDN.ENABLED',
                                    'help' => 'PLUGINS.MATHJAX.CDN.ENABLED_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'CDN.url' => [
                                    'type' => 'text',
                                    'label' => 'PLUGINS.MATHJAX.CDN.URL',
                                    'default' => 'https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML',
                                    'placeholder' => 'https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML',
                                    'help' => 'PLUGINS.MATHJAX.CDN.URL_HELP'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
