<?php
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\web\SlideMain;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
     $trail->push('dashboard', route('dashboard'));
});
Breadcrumbs::for('profile.show', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Perfil', route('profile.show'));
});
Breadcrumbs::for('user.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Gestion de Usuarios', route('user.index'));
});
Breadcrumbs::for('user.show', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('user.index');
    $trail->push('Ver Usuario -> '.$user->name, route('user.show', $user));
});
Breadcrumbs::for('user.edit', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('user.index');
    $trail->push('Editar Usuario -> '.$user->name, route('user.edit', $user));
});
Breadcrumbs::for('user.create', function (BreadcrumbTrail $trail) {
    $trail->parent('user.index');
    $trail->push('Crear Usuario', route('user.create'));
});
Breadcrumbs::for('slide.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Carrusel', route('slide.index'));
});
Breadcrumbs::for('slide.show', function (BreadcrumbTrail $trail, SlideMain $slide) {
    $trail->parent('slide.index');
    $trail->push('Ver Slide -> '.$slide->name, route('slide.show', $slide));
});
Breadcrumbs::for('slide.edit', function (BreadcrumbTrail $trail, SlideMain $slide) {
    $trail->parent('slide.index');
    $trail->push('Editar Slide -> '.$slide->name, route('slide.edit', $slide));
});
Breadcrumbs::for('slide.create', function (BreadcrumbTrail $trail) {
    $trail->parent('slide.index');
    $trail->push('Crear Slide', route('slide.create'));
});