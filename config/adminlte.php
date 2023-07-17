<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'HormoVida',

    'title_prefix' => ' ',

    'title_postfix' => ' ',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>HormoVida</b> Admin',

    'logo_mini' => '<i class="fa fa-fw fa-home"></i>',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        '',
        //     <div class="painel-do-usuario">
        //     <div class="pull-left image" >
        //       <img src="/imagens/avatar/{{Auth::user()->avatar}}" class="img-circle" alt="Imagem do usuário" >
        //     </div>
        //     <div class="informacao-esquerda">
        //     @if (Auth::guest())
        //       <p>admin@admin.com</p>
        //       <a href="#" style="color:#c18a8a;"><i class="fa fa-circle text-success"style="color:red;"></i>Desconectado</a>
        //       @else

        //       <p>{{$nomeReduzido= str_limit(Auth::user()->name, 20) }}</p>
        //       <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        //       @endif
        //     </div>
        //   </div>
        [
            'text' => 'Inicio',
            'icon' => 'home',
            'url'  => '/home',
            'can'  => 'adm',
        ],
        [
            'text' => 'Inicio',
            'icon' => 'home',
            'url'  => '/home',
            'can'  => 'medic',
        ],
        [
            'text' => 'Meu perfil',
            'icon' => 'smile-o',
            'can'  => 'adm',
            'url'  => '/Profile',
        ],
        [
            'text' => 'Meu perfil',
            'icon' => 'smile-o',
            'can'  => 'user',
            'url'  => '/Profile',
        ],
        [
            'text' => 'Meus Exames',
            'icon' => 'user-md',
            'url'  => '/ExamesPaciente',
            'can'  => 'adm',
        ],
        [
            'text' => 'Meus Exames',
            'icon' => 'user-md',
            'url'  => '/ExamesPaciente',
            'can'  => 'user',
        ],
        [
            'text' => 'Agendar Exames',
            'icon' => 'calendar-plus-o',
            'url'  => '/event/add/client',
        ],

        [
            'text'    => 'Consulta',
            'icon'    => 'folder-open',
            'can'  => 'adm',
            'submenu' => [
                [
                    'text' => 'Especialidade médicos',
                    'icon' => 'user-plus',
                    'url'  => '/specialty',
                ],
                [
                    'text' => 'Médicos',
                    'icon' => 'user-md',
                    'url'  => '/Medicos',
                ],
                [
                    'text' => 'Pacientes',
                    'icon' => 'user',
                    'url'  => '/Pacientes',
                ],
                [
                    'text' => 'Funcionários',
                    'icon' => 'user',
                    'url'  => '/Funcionarios',
                ],
                [
                    'text' => 'Equipamentos',
                    'icon' => 'plug',
                    'url'  => '/equipament',
                ],
                [
                    'text' => 'Pessoas',
                    'icon' => 'user-plus',
                    'url'  => '/people',
                ],
            ],
        ],
        [
            'text'    => 'Agenda',
            'icon'    => 'calendar-minus-o',
            'can'  => 'adm',
            'submenu' => [
                [
                    'text' => 'Agendar meu horário',
                    'icon' => 'calendar-plus-o',
                    'url'  => '/event/add',
                ],
                [
                    'text' => 'Consulta',
                    'icon' => 'cube',
                    'can'  => 'adm',
                    'url'  => '/event',
                ],
            ],
        ],
        [
            'text' => 'Exames',
            'icon' => 'medkit',
            'can'  => 'adm',
            'url'  => '/Exam',
        ],
        [
            'text' => 'Exames',
            'icon' => 'medkit',
            'can'  => 'medic',
            'url'  => '/Exam',
        ],
        [
            'text' => 'Laudos',
            'icon' => 'file-image-o',
            'can'  => 'adm',
            'url'  => '/ViewExam',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];
