<?php

use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Tenant\TenantController;
use App\Http\Controllers\TenantUser\TenantUserController;
use Illuminate\Support\Facades\Route;

Route::apiResource('tenants', TenantController::class);
Route::apiResource('tenant-users', TenantUserController::class);
Route::apiResource('products', ProductController::class)->only(['index', 'show']);
