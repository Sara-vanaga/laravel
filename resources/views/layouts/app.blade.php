<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'سیستم حسابداری') }}</title>

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="sidebar-overlay"></div>
    
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <a href="{{ url('/') }}" class="brand">
                <i class="fas fa-chart-pie"></i>
                <span>سیستم حسابداری</span>
            </a>
        </div>
        
        <div class="sidebar-content">
            <nav>
                <!-- داشبورد -->
                <div class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        <i class="fas fa-home"></i>
                        <span class="menu-text">داشبورد</span>
                    </a>
                </div>

                <!-- اشخاص -->
                <div class="nav-category">اشخاص</div>
                <div class="nav-item">
                    <a href="#persons-menu" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        <span class="menu-text">اشخاص</span>
                        <i class="fas fa-chevron-down menu-arrow"></i>
                    </a>
                    <div class="collapse" id="persons-menu">
                        <ul class="sub-menu">
                            <li><a href="#" class="nav-link">شخص جدید</a></li>
                            <li><a href="#" class="nav-link">لیست اشخاص</a></li>
                            <li><a href="#" class="nav-link">دریافت</a></li>
                            <li><a href="#" class="nav-link">لیست دریافت‌ها</a></li>
                            <li><a href="#" class="nav-link">پرداخت</a></li>
                            <li><a href="#" class="nav-link">لیست پرداخت‌ها</a></li>
                            <li><a href="#" class="nav-link">سهامداران</a></li>
                            <li><a href="#" class="nav-link">فروشندگان</a></li>
                        </ul>
                    </div>
                </div>

                <!-- کالاها و خدمات -->
                <div class="nav-category">کالاها و خدمات</div>
                <div class="nav-item">
                    <a href="#products-menu" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-box"></i>
                        <span class="menu-text">کالاها</span>
                        <i class="fas fa-chevron-down menu-arrow"></i>
                    </a>
                    <div class="collapse" id="products-menu">
                        <ul class="sub-menu">
                            <li><a href="#" class="nav-link">کالای جدید</a></li>
                            <li><a href="#" class="nav-link">خدمات جدید</a></li>
                            <li><a href="#" class="nav-link">کالاها و خدمات</a></li>
                            <li><a href="#" class="nav-link">به‌روزرسانی لیست قیمت</a></li>
                            <li><a href="#" class="nav-link">چاپ بارکد</a></li>
                            <li><a href="#" class="nav-link">چاپ بارکد تعدادی</a></li>
                            <li><a href="#" class="nav-link">صفحه لیست قیمت کالا</a></li>
                        </ul>
                    </div>
                </div>

                <!-- بانکداری -->
                <div class="nav-category">بانکداری</div>
                <div class="nav-item">
                    <a href="#banking-menu" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-university"></i>
                        <span class="menu-text">بانکداری</span>
                        <i class="fas fa-chevron-down menu-arrow"></i>
                    </a>
                    <div class="collapse" id="banking-menu">
                        <ul class="sub-menu">
                            <li><a href="#" class="nav-link">بانک‌ها</a></li>
                            <li><a href="#" class="nav-link">صندوق‌ها</a></li>
                            <li><a href="#" class="nav-link">تنخواه‌گردان‌ها</a></li>
                            <li><a href="#" class="nav-link">انتقال</a></li>
                            <li><a href="#" class="nav-link">لیست انتقال‌ها</a></li>
                            <li><a href="#" class="nav-link">لیست چک‌های دریافتی</a></li>
                            <li><a href="#" class="nav-link">لیست چک‌های پرداختی</a></li>
                        </ul>
                    </div>
                </div>

                <!-- فروش و درآمد -->
                <div class="nav-category">فروش و درآمد</div>
                <div class="nav-item">
                    <a href="#sales-menu" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="menu-text">فروش</span>
                        <i class="fas fa-chevron-down menu-arrow"></i>
                    </a>
                    <div class="collapse" id="sales-menu">
                        <ul class="sub-menu">
                            <li><a href="#" class="nav-link">فروش جدید</a></li>
                            <li><a href="#" class="nav-link">فاکتور سریع</a></li>
                            <li><a href="#" class="nav-link">برگشت از فروش</a></li>
                            <li><a href="#" class="nav-link">فاکتورهای فروش</a></li>
                            <li><a href="#" class="nav-link">فاکتورهای برگشت از فروش</a></li>
                            <li><a href="#" class="nav-link">درآمد</a></li>
                            <li><a href="#" class="nav-link">لیست درآمدها</a></li>
                            <li><a href="#" class="nav-link">قرارداد فروش اقساطی</a></li>
                            <li><a href="#" class="nav-link">لیست فروش اقساطی</a></li>
                            <li><a href="#" class="nav-link">اقلام تخفیف‌دار</a></li>
                        </ul>
                    </div>
                </div>

                <!-- خرید و هزینه -->
                <div class="nav-item">
                    <a href="#purchases-menu" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-truck"></i>
                        <span class="menu-text">خرید</span>
                        <i class="fas fa-chevron-down menu-arrow"></i>
                    </a>
                    <div class="collapse" id="purchases-menu">
                        <ul class="sub-menu">
                            <li><a href="#" class="nav-link">خرید جدید</a></li>
                            <li><a href="#" class="nav-link">برگشت از خرید</a></li>
                            <li><a href="#" class="nav-link">فاکتورهای خرید</a></li>
                            <li><a href="#" class="nav-link">فاکتورهای برگشت از خرید</a></li>
                            <li><a href="#" class="nav-link">هزینه</a></li>
                            <li><a href="#" class="nav-link">لیست هزینه‌ها</a></li>
                            <li><a href="#" class="nav-link">ضایعات</a></li>
                            <li><a href="#" class="nav-link">لیست ضایعات</a></li>
                        </ul>
                    </div>
                </div>

                <!-- انبارداری -->
                <div class="nav-category">انبارداری</div>
                <div class="nav-item">
                    <a href="#warehouse-menu" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-warehouse"></i>
                        <span class="menu-text">انبار</span>
                        <i class="fas fa-chevron-down menu-arrow"></i>
                    </a>
                    <div class="collapse" id="warehouse-menu">
                        <ul class="sub-menu">
                            <li><a href="#" class="nav-link">انبارها</a></li>
                            <li><a href="#" class="nav-link">حواله جدید</a></li>
                            <li><a href="#" class="nav-link">رسید و حواله‌های انبار</a></li>
                            <li><a href="#" class="nav-link">موجودی کالا</a></li>
                            <li><a href="#" class="nav-link">موجودی تمامی انبارها</a></li>
                            <li><a href="#" class="nav-link">انبارگردانی</a></li>
                        </ul>
                    </div>
                </div>

                <!-- حسابداری -->
                <div class="nav-category">حسابداری</div>
                <div class="nav-item">
                    <a href="#accounting-menu" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-calculator"></i>
                        <span class="menu-text">حسابداری</span>
                        <i class="fas fa-chevron-down menu-arrow"></i>
                    </a>
                    <div class="collapse" id="accounting-menu">
                        <ul class="sub-menu">
                            <li><a href="#" class="nav-link">سند جدید</a></li>
                            <li><a href="#" class="nav-link">لیست اسناد</a></li>
                            <li><a href="#" class="nav-link">تراز افتتاحیه</a></li>
                            <li><a href="#" class="nav-link">بستن سال مالی</a></li>
                            <li><a href="#" class="nav-link">جدول حساب‌ها</a></li>
                            <li><a href="#" class="nav-link">تجمیع اسناد</a></li>
                        </ul>
                    </div>
                </div>

                <!-- سایر -->
                <div class="nav-category">سایر</div>
                <div class="nav-item">
                    <a href="#other-menu" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-ellipsis-h"></i>
                        <span class="menu-text">سایر</span>
                        <i class="fas fa-chevron-down menu-arrow"></i>
                    </a>
                    <div class="collapse" id="other-menu">
                        <ul class="sub-menu">
                            <li><a href="#" class="nav-link">آرشیو</a></li>
                            <li><a href="#" class="nav-link">پنل پیامک</a></li>
                            <li><a href="#" class="nav-link">استعلام</a></li>
                            <li><a href="#" class="nav-link">دریافت سایر</a></li>
                            <li><a href="#" class="nav-link">لیست دریافت‌ها</a></li>
                            <li><a href="#" class="nav-link">پرداخت سایر</a></li>
                            <li><a href="#" class="nav-link">لیست پرداخت‌ها</a></li>
                            <li><a href="#" class="nav-link">سند تسعیر ارز</a></li>
                            <li><a href="#" class="nav-link">سند توازن اشخاص</a></li>
                            <li><a href="#" class="nav-link">سند توازن کالاها</a></li>
                            <li><a href="#" class="nav-link">سند حقوق</a></li>
                        </ul>
                    </div>
                </div>

                <!-- گزارش‌ها -->
                <div class="nav-category">گزارش‌ها</div>
                <div class="nav-item">
                    <a href="#reports-menu" class="nav-link" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-chart-bar"></i>
                        <span class="menu-text">گزارش‌ها</span>
                        <i class="fas fa-chevron-down menu-arrow"></i>
                    </a>
                    <div class="collapse" id="reports-menu">
                        <ul class="sub-menu">
                            <li><a href="#" class="nav-link">تمام گزارش‌ها</a></li>
                            <li><a href="#" class="nav-link">ترازنامه</a></li>
                            <li><a href="#" class="nav-link">بدهکاران و بستانکاران</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="btn sidebar-mobile-toggle">
                    <i class="fas fa-bars"></i>
                </button>
                
                <ul class="navbar-nav ms-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">ورود</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">ثبت‌نام</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        خروج
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <!-- Content -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>