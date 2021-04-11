<?php

use HishabKitab\Site\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('site')
    ->group(function () {
        Route::get('/', [SiteController::class, 'index']);
        //Products
        Route::prefix('product')
            ->group(function () {
                //Apps
                Route::prefix('apps')->group(function () {
                    $apps = [
                        'finance' => [
                            'accounting',
                            'invoicing',
                            'expenses',
                            'spreadsheet',
                            'documents',
                            'sign'],
                        'sales' => [
                            'crm',
                            'sales',
                            'point-of-sale-shop',
                            'subscriptions',
                            'rental',
                            'amazon-connector'
                        ],
                        'websites' => [
                            'website',
                            'ecommerce',
                            'blog',
                            'forums',
                            'live-chat',
                            'elearning',
                        ],
                        'inventory&mrp' => [
                            'inventory',
                            'manufacturing',
                            'plm',
                            'purchase',
                            'maintenance',
                            'quality',

                        ],
                        'human-resources' => [
                            'employees',
                            'recruitment',
                            'time-off',
                            'appraisals',
                            'referrals',
                            'fleet',
                        ],
                        'marketing' => [
                            'social-marketing',
                            'email-marketing',
                            'sms-marketing',
                            'events',
                            'marketing-automation',
                            'surveys',
                        ],
                        'services' => [
                            'project',
                            'timesheet',
                            'field-service',
                            'helpdesk',
                            'planning',
                            'appointments',
                        ],
                        'productivity' => [
                            'discuss',
                            'approvals',
                            'iot',
                        ],
                    ];
                    foreach ($apps as $category => $app) {
                        Route::prefix($category)->group(function () use ($category, $app) {
                            foreach ($app as $title) {
                                Route::get($title, [SiteController::class, 'show'])->name('site.product.apps.' . $category . '.' . $title);
                            }
                        });
                    }
                });
            });
        //Resources
        Route::prefix('resources')
            ->group(function () {
                $resources = [
                    'user-guide' => [
                        'finance' => [
                            'accounting',
                            'invoicing',
                            'expenses',
                            'spreadsheet',
                            'documents',
                            'sign'],
                        'sales' => [
                            'crm',
                            'sales',
                            'point-of-sale-shop',
                            'subscriptions',
                            'rental',
                            'amazon-connector'
                        ],
                        'websites' => [
                            'website',
                            'ecommerce',
                            'blog',
                            'forums',
                            'live-chat',
                            'elearning',
                        ],
                        'inventory&mrp' => [
                            'inventory',
                            'manufacturing',
                            'plm',
                            'purchase',
                            'maintenance',
                            'quality',

                        ],
                        'human-resources' => [
                            'employees',
                            'recruitment',
                            'time-off',
                            'appraisals',
                            'referrals',
                            'fleet',
                        ],
                        'marketing' => [
                            'social-marketing',
                            'email-marketing',
                            'sms-marketing',
                            'events',
                            'marketing-automation',
                            'surveys',
                        ],
                        'services' => [
                            'project',
                            'timesheet',
                            'field-service',
                            'helpdesk',
                            'planning',
                            'appointments',
                        ],
                        'productivity' => [
                            'discuss',
                            'approvals',
                            'iot',
                        ],
                    ],
                    'documentation' => [
                        'finance' => [
                            'accounting',
                            'invoicing',
                            'expenses',
                            'spreadsheet',
                            'documents',
                            'sign'],
                        'sales' => [
                            'crm',
                            'sales',
                            'point-of-sale-shop',
                            'subscriptions',
                            'rental',
                            'amazon-connector'
                        ],
                        'websites' => [
                            'website',
                            'ecommerce',
                            'blog',
                            'forums',
                            'live-chat',
                            'elearning',
                        ],
                        'inventory&mrp' => [
                            'inventory',
                            'manufacturing',
                            'plm',
                            'purchase',
                            'maintenance',
                            'quality',

                        ],
                        'human-resources' => [
                            'employees',
                            'recruitment',
                            'time-off',
                            'appraisals',
                            'referrals',
                            'fleet',
                        ],
                        'marketing' => [
                            'social-marketing',
                            'email-marketing',
                            'sms-marketing',
                            'events',
                            'marketing-automation',
                            'surveys',
                        ],
                        'services' => [
                            'project',
                            'timesheet',
                            'field-service',
                            'helpdesk',
                            'planning',
                            'appointments',
                        ],
                        'productivity' => [
                            'discuss',
                            'approvals',
                            'iot',
                        ],
                    ],
                    'api' => [
                        'finance' => [
                            'accounting',
                            'invoicing',
                            'expenses',
                            'spreadsheet',
                            'documents',
                            'sign'],
                        'sales' => [
                            'crm',
                            'sales',
                            'point-of-sale-shop',
                            'subscriptions',
                            'rental',
                            'amazon-connector'
                        ],
                        'websites' => [
                            'website',
                            'ecommerce',
                            'blog',
                            'forums',
                            'live-chat',
                            'elearning',
                        ],
                        'inventory&mrp' => [
                            'inventory',
                            'manufacturing',
                            'plm',
                            'purchase',
                            'maintenance',
                            'quality',

                        ],
                        'human-resources' => [
                            'employees',
                            'recruitment',
                            'time-off',
                            'appraisals',
                            'referrals',
                            'fleet',
                        ],
                        'marketing' => [
                            'social-marketing',
                            'email-marketing',
                            'sms-marketing',
                            'events',
                            'marketing-automation',
                            'surveys',
                        ],
                        'services' => [
                            'project',
                            'timesheet',
                            'field-service',
                            'helpdesk',
                            'planning',
                            'appointments',
                        ],
                        'productivity' => [
                            'discuss',
                            'approvals',
                            'iot',
                        ],
                    ],
                    'developer-support' => [
                        'finance' => [
                            'accounting',
                            'invoicing',
                            'expenses',
                            'spreadsheet',
                            'documents',
                            'sign'],
                        'sales' => [
                            'crm',
                            'sales',
                            'point-of-sale-shop',
                            'subscriptions',
                            'rental',
                            'amazon-connector'
                        ],
                        'websites' => [
                            'website',
                            'ecommerce',
                            'blog',
                            'forums',
                            'live-chat',
                            'elearning',
                        ],
                        'inventory&mrp' => [
                            'inventory',
                            'manufacturing',
                            'plm',
                            'purchase',
                            'maintenance',
                            'quality',

                        ],
                        'human-resources' => [
                            'employees',
                            'recruitment',
                            'time-off',
                            'appraisals',
                            'referrals',
                            'fleet',
                        ],
                        'marketing' => [
                            'social-marketing',
                            'email-marketing',
                            'sms-marketing',
                            'events',
                            'marketing-automation',
                            'surveys',
                        ],
                        'services' => [
                            'project',
                            'timesheet',
                            'field-service',
                            'helpdesk',
                            'planning',
                            'appointments',
                        ],
                        'productivity' => [
                            'discuss',
                            'approvals',
                            'iot',
                        ],
                    ],
                ];

                foreach ($resources as $index => $resource) {
                    Route::get($index, function () use ($index) {
                        return view('view::site.' . $index);
                    })->name('site.resources.' . $index);

                    foreach ($resource as $category => $app) {
                        Route::prefix($index)->group(function () use ($index, $category, $app) {
                            foreach ($app as $title) {
                                Route::get($title, [SiteController::class, 'show'])->name('site.resources.' . $index . '.' . $category . '.' . $title);
                            }
                        });
                    }
                }
            });
        //Forum
        Route::prefix('forum')
            ->group(function () {
                Route::get('/', function () {
                    return view('view::site.forum');
                })->name('site.forum.index');
            });
        Route::prefix('price')
            ->group(function () {
                Route::get('/', function () {
                    return view('view::site.price');
                })->name('site.price.index');
            });
        Route::get('events', function () {
            return view('view::site.events');
        })->name('site.events.index');
    });
