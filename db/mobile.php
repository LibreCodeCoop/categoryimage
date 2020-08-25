<?php
$x = 1;
$addons = [
    'block_categoryimage' => [ // Plugin identifier
        'handlers' => [ // Different places where the plugin will display content.
            'blockcategoryimage' => [ // Handler unique name (alphanumeric).
                'displaydata' => [
                    'icon' => $CFG->wwwroot . '/blocks/categoryimage/pix/icon.gif',
                    'class' => '',
                ],
                'delegate' => 'CoreBlockDelegate', // Delegate (where to display the link to the plugin)
                'method' => 'mobile_categoryimage_view', // Main function in \block_categoryimage\output\mobile
                'offlinefunctions' => [
                ], // Function that needs to be downloaded for offline.
            ],
        ],
        'lang' => [ // Language strings that are used in all the handlers.
            ['pluginname', 'categoryimage'],
            ['summaryofattempts', 'categoryimage'],
        ],
    ],
];