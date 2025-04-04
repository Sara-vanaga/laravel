<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SaleReturnController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\PurchaseReturnController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\InstallmentController;
use App\Http\Controllers\WasteController;

Route::get('/', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    // داشبورد
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // اشخاص
    Route::resource('persons', PersonController::class);
    Route::prefix('persons')->group(function () {
        Route::get('receives/create', [PersonController::class, 'createReceive'])->name('receives.create');
        Route::get('receives', [PersonController::class, 'indexReceives'])->name('receives.index');
        Route::get('payments/create', [PersonController::class, 'createPayment'])->name('payments.create');
        Route::get('payments', [PersonController::class, 'indexPayments'])->name('payments.index');
        Route::get('shareholders', [PersonController::class, 'shareholders'])->name('shareholders.index');
        Route::get('vendors', [PersonController::class, 'vendors'])->name('vendors.index');
    });

    // کالاها و خدمات
    Route::resource('products', ProductController::class);
    Route::resource('services', ServiceController::class);
    Route::prefix('products')->group(function () {
        Route::get('price-update', [ProductController::class, 'priceUpdate'])->name('prices.update');
        Route::get('barcode', [ProductController::class, 'barcode'])->name('products.barcode');
        Route::get('barcode-bulk', [ProductController::class, 'barcodeBulk'])->name('products.barcode.bulk');
        Route::get('price-list', [ProductController::class, 'priceList'])->name('products.price-list');
    });

    // بانکداری
    Route::resource('banks', BankController::class);
    Route::prefix('banking')->group(function () {
        Route::get('funds', [BankController::class, 'funds'])->name('funds.index');
        Route::get('petty-cash', [BankController::class, 'pettyCash'])->name('petty-cash.index');
        Route::get('transfers/create', [BankController::class, 'createTransfer'])->name('transfers.create');
        Route::get('transfers', [BankController::class, 'indexTransfers'])->name('transfers.index');
        Route::get('received-checks', [BankController::class, 'receivedChecks'])->name('checks.received');
        Route::get('paid-checks', [BankController::class, 'paidChecks'])->name('checks.paid');
    });

    // فروش و درآمد
    Route::resource('sales', SaleController::class);
    Route::prefix('sales')->group(function () {
        Route::get('quick', [SaleController::class, 'quick'])->name('sales.quick');
        Route::get('discounted', [SaleController::class, 'discounted'])->name('sales.discounted');
        
        // برگشت از فروش
        Route::get('returns/create', [SaleReturnController::class, 'create'])->name('sales.returns.create');
        Route::post('returns', [SaleReturnController::class, 'store'])->name('sales.returns.store');
        Route::get('returns', [SaleReturnController::class, 'index'])->name('sales.returns.index');
        Route::get('returns/{return}', [SaleReturnController::class, 'show'])->name('sales.returns.show');
        Route::get('returns/{return}/edit', [SaleReturnController::class, 'edit'])->name('sales.returns.edit');
        Route::put('returns/{return}', [SaleReturnController::class, 'update'])->name('sales.returns.update');
        Route::delete('returns/{return}', [SaleReturnController::class, 'destroy'])->name('sales.returns.destroy');
    });

    // درآمدها
    Route::resource('incomes', IncomeController::class);
    
    // فروش اقساطی
    Route::resource('installments', InstallmentController::class);

    // خرید و هزینه
    Route::resource('purchases', PurchaseController::class);
    Route::prefix('purchases')->group(function () {
        // برگشت از خرید
        Route::get('returns/create', [PurchaseReturnController::class, 'create'])->name('purchases.returns.create');
        Route::post('returns', [PurchaseReturnController::class, 'store'])->name('purchases.returns.store');
        Route::get('returns', [PurchaseReturnController::class, 'index'])->name('purchases.returns.index');
        Route::get('returns/{return}', [PurchaseReturnController::class, 'show'])->name('purchases.returns.show');
        Route::get('returns/{return}/edit', [PurchaseReturnController::class, 'edit'])->name('purchases.returns.edit');
        Route::put('returns/{return}', [PurchaseReturnController::class, 'update'])->name('purchases.returns.update');
        Route::delete('returns/{return}', [PurchaseReturnController::class, 'destroy'])->name('purchases.returns.destroy');
    });

    // هزینه‌ها
    Route::resource('expenses', ExpenseController::class);
    
    // ضایعات
    Route::resource('wastes', WasteController::class);

    // انبارداری
    Route::resource('warehouses', WarehouseController::class);
    Route::prefix('warehouse')->group(function () {
        Route::get('stock', [WarehouseController::class, 'stock'])->name('stock.index');
        Route::get('all-stock', [WarehouseController::class, 'allStock'])->name('stock.all');
        Route::get('inventory', [WarehouseController::class, 'inventory'])->name('inventory.index');
    });

    // حسابداری
    Route::resource('documents', AccountingController::class);
    Route::prefix('accounting')->group(function () {
        Route::get('opening-balance', [AccountingController::class, 'openingBalance'])->name('opening-balance');
        Route::get('close-fiscal-year', [AccountingController::class, 'closeFiscalYear'])->name('fiscal-year.close');
        Route::get('chart-of-accounts', [AccountingController::class, 'chartOfAccounts'])->name('chart-of-accounts');
        Route::get('merge-documents', [AccountingController::class, 'mergeDocuments'])->name('documents.merge');
    });

    // گزارش‌ها
    Route::prefix('reports')->group(function () {
        Route::get('/', [ReportController::class, 'index'])->name('reports.index');
        Route::get('balance-sheet', [ReportController::class, 'balanceSheet'])->name('reports.balance-sheet');
        Route::get('creditors-debtors', [ReportController::class, 'creditorsDebtors'])->name('reports.creditors-debtors');
        Route::get('person-account', [ReportController::class, 'personAccount'])->name('reports.person-account');
        Route::get('product-account', [ReportController::class, 'productAccount'])->name('reports.product-account');
        Route::get('product-sales', [ReportController::class, 'productSales'])->name('reports.product-sales');
        Route::get('project-card', [ReportController::class, 'projectCard'])->name('reports.project-card');
    });

    // تنظیمات
    Route::resource('projects', SettingController::class);
    Route::prefix('settings')->group(function () {
        Route::get('business', [SettingController::class, 'business'])->name('business.settings');
        Route::get('financial', [SettingController::class, 'financial'])->name('financial.settings');
        Route::get('exchange-rates', [SettingController::class, 'exchangeRates'])->name('exchange-rates');
        Route::get('users', [SettingController::class, 'users'])->name('users.index');
        Route::get('print', [SettingController::class, 'print'])->name('print.settings');
        Route::get('form-builder', [SettingController::class, 'formBuilder'])->name('form-builder');
        Route::get('notifications', [SettingController::class, 'notifications'])->name('notifications.settings');
    });
});