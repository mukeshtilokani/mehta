<?php

// Dashboard
Breadcrumbs::register('admin.dashboard', function ($breadcrumbs) {
    $breadcrumbs->push('Dashboard', route('admin.dashboard'));
});

// Categories
Breadcrumbs::register('admin.categories.index', function ($breadcrumbs) {
    $breadcrumbs->push('Categories', route('admin.categories.index'));
});

// Categories create
Breadcrumbs::register('admin.categories.create', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.categories.index');
    $breadcrumbs->push('Create', route('admin.categories.create'));
});

// Categories edit
Breadcrumbs::register('admin.categories.edit', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.categories.index');
    $breadcrumbs->push('Edit', 'categories/{category}/edit');
});

// Product
Breadcrumbs::register('products.index', function ($breadcrumbs) {
    $breadcrumbs->push('Products', route('products.index'));
});

// Product > Create product
Breadcrumbs::register('products.create', function ($breadcrumbs) {
	$breadcrumbs->parent('products.index');
    $breadcrumbs->push('Create', route('products.create'));
});

// Product > Edit product
Breadcrumbs::register('products.edit', function ($breadcrumbs) {
	$breadcrumbs->parent('products.index');
    $breadcrumbs->push('Edit', 'products/{product}/edit');
});

// Gallary
Breadcrumbs::register('admin.galleries.index', function ($breadcrumbs) {
    $breadcrumbs->push('Galleries', route('admin.galleries.index'));
});

// Gallary > Create Gallary
Breadcrumbs::register('admin.galleries.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.galleries.index');
    $breadcrumbs->push('Create', route('admin.galleries.create'));
});

// Gallary > Edit Gallary
Breadcrumbs::register('admin.galleries.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.galleries.index');
    $breadcrumbs->push('Edit', 'galleries/{gallary}/edit');
});