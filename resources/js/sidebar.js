import PerfectScrollbar from 'perfect-scrollbar';

document.addEventListener('DOMContentLoaded', function() {
    // متغیرهای مورد نیاز
    const sidebarContent = document.querySelector('.sidebar-content');
    const sidebar = document.querySelector('.sidebar');
    const sidebarOverlay = document.querySelector('.sidebar-overlay');
    const mobileToggle = document.querySelector('.sidebar-mobile-toggle');
    const menuItems = document.querySelectorAll('.sidebar .nav-link[data-bs-toggle="collapse"]');
    const body = document.body;

    // راه‌اندازی Perfect Scrollbar
    if (sidebarContent) {
        const ps = new PerfectScrollbar(sidebarContent, {
            suppressScrollX: true,
            wheelPropagation: false
        });

        // به‌روزرسانی اسکرول‌بار در تغییر اندازه
        window.addEventListener('resize', () => {
            ps.update();
        });
    }

    // کنترل نمایش سایدبار در موبایل
    function toggleSidebar() {
        sidebar.classList.toggle('show');
        sidebarOverlay.classList.toggle('show');
        body.classList.toggle('sidebar-open');
    }

    if (mobileToggle) {
        mobileToggle.addEventListener('click', toggleSidebar);
    }

    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', toggleSidebar);
    }

    // مدیریت منوها
    menuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            const parent = this.closest('.nav-item');
            const submenu = parent.querySelector('.collapse');
            const arrow = this.querySelector('.menu-arrow');

            // بستن سایر منوهای باز
            menuItems.forEach(otherItem => {
                if (otherItem !== this) {
                    const otherParent = otherItem.closest('.nav-item');
                    const otherSubmenu = otherParent.querySelector('.collapse');
                    const otherArrow = otherItem.querySelector('.menu-arrow');

                    if (otherSubmenu && otherSubmenu.classList.contains('show')) {
                        otherSubmenu.classList.remove('show');
                        otherItem.setAttribute('aria-expanded', 'false');
                        if (otherArrow) {
                            otherArrow.style.transform = 'rotate(0deg)';
                        }
                    }
                }
            });

            // باز/بسته کردن منوی فعلی
            if (submenu) {
                const isExpanded = submenu.classList.contains('show');
                submenu.classList.toggle('show');
                this.setAttribute('aria-expanded', !isExpanded);
                if (arrow) {
                    arrow.style.transform = isExpanded ? 'rotate(0deg)' : 'rotate(180deg)';
                }
            }
        });
    });

    // بستن منوها با کلیک خارج از سایدبار
    document.addEventListener('click', function(e) {
        if (!sidebar.contains(e.target) && !mobileToggle.contains(e.target)) {
            menuItems.forEach(item => {
                const parent = item.closest('.nav-item');
                const submenu = parent.querySelector('.collapse');
                const arrow = item.querySelector('.menu-arrow');

                if (submenu && submenu.classList.contains('show')) {
                    submenu.classList.remove('show');
                    item.setAttribute('aria-expanded', 'false');
                    if (arrow) {
                        arrow.style.transform = 'rotate(0deg)';
                    }
                }
            });

            // در موبایل، سایدبار رو هم ببند
            if (window.innerWidth < 992 && sidebar.classList.contains('show')) {
                toggleSidebar();
            }
        }
    });

    // نمایش منوی فعال
    const currentPath = window.location.pathname;
    const activeLinks = document.querySelectorAll('.sidebar .nav-link');
    
    activeLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
            
            // اگر در زیرمنو است، منوی والد را باز کن
            const parentCollapse = link.closest('.collapse');
            if (parentCollapse) {
                parentCollapse.classList.add('show');
                const parentLink = parentCollapse.previousElementSibling;
                if (parentLink) {
                    parentLink.classList.add('active');
                    parentLink.setAttribute('aria-expanded', 'true');
                    const arrow = parentLink.querySelector('.menu-arrow');
                    if (arrow) {
                        arrow.style.transform = 'rotate(180deg)';
                    }
                }
            }
        }
    });
});