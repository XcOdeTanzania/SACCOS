<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Sidebar configuration
    |--------------------------------------------------------------------------
    |
    | Use this configuration format for a static sidebar menu by adding or
    | removing items. This config is loaded from
    | Http\ViewComposers\SidebarViewComposer.php
    | In that file you can change how to get the sidebar menu configuration,
    | instead of using a static file, you can use a Model to obtain the
    | menu items dinamically from database applying own business logic.
    |
    */
    [
        'text' => 'Main Navigation',
        'heading' => true,
        'translate' => 'sidebar.heading.HEADER'
    ],
    [
        'text' => 'Dashboard',
        'route' => 'dashboard',
        'icon' => 'icon-home',
        'alert' => '3',
        'label' => 'badge badge-info',
        'submenu' => [
            [
                'text' => '',
                'route' => '#'
            ],
            [
                'text' => '',
                'route' => '#'
            ]
        ],
        'translate' => 'sidebar.nav.DASHBOARD'
    ],
    [
        'text' => 'Saccos Info',
        'route' => 'saccosinfo',
        'icon' => 'icon-info',
        'submenu' => [
            [
                'text' => 'Edit Info',
                'route' => 'saccos_info/change',
                'translate' => 'sidebar.nav.element.BUTTON'
            ],
            [
                'text' => 'Allow to change Info',
                'route' =>'saccos_info/allow',
                'translate' => 'sidebar.nav.element.BUTTON'
            ],
            [
                'text' => 'Prevent Reporting',
                'route' =>'saccos_info/prevent',
                'translate' => 'sidebar.nav.element.BUTTON'
            ],


        ],
        'translate' => 'sidebar.nav.element.ELEMENTS'
    ],
    [
        'text' => 'Matengo',
        'route' => 'matengo',
        'icon' => 'icon-layers',
        'submenu' => [
            [
                'text' => '',
                'route' => '#',
                'translate' => 'sidebar.nav.element.BUTTON'
            ],


        ],
        'translate' => 'sidebar.nav.element.ELEMENTS'
    ],

    [
        'text' => 'Users',
        'route' => 'users',
        'icon' => 'icon-user',
        'submenu' => [
            [
                'text' => 'Add user',
                'route' => 'users/add',
                'translate' => 'sidebar.nav.element.BUTTON'
            ],
            [
                'text' => 'Users Information',
                'route' => 'users/info',
                'translate' => 'sidebar.nav.element.BUTTON'
            ],
            [
                'text' => 'Users list',
                'route' => 'users/list',
                'translate' => 'sidebar.nav.element.BUTTON'
            ],


        ],
        'translate' => 'sidebar.nav.element.ELEMENTS'
    ],
    [
        'text' => 'Bank & Cash',
        'route' => 'bank&cash',
        'icon' => 'icon-note',
        'submenu' => [
            [
                'text' => '',
                'route' => '#',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],
    [
        'text' => 'Members',
        'route' => 'charts',
        'icon' => 'icon-people',
        'submenu' => [
            [
                'text' => 'Flot',
                'route' => 'charts/flot',
                'translate' => 'sidebar.nav.chart.FLOT'
            ],


        ],
        'translate' => 'sidebar.nav.chart.CHART'
    ],
    [
        'text' => 'Loans',
        'route' => 'loans',
        'icon' => 'icon-wallet',
        'submenu' => [
            [
                'text' => 'Standard',
                'route' => 'tables/standard',
                'translate' => 'sidebar.nav.table.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.table.TABLE'
    ],
    [
        'text' => 'Deposit',
        'route' => 'deposit',
        'icon' => 'icon-credit-card',
        'submenu' => [
            [
                'text' => 'Withdrawn',
                'route' => 'deposit/withdrawn',
                'translate' => 'sidebar.nav.map.GOOGLE'
            ],

            [
                'text' => 'Deposited',
                'route' => 'deposit/deposited',
                'translate' => 'sidebar.nav.map.GOOGLE'
            ],

            [
                'text' => 'Add Deposit',
                'route' => 'deposit/add',
                'translate' => 'sidebar.nav.map.GOOGLE'
            ],

        ],
        'translate' => 'sidebar.nav.map.MAP'
    ],

    [
        'text' => 'Savings',
        'route' => 'savings',
        'icon' => 'icon-doc',
        'submenu' => [
            [
                'text' => 'Add Saving',
                'route' => 'savings/add',
                'translate' => 'sidebar.nav.pages.LOGIN'
            ],

            [
                'text' => 'Withdraw',
                'route' => 'savings/withdrawn',
                'translate' => 'sidebar.nav.pages.LOGIN'
            ],

            [
                'text' => 'Deposited',
                'route' => 'savings/deposited',
                'translate' => 'sidebar.nav.pages.LOGIN'
            ],

            [
                'text' => 'Types',
                'route' => 'savings/types',
                'translate' => 'sidebar.nav.pages.LOGIN'
            ],

            [
                'text' => 'Members Deposit',
                'route' => 'savings/membersdeposit',
                'translate' => 'sidebar.nav.pages.LOGIN'
            ],

        ],
        'translate' => 'sidebar.nav.pages.PAGES'
    ],

    [
        'text' => 'Assets',
        'route' => 'assets',
        'icon' => 'icon-list',
        'submenu' => [
            [
                'text' => '',
                'route' => '#',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],

    [
        'text' => 'Expenditure',
        'route' => 'bank&cash',
        'icon' => 'icon-graph',
        'submenu' => [
            [
                'text' => '',
                'route' => '#',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],

[
        'text' => 'Financial & Report',
        'route' => 'bank&ashc',
        'icon' => 'icon-docs',
        'submenu' => [
            [
                'text' => '',
                'route' => '#',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],

    [
        'text' => 'General Ledger',
        'route' => 'generalledger',
        'icon' => 'icon-notebook',
        'submenu' => [
            [
                'text' => '',
                'route' => '#',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],
    [
        'text' => 'Estimates',
        'route' => 'estimates',
        'icon' => 'icon-note',
        'submenu' => [
            [
                'text' => '',
                'route' => '#',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],

    [
        'text' => 'Income',
        'route' => 'income',
        'icon' => 'icon-plus',
        'submenu' => [
            [
                'text' => 'Add',
                'route' => 'income/add',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Types',
                'route' => 'income/types',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Add Types',
                'route' => 'income/addtypes',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Reports',
                'route' => 'income/reports',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Provision & Accrual',
                'route' => 'income/registeraccountreceivable',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],

[
        'text' => 'Meetings',
        'route' => 'meetings',
        'icon' => 'icon-calendar',
        'submenu' => [
            [
                'text' => '',
                'route' => '#',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],

[
        'text' => 'Growth',
        'route' => 'growth',
        'icon' => 'icon-chart',
        'submenu' => [
            [
                'text' => '',
                'route' => '#',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],

    [
        'text' => 'Announcements',
        'route' => 'announcements',
        'icon' => 'icon-event',
        'submenu' => [
            [
                'text' => '',
                'route' => '#',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],

    [
        'text' => 'Account',
        'route' => 'account',
        'icon' => 'icon-calculator',
        'submenu' => [
            [
                'text' => '',
                'route' => '#',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],

    [
        'text' => 'Help',
        'route' => 'help',
        'icon' => 'icon-question',
        'submenu' => [
            [
                'text' => '',
                'route' => '#',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],

    [
        'text' => 'Shares',
        'route' => 'shares',
        'icon' => 'icon-pie-chart',
        'submenu' => [
            [
                'text' => 'Shares',
                'route' => 'shares/shares',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Add',
                'route' => 'shares/add',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Withdrawn',
                'route' => 'shares/withdrawn',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Sales Report',
                'route' => 'shares/salesreport',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],

];
