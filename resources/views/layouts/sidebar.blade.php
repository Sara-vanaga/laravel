<div class="sidebar">
    <div class="sidebar-header">
        <a href="/" class="brand">
            <i class="fas fa-calculator ml-2"></i>
            سیستم حسابداری
        </a>
    </div>

    <div class="sidebar-content">
        <ul class="nav">
            <!-- داشبورد -->
            <li class="nav-item">
                <a href="/dashboard" class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}">
                    <i class="fas fa-home"></i>
                    <span>داشبورد</span>
                </a>
            </li>

            <!-- اشخاص -->
            
            <li class="nav-item">
                <a href="#persons" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <i class="fas fa-users"></i>
                    <span>اشخاص</span>
                    <i class="fas fa-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="persons">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('persons.create') }}" class="nav-link">
                                <i class="fas fa-user-plus"></i>
                                <span>شخص جدید</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('persons.index') }}" class="nav-link">
                                <i class="fas fa-users"></i>
                                <span>اشخاص</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('receives.create') }}" class="nav-link">
                                <i class="fas fa-hand-holding-usd"></i>
                                <span>دریافت</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('receives.index') }}" class="nav-link">
                                <i class="fas fa-list"></i>
                                <span>لیست دریافت‌ها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('payments.create') }}" class="nav-link">
                                <i class="fas fa-money-bill-wave"></i>
                                <span>پرداخت</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('payments.index') }}" class="nav-link">
                                <i class="fas fa-list-alt"></i>
                                <span>لیست پرداخت‌ها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('shareholders.index') }}" class="nav-link">
                                <i class="fas fa-user-tie"></i>
                                <span>سهامداران</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('vendors.index') }}" class="nav-link">
                                <i class="fas fa-store"></i>
                                <span>فروشندگان</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- کالاها و خدمات -->
            <div class="nav-category">کالاها و خدمات</div>
            <li class="nav-item">
                <a href="#products" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <i class="fas fa-box"></i>
                    <span>کالاها و خدمات</span>
                    <i class="fas fa-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="products">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('products.create') }}" class="nav-link">
                                <i class="fas fa-box-open"></i>
                                <span>کالای جدید</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('services.create') }}" class="nav-link">
                                <i class="fas fa-concierge-bell"></i>
                                <span>خدمات جدید</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products.index') }}" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                <span>کالاها و خدمات</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('prices.update') }}" class="nav-link">
                                <i class="fas fa-tags"></i>
                                <span>به روز رسانی لیست قیمت</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products.barcode') }}" class="nav-link">
                                <i class="fas fa-barcode"></i>
                                <span>چاپ بارکد</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products.barcode.bulk') }}" class="nav-link">
                                <i class="fas fa-print"></i>
                                <span>چاپ بارکد تعدادی</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products.price-list') }}" class="nav-link">
                                <i class="fas fa-file-invoice-dollar"></i>
                                <span>صفحه لیست قیمت کالا</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- بانکداری -->
            <div class="nav-category">بانکداری</div>
            <li class="nav-item">
                <a href="#banking" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <i class="fas fa-university"></i>
                    <span>بانکداری</span>
                    <i class="fas fa-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="banking">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('banks.index') }}" class="nav-link">
                                <i class="fas fa-university"></i>
                                <span>بانک‌ها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('funds.index') }}" class="nav-link">
                                <i class="fas fa-cash-register"></i>
                                <span>صندوق‌ها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('petty-cash.index') }}" class="nav-link">
                                <i class="fas fa-wallet"></i>
                                <span>تنخواه‌گردان‌ها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('transfers.create') }}" class="nav-link">
                                <i class="fas fa-exchange-alt"></i>
                                <span>انتقال</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('transfers.index') }}" class="nav-link">
                                <i class="fas fa-list"></i>
                                <span>لیست انتقال‌ها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('checks.received') }}" class="nav-link">
                                <i class="fas fa-money-check-alt"></i>
                                <span>لیست چک‌های دریافتی</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('checks.paid') }}" class="nav-link">
                                <i class="fas fa-money-check"></i>
                                <span>لیست چک‌های پرداختی</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- فروش و درآمد -->
            <div class="nav-category">فروش و درآمد</div>
            <li class="nav-item">
                <a href="#sales" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <i class="fas fa-shopping-cart"></i>
                    <span>فروش و درآمد</span>
                    <i class="fas fa-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="sales">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('sales.create') }}" class="nav-link">
                                <i class="fas fa-cart-plus"></i>
                                <span>فروش جدید</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sales.quick') }}" class="nav-link">
                                <i class="fas fa-bolt"></i>
                                <span>فاکتور سریع</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sales.returns.create') }}" class="nav-link">
                                <i class="fas fa-undo"></i>
                                <span>برگشت از فروش</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sales.index') }}" class="nav-link">
                                <i class="fas fa-file-invoice"></i>
                                <span>فاکتورهای فروش</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sales.returns.index') }}" class="nav-link">
                                <i class="fas fa-file-export"></i>
                                <span>فاکتورهای برگشت از فروش</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('incomes.create') }}" class="nav-link">
                                <i class="fas fa-dollar-sign"></i>
                                <span>درآمد</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('incomes.index') }}" class="nav-link">
                                <i class="fas fa-list-ol"></i>
                                <span>لیست درآمدها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('installments.create') }}" class="nav-link">
                                <i class="fas fa-calculator"></i>
                                <span>قرارداد فروش اقساطی</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('installments.index') }}" class="nav-link">
                                <i class="fas fa-calendar-alt"></i>
                                <span>لیست فروش اقساطی</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sales.discounted') }}" class="nav-link">
                                <i class="fas fa-percentage"></i>
                                <span>اقلام تخفیف دار</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- خرید و هزینه -->
            <div class="nav-category">خرید و هزینه</div>
            <li class="nav-item">
                <a href="#purchases" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <i class="fas fa-shopping-basket"></i>
                    <span>خرید و هزینه</span>
                    <i class="fas fa-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="purchases">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('purchases.create') }}" class="nav-link">
                                <i class="fas fa-cart-plus"></i>
                                <span>خرید جدید</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('purchases.returns.create') }}" class="nav-link">
                                <i class="fas fa-undo-alt"></i>
                                <span>برگشت از خرید</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('purchases.index') }}" class="nav-link">
                                <i class="fas fa-file-invoice"></i>
                                <span>فاکتورهای خرید</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('purchases.returns.index') }}" class="nav-link">
                                <i class="fas fa-file-import"></i>
                                <span>فاکتورهای برگشت از خرید</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('expenses.create') }}" class="nav-link">
                                <i class="fas fa-money-bill-wave"></i>
                                <span>هزینه</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('expenses.index') }}" class="nav-link">
                                <i class="fas fa-list"></i>
                                <span>لیست هزینه‌ها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('wastes.create') }}" class="nav-link">
                                <i class="fas fa-trash-alt"></i>
                                <span>ضایعات</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('wastes.index') }}" class="nav-link">
                                <i class="fas fa-clipboard-list"></i>
                                <span>لیست ضایعات</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- انبارداری -->
            <div class="nav-category">انبارداری</div>
            <li class="nav-item">
                <a href="#warehouse" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <i class="fas fa-warehouse"></i>
                    <span>انبارداری</span>
                    <i class="fas fa-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="warehouse">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('warehouses.index') }}" class="nav-link">
                                <i class="fas fa-warehouse"></i>
                                <span>انبارها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('transfers.create') }}" class="nav-link">
                                <i class="fas fa-dolly"></i>
                                <span>حواله جدید</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('transfers.index') }}" class="nav-link">
                                <i class="fas fa-clipboard-check"></i>
                                <span>رسید و حواله‌های انبار</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('stock.index') }}" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                <span>موجودی کالا</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('stock.all') }}" class="nav-link">
                                <i class="fas fa-cubes"></i>
                                <span>موجودی تمامی انبارها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('inventory.index') }}" class="nav-link">
                                <i class="fas fa-clipboard"></i>
                                <span>انبارگردانی</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- حسابداری -->
            <div class="nav-category">حسابداری</div>
            <li class="nav-item">
                <a href="#accounting" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <i class="fas fa-calculator"></i>
                    <span>حسابداری</span>
                    <i class="fas fa-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="accounting">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('documents.create') }}" class="nav-link">
                                <i class="fas fa-file-invoice"></i>
                                <span>سند جدید</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('documents.index') }}" class="nav-link">
                                <i class="fas fa-folder-open"></i>
                                <span>لیست اسناد</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('opening-balance') }}" class="nav-link">
                                <i class="fas fa-balance-scale"></i>
                                <span>تراز افتتاحیه</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('fiscal-year.close') }}" class="nav-link">
                                <i class="fas fa-calendar-check"></i>
                                <span>بستن سال مالی</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('chart-of-accounts') }}" class="nav-link">
                                <i class="fas fa-th-list"></i>
                                <span>جدول حساب‌ها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('documents.merge') }}" class="nav-link">
                                <i class="fas fa-object-group"></i>
                                <span>تجمیع اسناد</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- سایر -->
            <div class="nav-category">سایر</div>
            <li class="nav-item">
                <a href="#other" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <i class="fas fa-ellipsis-h"></i>
                    <span>سایر</span>
                    <i class="fas fa-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="other">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('archive.index') }}" class="nav-link">
                                <i class="fas fa-archive"></i>
                                <span>آرشیو</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sms.panel') }}" class="nav-link">
                                <i class="fas fa-sms"></i>
                                <span>پنل پیامک</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('inquiry.index') }}" class="nav-link">
                                <i class="fas fa-search"></i>
                                <span>استعلام</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('other-receives.create') }}" class="nav-link">
                                <i class="fas fa-hand-holding-usd"></i>
                                <span>دریافت سایر</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('other-receives.index') }}" class="nav-link">
                                <i class="fas fa-list"></i>
                                <span>لیست دریافت‌ها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('other-payments.create') }}" class="nav-link">
                                <i class="fas fa-money-bill-wave"></i>
                                <span>پرداخت سایر</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('other-payments.index') }}" class="nav-link">
                                <i class="fas fa-list-alt"></i>
                                <span>لیست پرداخت‌ها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('currency-exchange') }}" class="nav-link">
                                <i class="fas fa-exchange-alt"></i>
                                <span>سند تسعیر ارز</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('person-balance') }}" class="nav-link">
                                <i class="fas fa-balance-scale"></i>
                                <span>سند توازن اشخاص</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('product-balance') }}" class="nav-link">
                                <i class="fas fa-box-open"></i>
                                <span>سند توازن کالاها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('salary') }}" class="nav-link">
                                <i class="fas fa-money-check-alt"></i>
                                <span>سند حقوق</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- گزارش‌ها -->
            <div class="nav-category">گزارش‌ها</div>
            <li class="nav-item">
                <a href="#reports" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <i class="fas fa-chart-line"></i>
                    <span>گزارش‌ها</span>
                    <i class="fas fa-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="reports">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('reports.index') }}" class="nav-link">
                                <i class="fas fa-file-alt"></i>
                                <span>تمام گزارش‌ها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('reports.balance-sheet') }}" class="nav-link">
                                <i class="fas fa-balance-scale"></i>
                                <span>ترازنامه</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('reports.creditors-debtors') }}" class="nav-link">
                                <i class="fas fa-handshake"></i>
                                <span>بدهکاران و بستانکاران</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('reports.person-account') }}" class="nav-link">
                                <i class="fas fa-address-card"></i>
                                <span>کارت حساب اشخاص</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('reports.product-account') }}" class="nav-link">
                                <i class="fas fa-box"></i>
                                <span>کارت حساب کالا</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('reports.product-sales') }}" class="nav-link">
                                <i class="fas fa-chart-bar"></i>
                                <span>فروش به تفکیک کالا</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('reports.project-card') }}" class="nav-link">
                                <i class="fas fa-project-diagram"></i>
                                <span>کارت پروژه</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- تنظیمات -->
            <div class="nav-category">تنظیمات</div>
            <li class="nav-item">
                <a href="#settings" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <i class="fas fa-cog"></i>
                    <span>تنظیمات</span>
                    <i class="fas fa-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="settings">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('projects.index') }}" class="nav-link">
                                <i class="fas fa-project-diagram"></i>
                                <span>پروژه‌ها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('business.settings') }}" class="nav-link">
                                <i class="fas fa-building"></i>
                                <span>اطلاعات کسب و کار</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('financial.settings') }}" class="nav-link">
                                <i class="fas fa-money-check-alt"></i>
                                <span>تنظیمات مالی</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('exchange-rates') }}" class="nav-link">
                                <i class="fas fa-dollar-sign"></i>
                                <span>جدول تبدیل نرخ ارز</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="fas fa-users-cog"></i>
                                <span>مدیریت کاربران</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('print.settings') }}" class="nav-link">
                                <i class="fas fa-print"></i>
                                <span>تنظیمات چاپ</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('form-builder') }}" class="nav-link">
                                <i class="fas fa-edit"></i>
                                <span>فرم ساز</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('notifications.settings') }}" class="nav-link">
                                <i class="fas fa-bell"></i>
                                <span>اعلانات</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>

<!-- Sidebar Overlay -->
<!-- Sidebar Overlay for Mobile -->
<div class="sidebar-overlay"></div>

<!-- Mobile Menu Toggle Button -->
<button class="btn btn-link sidebar-mobile-toggle d-xl-none">
    <i class="fas fa-bars"></i>
</button>

<script>
    // اضافه کردن کلاس اکتیو به منوی جاری
    document.addEventListener('DOMContentLoaded', function() {
        const currentPath = window.location.pathname;
        const menuItems = document.querySelectorAll('.sidebar .nav-link');
        
        menuItems.forEach(item => {
            const href = item.getAttribute('href');
            if (href && currentPath.includes(href)) {
                item.classList.add('active');
                
                // اگر زیرمنو است، منوی والد را هم باز کن
                const parentCollapse = item.closest('.collapse');
                if (parentCollapse) {
                    parentCollapse.classList.add('show');
                    const parentToggle = document.querySelector(`[href="#${parentCollapse.id}"]`);
                    if (parentToggle) {
                        parentToggle.classList.add('active');
                        parentToggle.setAttribute('aria-expanded', 'true');
                    }
                }
            }
        });
    });

    // کنترل نمایش سایدبار در موبایل
    const sidebarOverlay = document.querySelector('.sidebar-overlay');
    const sidebar = document.querySelector('.sidebar');
    const mobileToggle = document.querySelector('.sidebar-mobile-toggle');

    if (mobileToggle) {
        mobileToggle.addEventListener('click', function() {
            sidebar.classList.toggle('show');
            sidebarOverlay.classList.toggle('show');
            document.body.classList.toggle('sidebar-open');
        });
    }

    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', function() {
            sidebar.classList.remove('show');
            sidebarOverlay.classList.remove('show');
            document.body.classList.remove('sidebar-open');
        });
    }

    // بستن سایدبار با کلیک خارج از آن در موبایل
    document.addEventListener('click', function(event) {
        if (window.innerWidth < 1200) {
            const isClickInside = sidebar.contains(event.target) || 
                                mobileToggle.contains(event.target);
            
            if (!isClickInside && sidebar.classList.contains('show')) {
                sidebar.classList.remove('show');
                sidebarOverlay.classList.remove('show');
                document.body.classList.remove('sidebar-open');
            }
        }
    });
</script>
<!-- End of Sidebar Overlay Script -->
<!-- End of Sidebar -->
