<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    | Here you can change the default title of your admin panel.
    |
    */

    'title' => 'Tablar',
    'title_prefix' => '',
    'title_postfix' => '',
    'bottom_title' => 'Tablar',
    'current_version' => 'v4.8',


    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo

</a>
    | Here you can change the logo of your admin panel.
    |
    */



    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can set up an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    */

    /*
     *
     * Default path is 'resources/views/vendor/tablar' as null. Set your custom path here If you need.
     */

    'views_path' => null,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look at the layout section here:
    |
    */

    'layout' => 'horizontal',
    //boxed, combo, condensed, fluid, fluid-vertical, horizontal, navbar-overlap, navbar-sticky, rtl, vertical, vertical-right, vertical-transparent

    'layout_light_sidebar' => null,
    'layout_light_topbar' => true,
    'layout_enable_top_header' => false,

    /*
    |--------------------------------------------------------------------------
    | Sticky Navbar for Top Nav
    |--------------------------------------------------------------------------
    |
    | Here you can enable/disable the sticky functionality of Top Navigation Bar.
    |
    | For detailed instructions, you can look at the Top Navigation Bar classes here:
    |
    */

    'sticky_top_nav_bar' => false,

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions, you can look at the admin panel classes here:
    |
    */

    'classes_body' => '',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions, you can look at the urls section here:
    |
    */

    'use_route_url' => true,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password.request',
    'password_email_url' => 'password.email',
    'profile_url' => false,
    'setting_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Display Alert
    |--------------------------------------------------------------------------
    |
    | Display Alert Visibility.
    |
    */
    'display_alert' => false,

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    |
    */

    'menu' => [
        // Navbar items:
    
        [
            'text' => 'Products',
            'icon' => 'ti ti-shopping-cart',
            'url' => '/products'
        ],
        

      


    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    |
    */

    'filters' => [
        TakiElias\Tablar\Menu\Filters\GateFilter::class,
        TakiElias\Tablar\Menu\Filters\HrefFilter::class,
        TakiElias\Tablar\Menu\Filters\SearchFilter::class,
        TakiElias\Tablar\Menu\Filters\ActiveFilter::class,
        TakiElias\Tablar\Menu\Filters\ClassesFilter::class,
        TakiElias\Tablar\Menu\Filters\LangFilter::class,
        TakiElias\Tablar\Menu\Filters\DataFilter::class,
    ],

    

    'vite' => true,
];
