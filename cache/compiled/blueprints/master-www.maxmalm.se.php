<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'checksum' => '3b59b8b70494474c07861cba03026224:8b191bc9835a75f016d366d70be51fdb',
    'files' => [
        'user/plugins' => [
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/blueprints.yaml',
                'modified' => 1431114478
            ],
            'plugins/reading_time' => [
                'file' => 'user/plugins/reading_time/blueprints.yaml',
                'modified' => 1431114975
            ],
            'plugins/readingtime' => [
                'file' => 'user/plugins/readingtime/blueprints.yaml',
                'modified' => 1421068990
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/blueprints.yaml',
                'modified' => 1431114480
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/blueprints.yaml',
                'modified' => 1431114476
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/blueprints.yaml',
                'modified' => 1431114479
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/blueprints.yaml',
                'modified' => 1421061420
            ],
            'plugins/jscomments' => [
                'file' => 'user/plugins/jscomments/blueprints.yaml',
                'modified' => 1431114477
            ]
        ],
        'system/blueprints/config' => [
            'streams' => [
                'file' => 'system/blueprints/config/streams.yaml',
                'modified' => 1431114438
            ],
            'site' => [
                'file' => 'system/blueprints/config/site.yaml',
                'modified' => 1431114438
            ],
            'media' => [
                'file' => 'system/blueprints/config/media.yaml',
                'modified' => 1431114438
            ],
            'system' => [
                'file' => 'system/blueprints/config/system.yaml',
                'modified' => 1431114438
            ]
        ]
    ],
    'data' => [
        'items' => [
            'plugins.pagination.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.pagination.enabled'
            ],
            'plugins.pagination.built_in_css' => [
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
                ],
                'name' => 'plugins.pagination.built_in_css'
            ],
            'plugins.reading_time.enabled' => [
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
                ],
                'name' => 'plugins.reading_time.enabled'
            ],
            'plugins.readingtime.enabled' => [
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
                ],
                'name' => 'plugins.readingtime.enabled'
            ],
            'plugins.simplesearch.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.enabled'
            ],
            'plugins.simplesearch.built_in_css' => [
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
                ],
                'name' => 'plugins.simplesearch.built_in_css'
            ],
            'plugins.simplesearch.filters' => [
                'type' => 'text',
                'label' => 'Category filter',
                'help' => 'Comma separated list of category names',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.simplesearch.filters'
            ],
            'plugins.simplesearch.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Filter Combinator',
                'default' => 'and',
                'options' => [
                    'and' => 'And - Boolean &&',
                    'or' => 'Or - Boolean ||'
                ],
                'name' => 'plugins.simplesearch.filter_combinator'
            ],
            'plugins.feed.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.feed.enabled'
            ],
            'plugins.feed.count' => [
                'type' => 'text',
                'label' => 'Feed count',
                'validate' => [
                    'type' => 'int',
                    'min' => 10,
                    'max' => 1000
                ],
                'name' => 'plugins.feed.count'
            ],
            'plugins.feed.description' => [
                'type' => 'textarea',
                'label' => 'Description',
                'name' => 'plugins.feed.description'
            ],
            'plugins.feed.lang' => [
                'type' => 'text',
                'label' => 'Feed language code',
                'placeholder' => 'en-us',
                'validate' => [
                    'pattern' => '[a-zA-Z]{2,3}-a-zA-Z]{2,3}'
                ],
                'name' => 'plugins.feed.lang'
            ],
            'plugins.feed.length' => [
                'type' => 'text',
                'label' => 'Feed Length',
                'validate' => [
                    'type' => 'int',
                    'min' => 10,
                    'max' => 10000
                ],
                'name' => 'plugins.feed.length'
            ],
            'plugins.problems.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.problems.enabled'
            ],
            'plugins.error.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.error.enabled'
            ],
            'plugins.jscomments.enabled' => [
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
                ],
                'name' => 'plugins.jscomments.enabled'
            ],
            'plugins.jscomments.provider' => [
                'type' => 'select',
                'label' => 'Default provider',
                'options' => [
                    'disqus' => 'Disqus',
                    'intensedebate' => 'IntenseDebate',
                    'facebook' => 'Facebook',
                    'muut' => 'Muut'
                ],
                'name' => 'plugins.jscomments.provider'
            ],
            'plugins.jscomments.providers.disqus.shortname' => [
                'type' => 'text',
                'label' => 'Shortname',
                'name' => 'plugins.jscomments.providers.disqus.shortname'
            ],
            'plugins.jscomments.providers.intensedebate.acct' => [
                'type' => 'text',
                'label' => 'ACCT',
                'name' => 'plugins.jscomments.providers.intensedebate.acct'
            ],
            'plugins.jscomments.providers.facebook.appId' => [
                'type' => 'text',
                'label' => 'appId',
                'name' => 'plugins.jscomments.providers.facebook.appId'
            ],
            'plugins.jscomments.providers.facebook.lang' => [
                'type' => 'text',
                'label' => 'Lang',
                'name' => 'plugins.jscomments.providers.facebook.lang'
            ],
            'plugins.jscomments.providers.facebook.numposts' => [
                'type' => 'text',
                'label' => 'Number of posts',
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.jscomments.providers.facebook.numposts'
            ],
            'plugins.jscomments.providers.facebook.colorscheme' => [
                'type' => 'select',
                'label' => 'Color scheme',
                'options' => [
                    'light' => 'Light',
                    'dark' => 'Dark'
                ],
                'name' => 'plugins.jscomments.providers.facebook.colorscheme'
            ],
            'plugins.jscomments.providers.facebook.width' => [
                'type' => 'text',
                'label' => 'Width',
                'name' => 'plugins.jscomments.providers.facebook.width'
            ],
            'plugins.jscomments.providers.muut.forum' => [
                'type' => 'text',
                'label' => 'Forum name',
                'name' => 'plugins.jscomments.providers.muut.forum'
            ],
            'plugins.jscomments.providers.muut.channel' => [
                'type' => 'text',
                'label' => 'Channel',
                'name' => 'plugins.jscomments.providers.muut.channel'
            ],
            'plugins.jscomments.providers.muut.show_online' => [
                'type' => 'toggle',
                'label' => 'Show online',
                'highlight' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'name' => 'plugins.jscomments.providers.muut.show_online'
            ],
            'plugins.jscomments.providers.muut.show_title' => [
                'type' => 'toggle',
                'label' => 'Show title',
                'highlight' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'name' => 'plugins.jscomments.providers.muut.show_title'
            ],
            'plugins.jscomments.providers.muut.upload' => [
                'type' => 'toggle',
                'label' => 'Upload',
                'highlight' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'name' => 'plugins.jscomments.providers.muut.upload'
            ],
            'plugins.jscomments.providers.muut.share' => [
                'type' => 'toggle',
                'label' => 'Share',
                'highlight' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'name' => 'plugins.jscomments.providers.muut.share'
            ],
            'plugins.jscomments.providers.muut.widget' => [
                'type' => 'toggle',
                'label' => 'Widget',
                'highlight' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'name' => 'plugins.jscomments.providers.muut.widget'
            ],
            'plugins.jscomments.providers.muut.lang' => [
                'type' => 'text',
                'label' => 'Language',
                'name' => 'plugins.jscomments.providers.muut.lang'
            ],
            'streams.schemes.xxx' => [
                'type' => 'array',
                'name' => 'streams.schemes.xxx'
            ],
            'site.title' => [
                'type' => 'text',
                'label' => 'Site Title',
                'size' => 'large',
                'placeholder' => 'Site wide title',
                'help' => 'Default title for your site',
                'name' => 'site.title'
            ],
            'site.author.name' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Default Author',
                'name' => 'site.author.name'
            ],
            'site.author.email' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Default Email',
                'name' => 'site.author.email'
            ],
            'site.taxonomies' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Taxonomy Types',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'site.taxonomies'
            ],
            'site.metadata' => [
                'type' => 'array',
                'label' => 'Metadata',
                'placeholder_key' => 'Name',
                'placeholder_value' => 'Content',
                'name' => 'site.metadata'
            ],
            'site.blog.route' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Blog URL',
                'name' => 'site.blog.route'
            ],
            'site.summary.size' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Summary Size',
                'validate' => NULL,
                'min' => 0,
                'max' => 65536,
                'name' => 'site.summary.size'
            ],
            'site.routes' => [
                'type' => 'array',
                'label' => 'Custom',
                'placeholder_key' => '/your/alias',
                'placeholder_value' => '/your/route',
                'name' => 'site.routes'
            ],
            'system.home.alias' => [
                'type' => 'pages',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Home Page',
                'show_all' => false,
                'show_modular' => false,
                'show_root' => false,
                'help' => 'The page that Grav will use as the default landing page',
                'name' => 'system.home.alias'
            ],
            'system.pages.theme' => [
                'type' => 'themeselect',
                'classes' => 'fancy',
                'size' => 'medium',
                'label' => 'Default Theme',
                'help' => 'Set the theme (defaults to \'default\')',
                'name' => 'system.pages.theme'
            ],
            'system.pages.markdown_extra' => [
                'type' => 'toggle',
                'label' => 'Markdown Extra',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown_extra'
            ],
            'system.pages.process' => [
                'type' => 'checkboxes',
                'label' => 'Process',
                'default' => [
                    0 => [
                        'markdown' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'markdown' => 'Markdown',
                    'twig' => 'Twig'
                ],
                'use' => 'keys',
                'name' => 'system.pages.process'
            ],
            'system.pages.dateformat.short' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Short Date Format',
                'help' => 'Set the short date format',
                'default' => 'jS M Y',
                'options' => [
                    'F jS \\\\a\\\\t g:ia' => 'January 1st at 11:59pm',
                    'l jS of F g:i A' => 'Monday 1st of January at 11:59 PM',
                    'D, m M Y G:i:s' => 'Mon, 01 Jan 2014 23:59:00',
                    'd-m-y G:i' => '01-01-14 23:59',
                    'jS M Y' => '10th Feb 2014'
                ],
                'name' => 'system.pages.dateformat.short'
            ],
            'system.pages.dateformat.long' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Long Date Format',
                'help' => 'Set the long date format',
                'options' => [
                    'F jS \\a\\t g:ia' => 'January 1st at 11:59pm',
                    'l jS of F g:i A' => 'Monday 1st of January at 11:59 PM',
                    'D, m M Y G:i:s' => 'Mon, 01 Jan 2014 23:59:00',
                    'd-m-y G:i' => '01-01-14 23:59',
                    'jS M Y' => '10th Feb 2014'
                ],
                'name' => 'system.pages.dateformat.long'
            ],
            'system.pages.order.by' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Default Ordering',
                'options' => [
                    'default' => 'Default - based on folder name',
                    'folder' => 'Folder - based on prefix-less folder name',
                    'title' => 'Title - based on title field in header',
                    'date' => 'Date - based on date field in header'
                ],
                'name' => 'system.pages.order.by'
            ],
            'system.pages.order.dir' => [
                'type' => 'toggle',
                'label' => 'Default Order Direction',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'system.pages.order.dir'
            ],
            'system.pages.list.count' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Default Item Count',
                'help' => 'Default max pages count',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.list.count'
            ],
            'system.pages.events.page' => [
                'type' => 'toggle',
                'label' => 'Page events',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.events.page'
            ],
            'system.pages.events.twig' => [
                'type' => 'toggle',
                'label' => 'Twig events',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.events.twig'
            ],
            'system.cache.enabled' => [
                'type' => 'toggle',
                'label' => 'Caching',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.enabled'
            ],
            'system.cache.check.method' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Cache Check Method',
                'options' => [
                    'file' => 'File',
                    'folder' => 'Folder',
                    'none' => 'None'
                ],
                'name' => 'system.cache.check.method'
            ],
            'system.cache.driver' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Cache driver',
                'options' => [
                    'auto' => 'Auto detect',
                    'file' => 'File',
                    'apc' => 'APC',
                    'xcache' => 'XCache',
                    'memcache' => 'MemCache',
                    'wincache' => 'WinCache'
                ],
                'name' => 'system.cache.driver'
            ],
            'system.cache.prefix' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Cache Prefix',
                'placeholder' => 'Derived from base URL (override by entering random string)',
                'name' => 'system.cache.prefix'
            ],
            'system.twig.cache' => [
                'type' => 'toggle',
                'label' => 'Twig caching',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.cache'
            ],
            'system.twig.debug' => [
                'type' => 'toggle',
                'label' => 'Twig debug',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.debug'
            ],
            'system.twig.auto_reload' => [
                'type' => 'toggle',
                'label' => 'Detect changes',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.auto_reload'
            ],
            'system.twig.autoescape' => [
                'type' => 'toggle',
                'label' => 'Autoescape variables',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.autoescape'
            ],
            'system.assets.css_pipeline' => [
                'type' => 'toggle',
                'label' => 'CSS Pipeline',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline'
            ],
            'system.assets.css_minify' => [
                'type' => 'toggle',
                'label' => 'CSS Minify',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify'
            ],
            'system.assets.css_minify_windows' => [
                'type' => 'toggle',
                'label' => 'CSS Minify Windows Override',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify_windows'
            ],
            'system.assets.css_rewrite' => [
                'type' => 'toggle',
                'label' => 'CSS Rewrite',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_rewrite'
            ],
            'system.assets.js_pipeline' => [
                'type' => 'toggle',
                'label' => 'JavaScript Pipeline',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline'
            ],
            'system.assets.js_minify' => [
                'type' => 'toggle',
                'label' => 'JavaScript Minify',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_minify'
            ],
            'system.debugger.enabled' => [
                'type' => 'toggle',
                'label' => 'Debugger',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.enabled'
            ],
            'system.debugger.mode' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Mode',
                'options' => [
                    'detect' => 'Auto-Detect',
                    'development' => 'Development',
                    'production' => 'Production'
                ],
                'name' => 'system.debugger.mode'
            ],
            'system.debugger.strict' => [
                'type' => 'toggle',
                'label' => 'Strict',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.strict'
            ],
            'system.debugger.max_depth' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Detail Level',
                'placeholder' => 'How many nested levels to display for objects or arrays',
                'options' => [
                    1 => '1 level',
                    2 => '2 levels',
                    3 => '3 levels',
                    4 => '4 levels',
                    5 => '5 levels',
                    6 => '6 levels',
                    7 => '7 levels',
                    8 => '8 levels',
                    9 => '9 levels',
                    10 => '10 levels'
                ],
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.debugger.max_depth'
            ],
            'system.debugger.log.enabled' => [
                'type' => 'toggle',
                'label' => 'Logging',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.log.enabled'
            ],
            'system.debugger.shutdown.close_connection' => [
                'type' => 'toggle',
                'label' => 'Shutdown Close Connection',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.shutdown.close_connection'
            ]
        ],
        'rules' => [
            
        ],
        'nested' => [
            'plugins' => [
                'pagination' => [
                    'enabled' => 'plugins.pagination.enabled',
                    'built_in_css' => 'plugins.pagination.built_in_css'
                ],
                'reading_time' => [
                    'enabled' => 'plugins.reading_time.enabled'
                ],
                'readingtime' => [
                    'enabled' => 'plugins.readingtime.enabled'
                ],
                'simplesearch' => [
                    'enabled' => 'plugins.simplesearch.enabled',
                    'built_in_css' => 'plugins.simplesearch.built_in_css',
                    'filters' => 'plugins.simplesearch.filters',
                    'filter_combinator' => 'plugins.simplesearch.filter_combinator'
                ],
                'feed' => [
                    'enabled' => 'plugins.feed.enabled',
                    'count' => 'plugins.feed.count',
                    'description' => 'plugins.feed.description',
                    'lang' => 'plugins.feed.lang',
                    'length' => 'plugins.feed.length'
                ],
                'problems' => [
                    'enabled' => 'plugins.problems.enabled'
                ],
                'error' => [
                    'enabled' => 'plugins.error.enabled'
                ],
                'jscomments' => [
                    'enabled' => 'plugins.jscomments.enabled',
                    'provider' => 'plugins.jscomments.provider',
                    'providers' => [
                        'disqus' => [
                            'shortname' => 'plugins.jscomments.providers.disqus.shortname'
                        ],
                        'intensedebate' => [
                            'acct' => 'plugins.jscomments.providers.intensedebate.acct'
                        ],
                        'facebook' => [
                            'appId' => 'plugins.jscomments.providers.facebook.appId',
                            'lang' => 'plugins.jscomments.providers.facebook.lang',
                            'numposts' => 'plugins.jscomments.providers.facebook.numposts',
                            'colorscheme' => 'plugins.jscomments.providers.facebook.colorscheme',
                            'width' => 'plugins.jscomments.providers.facebook.width'
                        ],
                        'muut' => [
                            'forum' => 'plugins.jscomments.providers.muut.forum',
                            'channel' => 'plugins.jscomments.providers.muut.channel',
                            'show_online' => 'plugins.jscomments.providers.muut.show_online',
                            'show_title' => 'plugins.jscomments.providers.muut.show_title',
                            'upload' => 'plugins.jscomments.providers.muut.upload',
                            'share' => 'plugins.jscomments.providers.muut.share',
                            'widget' => 'plugins.jscomments.providers.muut.widget',
                            'lang' => 'plugins.jscomments.providers.muut.lang'
                        ]
                    ]
                ]
            ],
            'streams' => [
                'schemes' => [
                    'xxx' => 'streams.schemes.xxx'
                ]
            ],
            'site' => [
                'title' => 'site.title',
                'author' => [
                    'name' => 'site.author.name',
                    'email' => 'site.author.email'
                ],
                'taxonomies' => 'site.taxonomies',
                'metadata' => 'site.metadata',
                'blog' => [
                    'route' => 'site.blog.route'
                ],
                'summary' => [
                    'size' => 'site.summary.size'
                ],
                'routes' => 'site.routes'
            ],
            'system' => [
                'home' => [
                    'alias' => 'system.home.alias'
                ],
                'pages' => [
                    'theme' => 'system.pages.theme',
                    'markdown_extra' => 'system.pages.markdown_extra',
                    'process' => 'system.pages.process',
                    'dateformat' => [
                        'short' => 'system.pages.dateformat.short',
                        'long' => 'system.pages.dateformat.long'
                    ],
                    'order' => [
                        'by' => 'system.pages.order.by',
                        'dir' => 'system.pages.order.dir'
                    ],
                    'list' => [
                        'count' => 'system.pages.list.count'
                    ],
                    'events' => [
                        'page' => 'system.pages.events.page',
                        'twig' => 'system.pages.events.twig'
                    ]
                ],
                'cache' => [
                    'enabled' => 'system.cache.enabled',
                    'check' => [
                        'method' => 'system.cache.check.method'
                    ],
                    'driver' => 'system.cache.driver',
                    'prefix' => 'system.cache.prefix'
                ],
                'twig' => [
                    'cache' => 'system.twig.cache',
                    'debug' => 'system.twig.debug',
                    'auto_reload' => 'system.twig.auto_reload',
                    'autoescape' => 'system.twig.autoescape'
                ],
                'assets' => [
                    'css_pipeline' => 'system.assets.css_pipeline',
                    'css_minify' => 'system.assets.css_minify',
                    'css_minify_windows' => 'system.assets.css_minify_windows',
                    'css_rewrite' => 'system.assets.css_rewrite',
                    'js_pipeline' => 'system.assets.js_pipeline',
                    'js_minify' => 'system.assets.js_minify'
                ],
                'debugger' => [
                    'enabled' => 'system.debugger.enabled',
                    'mode' => 'system.debugger.mode',
                    'strict' => 'system.debugger.strict',
                    'max_depth' => 'system.debugger.max_depth',
                    'log' => [
                        'enabled' => 'system.debugger.log.enabled'
                    ],
                    'shutdown' => [
                        'close_connection' => 'system.debugger.shutdown.close_connection'
                    ]
                ]
            ]
        ],
        'filter' => [
            'validation' => true
        ]
    ]
];
