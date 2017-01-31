<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('首页', route('dashboard'));
});

// Home > contents
Breadcrumbs::register('contents', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('分部列表', route('contents'));
});

// Home > contents > id
Breadcrumbs::register('show', function($breadcrumbs)
{
    $breadcrumbs->parent('contents');
    $breadcrumbs->push('分部信息', route('content_show'));
});

// Home > District
Breadcrumbs::register('district', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('省市区县数据', route('district'));
});