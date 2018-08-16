<?php

use Spatie\Menu\Laravel\Menu;
use Spatie\Menu\Laravel\Html;
use Spatie\Menu\Laravel\Link;

//Menu::macro('fullsubmenuexample', function () {
//    return Menu::new()->prepend('<a href="#"><span> Multilevel PROVA </span> <i class="fa fa-angle-left pull-right"></i></a>')
//        ->addParentClass('treeview')
//        ->add(Link::to('/link1prova', 'Link1 prova'))->addClass('treeview-menu')
//        ->add(Link::to('/link2prova', 'Link2 prova'))->addClass('treeview-menu')
//        ->url('http://www.google.com', 'Google');
//});

Menu::macro('adminlteSubmenu', function ($submenuName) {
    return Menu::new()->prepend('<a href="#"><span> ' . $submenuName . '</span> <i class="fa fa-angle-left pull-right"></i></a>')
        ->addParentClass('treeview')->addClass('treeview-menu');
});
Menu::macro('adminlteMenu', function () {
    return Menu::new()
        ->addClass('sidebar-menu')->setAttribute('data-widget', 'tree');
});
Menu::macro('adminlteSeparator', function ($title) {
    return Html::raw($title)->addParentClass('header');
});

Menu::macro('adminlteDefaultMenu', function ($content) {
    return Html::raw('<i class="fa fa-link"></i><span>' . $content . '</span>')->html();
});

Menu::macro('sidebar', function () {
    return Menu::adminlteMenu()
        ->add(Html::raw('Menu')->addParentClass('header'))
        ->action('HomeController@index', '<i class="fa fa-home"></i><span>Home</span>')
//         ->link('http://www.acacha.org', Menu::adminlteDefaultMenu('Another link'))
// //        ->url('http://www.google.com', 'Google')
//         ->add(Menu::adminlteSeparator('Acacha Adminlte'))
//         #adminlte_menu
        ->add(Link::toUrl('admin', '<i class="fa fa-link"></i><span>Admin</span>'))
        ->add(Link::toUrl('detail', '<i class="fa fa-book"></i><span>Details</span>'))

        ->add(Link::toUrl('create-chart', '<i class="fa fa-link"></i><span>Chart</span>'))
        // ->add(Menu::adminlteSeparator('SECONDARY MENU'))
        // ->add(Menu::new()->prepend('<a href="#"><i class="fa fa-share"></i><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>')
        //     ->addParentClass('treeview')
        //     ->add(Link::to('/link1', 'Link1'))->addClass('treeview-menu')
        //     ->add(Link::to('/link2', 'Link2'))
        //     ->url('http://www.google.com', 'Google')
        //     ->add(Menu::new()->prepend('<a href="#"><span>Multilevel 2</span> <i class="fa fa-angle-left pull-right"></i></a>')
        //         ->addParentClass('treeview')
        //         ->add(Link::to('/link21', 'Link21'))->addClass('treeview-menu')
        //         ->add(Link::to('/link22', 'Link22'))
        //         ->url('http://www.google.com', 'Google')))
//        ->add(
//            Menu::fullsubmenuexample()
//        )
//        ->add(
//            Menu::adminlteSubmenu('Best menu')
//                ->add(Link::to('/acacha', 'acacha'))
//                ->add(Link::to('/profile', 'Profile'))
//                ->url('http://www.google.com', 'Google')
//        )
        ->setActiveFromRequest();
});
