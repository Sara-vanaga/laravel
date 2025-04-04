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

    // مدیریت منوها با استفاده از Bootstrap Collapse
    menuItems.forEach(item => {
        const targetId = item.getAttribute('data-bs-target') || item.getAttribute('href');
        if (targetId) {
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const bsCollapse = new bootstrap.Collapse(targetElement, {
                    toggle: false
                });

                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    const parent = this.closest('.nav-item');
                    const arrow = this.querySelector('.menu-arrow');

                    // بستن سایر منوهای باز
                    menuItems.forEach(otherItem => {
                        if (otherItem !== this) {
                            const otherTargetId = otherItem.getAttribute('data-bs-target') || otherItem.getAttribute('href');
                            if (otherTargetId) {
                                const otherTarget = document.querySelector(otherTargetId);
                                if (otherTarget && otherTarget.classList.contains('show')) {
                                    new bootstrap.Collapse(otherTarget).hide();
                                    otherItem.setAttribute('aria-expanded', 'false');
                                    const otherArrow = otherItem.querySelector('.menu-arrow');
                                    if (otherArrow) {
                                        otherArrow.style.transform = 'rotate(0deg)';
                                    }
                                }
                            }
                        }
                    });

                    // باز/بسته کردن منوی فعلی
                    const isExpanded = targetElement.classList.contains('show');
                    if (isExpanded) {
                        bsCollapse.hide();
                        this.setAttribute('aria-expanded', 'false');
                        if (arrow) {
                            arrow.style.transform = 'rotate(0deg)';
                        }
                    } else {
                        bsCollapse.show();
                        this.setAttribute('aria-expanded', 'true');
                        if (arrow) {
                            arrow.style.transform = 'rotate(180deg)';
                        }
                    }
                });
            }
        }
    });

    // بستن منوها با کلیک خارج از سایدبار
    document.addEventListener('click', function(e) {
        if (!sidebar.contains(e.target) && !mobileToggle.contains(e.target)) {
            menuItems.forEach(item => {
                const targetId = item.getAttribute('data-bs-target') || item.getAttribute('href');
                if (targetId) {
                    const targetElement = document.querySelector(targetId);
                    if (targetElement && targetElement.classList.contains('show')) {
                        new bootstrap.Collapse(targetElement).hide();
                        item.setAttribute('aria-expanded', 'false');
                        const arrow = item.querySelector('.menu-arrow');
                        if (arrow) {
                            arrow.style.transform = 'rotate(0deg)';
                        }
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
                const bsCollapse = new bootstrap.Collapse(parentCollapse, {
                    toggle: false
                });
                bsCollapse.show();
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