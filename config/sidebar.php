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
        'route' => '/',
        'icon' => 'icon-home',
        'alert' => '3',
        'label' => 'badge badge-info',
        // 'submenu' => [
        //     [
        //         'text' => '',
        //         'route' => '/'
        //     ],

        // ],
        // 'translate' => 'sidebar.nav.DASHBOARD'
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
        'text' => 'Budgets',
        'route' => 'Budgets',
        'icon' => 'icon-layers',
        'submenu' => [
            [
                'text' => 'Add budgets',
                'route' => 'budgets/add',
                'translate' => 'sidebar.nav.element.BUTTON'
            ],
            [
                'text' => 'List of all budgets',
                'route' => 'budgets/list',
                'translate' => 'sidebar.nav.element.BUTTON'
            ],
            [
                'text' => 'Incentives',
                'route' => 'budgets/incentives',
                'translate' => 'sidebar.nav.element.BUTTON'
            ],
            [
                'text' => 'Incentives Statements',
                'route' => 'budgets/statements',
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
                'text' => 'Money Banks',
                'route' => '/bank_cash/moneybanks',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],
            [
                'text' => 'Bank Accounts',
                'route' => '/bank_cash/accounts',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],
            [
                'text' => 'Bank Reminders',
                'route' => '/bank_cash/reminders',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],
            [
                'text' => 'Cash Reminders',
                'route' => '/bank_cash/cash',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],
            [
                'text' => 'Cash Money',
                'route' => '/bank_cash/moneyCash',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],
            [
                'text' => 'Cashier Transactions',
                'route' => '/bank_cash/transactions',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],
    [
        'text' => 'Members',
        'route' => 'members',
        'icon' => 'icon-people',
        'submenu' => [
            [
                'text' => 'Additional Information',
                'route' => 'members/additional',
                'translate' => 'sidebar.nav.chart.FLOT'
            ],
            [
                'text' => 'Register a Member',
                'route' => 'members/register',
                'translate' => 'sidebar.nav.chart.FLOT'
            ],
            [
                'text' => 'Members List',
                'route' => 'members/list',
                'translate' => 'sidebar.nav.chart.FLOT'
            ],
            [
                'text' => 'Message to Members',
                'route' => 'members/messages',
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
                'text' => 'Loans Type',
                'route' => 'loans/types',
                'translate' => 'sidebar.nav.table.STANDARD'
            ],
            [
                'text' => 'Securities Arrangements',
                'route' => 'loans/arrangement',
                'translate' => 'sidebar.nav.table.STANDARD'
            ],
            [
                'text' => 'Local Loans',
                'route' => 'loans/local',
                'translate' => 'sidebar.nav.table.STANDARD'
            ],
            [
                'text' => 'External Loans',
                'route' => 'loans/external',
                'translate' => 'sidebar.nav.table.STANDARD'
            ],
            [
                'text' => 'PendingApproval',
                'route' => 'loans/pendingApproval',
                'translate' => 'sidebar.nav.table.STANDARD'
            ],
            [
                'text' => 'Loans Deposit',
                'route' => 'loans/deposit',
                'translate' => 'sidebar.nav.table.STANDARD'
            ],
            [
                'text' => 'External Debtor',
                'route' => 'loans/debtor',
                'translate' => 'sidebar.nav.table.STANDARD'
            ],
            [
                'text' => 'List of external debtor',
                'route' => 'loans/list',
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
                'text' => 'All Assets',
                'route' => 'assets/allassets',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'New Asset',
                'route' => 'assets/newasset',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'New assset category',
                'route' => 'assets/newassetcategory',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Asset Categories',
                'route' => 'assets/assetcategories',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'New Depreciation Record',
                'route' => 'assets/newdepreciationrecord',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Depreciation Records',
                'route' => 'assets/depreciationrecords',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],

    [
        'text' => 'Expenditure',
        'route' => 'expenditure',
        'icon' => 'icon-graph',
        'submenu' => [
            [
                'text' => 'Add',
                'route' => 'expenses/add',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Add Saving',
                'route' => 'expenses/addsaving',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

             [
                'text' => 'Reports',
                'route' => 'expenses/reports',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Prepaid Expenses',
                'route' => 'expenses/prepaidexpenses',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'PrePaid Account',
                'route' => 'expenses/prepaidaccount',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Special Imprest',
                'route' => 'expenses/specialimprest',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],
            [
                'text' => 'Provision & Accrual',
                'route' => 'expenses/provisionandaccrual',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Group Category',
                'route' => 'expenses/groupcategory',
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
                'text' => 'Balance Sheet',
                'route' => 'financialReports/balancesheet',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Balance ',
                'route' => 'financialReports/balance',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

             [
                'text' => 'Change of Capital ',
                'route' => 'financialReports/changeofcapital',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Income & Expenses ',
                'route' => 'financialReports/incomeandexpenses',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

             [
                'text' => 'Members Information ',
                'route' => 'financialReports/membersinfo',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],
             [
                'text' => ' Non-Members Information ',
                'route' => 'financialReports/nonmembersinfo',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

             [
                'text' => 'Divident',
                'route' => 'financialReports/divident',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

             [
                'text' => 'Loan Balance',
                'route' => 'financialReports/loanbalance',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],

    [
        'text' => 'General Ledger',
        'route' => 'generalLedger',
        'icon' => 'icon-notebook',
        'submenu' => [
            [
                'text' => 'Incomes',
                'route' => 'generalLedger/incomes',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Expenditures',
                'route' => 'generalLedger/expenditures',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Savings',
                'route' => 'generalLedger/savings',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Deposit',
                'route' => 'generalLedger/deposit',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Special Deposit',
                'route' => 'generalLedger/specialdeposit',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Shares',
                'route' => 'generalLedger/shares',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Internal Loans',
                'route' => 'generalLedger/internalloans',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'External Loans',
                'route' => 'generalLedger/externalloans',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Investment',
                'route' => 'generalLedger/investment',
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
                'text' => 'View',
                'route' => 'estimates/view',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Edit Expenditure',
                'route' => 'estimates/editexpenses',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Edit Income',
                'route' => 'estimates/editincome',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Prepare Expenditure',
                'route' => 'estimates/prepareexpenses',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Prepare Income',
                'route' => 'estimates/prepareincome',
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
                'text' => 'New Meeting information',
                'route' => 'meetings/newmeetinginformation',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'List Of Meetings',
                'route' => 'meetings/listofmeetings',
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
                'text' => 'Received Savings',
                'route' => 'growth/receivedsavings',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Received Deposit',
                'route' => 'growth/receiveddeposit',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Sold Shares',
                'route' => 'growth/soldshares',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

            [
                'text' => 'Disbursed Loans',
                'route' => 'growth/disbursedloans',
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
                'text' => 'Office Announcements',
                'route' => 'announcements/listofannouncements',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],

        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],

    // [
    //     'text' => 'Account',
    //     'route' => 'account',
    //     'icon' => 'icon-calculator',
    //     'submenu' => [
    //         [
    //             'text' => '',
    //             'route' => '#',
    //             'translate' => 'sidebar.nav.form.STANDARD'
    //         ],

    //     ],
    //     'translate' => 'sidebar.nav.form.FORM'
    // ],

    [
        'text' => 'Help',
        'route' => 'help',
        'icon' => 'icon-question',
        'submenu' => [
            [
                'text' => 'Help Details',
                'route' => 'help/helpdetails',
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
