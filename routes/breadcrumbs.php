<?php

//use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// admin
Breadcrumbs::register('admin.home.index', function ($breadcrumbs) {
    $breadcrumbs->push('Administração', route('admin.home.index'));
});

    // admin
    Breadcrumbs::register('admin.dashboard.index', function ($breadcrumbs) {
        $breadcrumbs->push('Dashboard', route('admin.dashboard.index'));
    });

    // admin > modules
    Breadcrumbs::register('admin.modules.index', function ($breadcrumbs) {
        $breadcrumbs->parent('admin.home.index');
        $breadcrumbs->push('Módulos', route('admin.modules.index'));
    });

        // admin > modules > edit
        Breadcrumbs::register('admin.modules.edit', function ($breadcrumbs) {
            $breadcrumbs->parent('admin.home.index');
            $breadcrumbs->push('Módulos', route('admin.modules.index'));
            $breadcrumbs->push('Editar Módulos', route('admin.modules.edit'));
        });

        // admin > modules > destroy
        Breadcrumbs::register('admin.modules.destroy', function ($breadcrumbs, $module) {
            $breadcrumbs->parent('admin.home.index');
            $breadcrumbs->push('Módulos', route('admin.modules.index'));
            $breadcrumbs->push($module->name, route('admin.modules.destroy', $module));
        });

    // admin > groups
    Breadcrumbs::register('admin.groups.index', function ($breadcrumbs) {
        $breadcrumbs->parent('admin.home.index');
        $breadcrumbs->push('Grupos', route('admin.groups.index'));
    });

        // admin > groups > edit
        Breadcrumbs::register('admin.groups.edit', function ($breadcrumbs) {
            $breadcrumbs->parent('admin.home.index');
            $breadcrumbs->push('Grupos', route('admin.groups.index'));
            $breadcrumbs->push('Editar Grupos', route('admin.groups.edit'));
        });

    // admin > unities
    Breadcrumbs::register('admin.unities.index', function ($breadcrumbs) {
        $breadcrumbs->parent('admin.home.index');
        $breadcrumbs->push('Unidades', route('admin.unities.index'));
    });

        // admin > unities > edit
        Breadcrumbs::register('admin.unities.edit', function ($breadcrumbs) {
            $breadcrumbs->parent('admin.home.index');
            $breadcrumbs->push('Unidades', route('admin.unities.index'));
            $breadcrumbs->push('Editar Unidades', route('admin.unities.edit'));
        });

        // admin > unities > show
        Breadcrumbs::register('admin.unities.show', function ($breadcrumbs, $unities) {
            $breadcrumbs->parent('admin.home.index');
            $breadcrumbs->push('Unidades', route('admin.unities.index'));
            $breadcrumbs->push($unities->name, route('admin.unities.show', $unities));
        });

    // admin > users
    Breadcrumbs::register('admin.users.index', function ($breadcrumbs) {
        $breadcrumbs->parent('admin.home.index');
        $breadcrumbs->push('Usuários', route('admin.users.index'));
    });

        // admin > users > edit
        Breadcrumbs::register('admin.users.edit', function ($breadcrumbs) {
            $breadcrumbs->parent('admin.home.index');
            $breadcrumbs->push('Usuários', route('admin.users.index'));
            $breadcrumbs->push('Editar Usuário', route('admin.users.edit'));
        });

        // admin > users > show
        Breadcrumbs::register('admin.users.show', function ($breadcrumbs, $user) {
            $breadcrumbs->parent('admin.home.index');
            $breadcrumbs->push('Usuários', route('admin.users.index'));
            $breadcrumbs->push($user->name, route('admin.users.show', $user));
        });

    // admin > access_log
    Breadcrumbs::register('admin.access_log.index', function ($breadcrumbs) {
        $breadcrumbs->parent('admin.home.index');
        $breadcrumbs->push('Access Log', route('admin.access_log.index'));
    });