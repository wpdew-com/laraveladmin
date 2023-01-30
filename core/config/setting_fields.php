<?php

return [

    'app' => [

        'title' => 'General',
        'desc' => 'All the general settings for application.',
        'icon' => 'fas fa-fw fa-sliders-h',

        'elements' => [
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_name',
                'label' => 'App Name',
                'rules' => 'required|min:2|max:50'
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_description',
                'label' => 'App description',
                'rules' => 'required|min:2|max:158'
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_keywords',
                'label' => 'App keywords',
                'rules' => 'required|min:2|max:255'
            ],
            [
                'type' => 'select',
                'data' => 'string',
                'name' => 'app_theme',
                'label' => 'Theme Name',
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => 'form-control', // class for input
                'options' => [
                    'default' => 'Default',
                    'digital' => 'Digital',
                ]
                ],
                [
                    'type' => 'selecttranslate',
                    'data' => 'select',
                    'name' => 'app_maintenance_mode',
                    'label' => 'App maintenance mode',
                    'rules' => 'required|boolean', // validation rule of laravel
                    'class' => 'form-control', // class for input
                    'options' => [
                        '1' => 'Yes',
                        '0' => 'No'
                    ]
                ],
                [
                    'type' => 'text',
                    'data' => 'string',
                    'name' => 'app_copyright',
                    'label' => 'App copyright',
                    'rules' => 'required|min:2|max:350'
                ]
        ]
    ],

    'Locale' => [

        'title' => 'Localization',
        'desc' => 'Set your localization settings like format of Date and number etc.',
        'icon' => 'fas fa-fw fa-sliders-h',

        'elements' => [
            [
                'type' => 'select',
                'data' => 'string',
                'name' => 'date_format',
                'label' => 'Date format',
                'rules' => 'required',
                'class' => 'form-control',
                'options' => [
                    'd.m.Y' => date('d.m.Y'),
                    'd.m.y' => date("d.m.y"),
                    'j, n, Y' => date("j, n, Y"),
                    'M j, Y' => date("M j, Y"),
                    'D, M j, Y' => date('D, M j, Y')
                ],
                'value' => 'm/d/Y'
            ],
            [
                'type' => 'select',
                'data' => 'string',
                'name' => 'time_format',
                'label' => 'Time format',
                'rules' => 'string',
                'class' => 'form-control',
                'options' => [
                    'g:i a' => date('g:i a') . ' (12-hour format)',
                    'g:i:s A' => date('g:i A') . ' (12-hour format)',
                    'G:i' => date("G:i"). ' (24-hour format)',
                    'h:i:s a' => date("h:i:s a") . ' (12-hour with leading zero)',
                    'h:i:s A' => date("h:i:s A")
                ],
                'value' => 'g:i a'
            ],
            [
                'type' => 'select',
                'data' => 'string',
                'name' => 'timezone',
                'label' => 'Timezone',
                'class' => 'form-control',
                'rules' => 'string',
                'options' => array_combine(
                    DateTimeZone::listIdentifiers(DateTimeZone::ALL),
                    DateTimeZone::listIdentifiers(DateTimeZone::ALL)
                ),
                'value' => config('app.timezone', 'UTC')
            ],
            [
                'type' => 'select',
                'data' => 'string',
                'name' => 'app_language',
                'label' => 'App language',
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => 'form-control', // class for input
                'options' => [
                    'en' => 'English',
                    'ru' => 'Русский',
                    'uk' => 'Українська',
                ]
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'tg_support',
                'label' => 'Tg support link',
                'rules' => ''
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_support_email',
                'label' => 'App support email',
                'rules' => 'required|min:2|max:150'
            ]
        ]
    ],

    'email' => [

        'title' => 'Email',
        'desc' => 'Email settings for app',
        'icon' => 'fas fa-fw fa-sliders-h',

        'elements' => [
            [
                'type' => 'select',
                'name' => 'MAIL_MAILER',
                'label' => 'MAIL_MAILER',
                'rules' => 'string',
                'class' => 'form-control',
                'options' => [
                    'smtp' => 'smtp',
                    'sendmail' => 'sendmail'
                ],
            ],
            [
                'type' => 'text',
                'name' => 'MAIL_HOST',
                'label' => 'MAIL_HOST',
                'rules' => ''
            ],
            [
                'type' => 'text',
                'name' => 'MAIL_PORT',
                'label' => 'MAIL_PORT',
                'rules' => ''
            ],
            [
                'type' => 'text',
                'name' => 'MAIL_USERNAME',
                'label' => 'MAIL_USERNAME',
                'rules' => ''
            ],
            [
                'type' => 'text',
                'name' => 'MAIL_PASSWORD',
                'label' => 'MAIL_PASSWORD',
                'rules' => ''
            ],
            [
                'type' => 'text',
                'name' => 'MAIL_FROM_ADDRESS',
                'label' => 'MAIL_FROM_ADDRESS',
                'rules' => ''
            ]
        ]
    ],

    'social' => [

        'title' => 'Social settings',
        'desc' => 'Social settings for app',
        'icon' => 'fas fa-fw fa-sliders-h',

        'elements' => [
            [
                'type' => 'text',
                'name' => 'facebook_link',
                'label' => 'facebook link',
                'rules' => ''
            ],
            [
                'type' => 'text',
                'name' => 'instagram_link',
                'label' => 'instagram link',
                'rules' => ''
            ],
            [
                'type' => 'text',
                'name' => 'youtube_link',
                'label' => 'youtube link',
                'rules' => ''
            ],
            [
                'type' => 'text',
                'name' => 'telegram_link',
                'label' => 'telegram link',
                'rules' => ''
            ],
            [
                'type' => 'text',
                'name' => 'twitter_link',
                'label' => 'twitter link',
                'rules' => ''
            ]
        ]
    ],



];
