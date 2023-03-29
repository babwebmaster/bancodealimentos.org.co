<?php
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\web\Cifras;
use App\Models\web\Directors;
use App\Models\web\Reconocimientos;
use App\Models\web\Reports;
use App\Models\web\SlideDonors;
use App\Models\web\SlideMain;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

//breadcrumbs for dashboard 
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
     $trail->push('dashboard', route('dashboard'));
});
//breadcrumbs for profile 
Breadcrumbs::for('profile.show', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Perfil', route('profile.show'));
});
//breadcrumbs for users
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
//breadcrumbs for carousel main
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
//breadcrumbs for our Donors slide
Breadcrumbs::for('slide-donors.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Nuestros Donantes', route('slide-donors.index'));
});
Breadcrumbs::for('slide-donors.show', function (BreadcrumbTrail $trail, SlideDonors $slideDonors) {
    $trail->parent('slide-donors.index');
    $trail->push('Ver Slide -> '.$slideDonors->name, route('slide-donors.show', $slideDonors));
});
Breadcrumbs::for('slide-donors.edit', function (BreadcrumbTrail $trail, SlideDonors $slideDonors) {
    $trail->parent('slide-donors.index');
    $trail->push('Editar Slide -> '.$slideDonors->name, route('slide-donors.edit', $slideDonors));
});
Breadcrumbs::for('slide-donors.create', function (BreadcrumbTrail $trail) {
    $trail->parent('slide-donors.index');
    $trail->push('Crear Slide', route('slide.create'));
});
//breadcrumbs for cifras
Breadcrumbs::for('cifras.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Cifras', route('cifras.index'));
});
Breadcrumbs::for('cifras.show', function (BreadcrumbTrail $trail, Cifras $cifras) {
    $trail->parent('cifras.index');
    $trail->push('Ver Cifra -> '.$cifras->name, route('cifras.show', $cifras));
});
Breadcrumbs::for('cifras.edit', function (BreadcrumbTrail $trail, Cifras $cifras) {
    $trail->parent('cifras.index');
    $trail->push('Editar Cifra -> '.$cifras->name, route('cifras.edit', $cifras));
});
Breadcrumbs::for('cifras.create', function (BreadcrumbTrail $trail) {
    $trail->parent('cifras.index');
    $trail->push('Crear Cifra', route('slide.create'));
});
//breadcrumbs for reconocimientos
Breadcrumbs::for('reconocimientos.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Reconocimientos', route('reconocimientos.index'));
});
Breadcrumbs::for('reconocimientos.show', function (BreadcrumbTrail $trail, Reconocimientos $reconocimientos) {
    $trail->parent('reconocimientos.index');
    $trail->push('Ver Reconocimiento -> '.$reconocimientos->title, route('reconocimientos.show', $reconocimientos));
});
Breadcrumbs::for('reconocimientos.edit', function (BreadcrumbTrail $trail, Reconocimientos $reconocimientos) {
    $trail->parent('reconocimientos.index');
    $trail->push('Editar Reconocimiento -> '.$reconocimientos->title, route('reconocimientos.edit', $reconocimientos));
});
Breadcrumbs::for('reconocimientos.create', function (BreadcrumbTrail $trail) {
    $trail->parent('reconocimientos.index');
    $trail->push('Crear Reconocimiento', route('slide.create'));
});
//breadcrumbs for Directors
Breadcrumbs::for('directors.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Directivos', route('directors.index'));
});
Breadcrumbs::for('directors.show', function (BreadcrumbTrail $trail, Directors $directors) {
    $trail->parent('directors.index');
    $trail->push('Ver Directivo -> '.$directors->title, route('directors.show', $directors));
});
Breadcrumbs::for('directors.edit', function (BreadcrumbTrail $trail, Directors $directors) {
    $trail->parent('directors.index');
    $trail->push('Editar Directivo -> '.$directors->title, route('directors.edit', $directors));
});
Breadcrumbs::for('directors.create', function (BreadcrumbTrail $trail) {
    $trail->parent('directors.index');
    $trail->push('Crear Directivo', route('directors.create'));
});
//breadcrumbs for Informes de Gestion
Breadcrumbs::for('reports.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Informes de Gestión', route('reports.index'));
});
Breadcrumbs::for('reports.show', function (BreadcrumbTrail $trail, Reports $reports) {
    $trail->parent('reports.index');
    $trail->push('Ver Informe -> '.$reports->name, route('reports.show', $reports));
});
Breadcrumbs::for('reports.edit', function (BreadcrumbTrail $trail, Reports $reports) {
    $trail->parent('reports.index');
    $trail->push('Editar Informe -> '.$reports->name, route('reports.edit', $reports));
});
Breadcrumbs::for('reports.create', function (BreadcrumbTrail $trail) {
    $trail->parent('reports.index');
    $trail->push('Crear Informe', route('reports.create'));
});