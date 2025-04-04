@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">درباره سیستم حسابداری</div>

                <div class="card-body">
                    <div class="text-center mb-4">
                        <h2>سیستم حسابداری لاراول</h2>
                        <p class="lead">
                            به سیستم حسابداری ما خوش آمدید
                        </p>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h4>امکانات سیستم:</h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success"></i> مدیریت حساب‌های مالی</li>
                                <li><i class="fas fa-check text-success"></i> ثبت تراکنش‌های مالی</li>
                                <li><i class="fas fa-check text-success"></i> گزارش‌گیری آسان</li>
                                <li><i class="fas fa-check text-success"></i> مدیریت کاربران</li>
                            </ul>
                        </div>
                        
                        <div class="col-md-6">
                            <h4>برای شروع:</h4>
                            <p>
                                لطفاً ابتدا در سیستم ثبت نام کنید یا وارد شوید.
                            </p>
                            <div class="d-grid gap-2">
                                @guest
                                    <a href="{{ route('login') }}" class="btn btn-primary mb-2">ورود به سیستم</a>
                                    <a href="{{ route('register') }}" class="btn btn-outline-primary">ثبت نام</a>
                                @else
                                    <a href="{{ route('home') }}" class="btn btn-primary">ورود به داشبورد</a>
                                @endguest
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="text-center mt-4">
                        <h4>تماس با ما</h4>
                        <p>
                            برای اطلاعات بیشتر با ما در تماس باشید
                            <br>
                            ایمیل: info@example.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection