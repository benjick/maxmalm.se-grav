<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/reading_time/blueprints.yaml',
    'modified' => 1431114975,
    'data' => [
        'name' => 'Reading Time',
        'version' => '1.1.3',
        'description' => 'Add reading time to your pages.',
        'icon' => 'clock-o',
        'author' => [
            'name' => 'NunoPress LLC',
            'email' => 'hello@nunopress.com',
            'url' => 'http://nunopress.com'
        ],
        'homepage' => 'https://github.com/nunopress/grav-plugin-reading_time',
        'keywords' => 'readingtime, plugin, twig',
        'bugs' => 'https://github.com/nunopress/grav-plugin-reading_time/issues',
        'docs' => 'https://github.com/nunopress/grav-plugin-reading_time/blob/develop/README.md',
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
                ]
            ]
        ]
    ]
];
