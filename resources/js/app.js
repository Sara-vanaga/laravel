import './bootstrap';
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

// Import FontAwesome
import '@fortawesome/fontawesome-free/js/fontawesome';
import '@fortawesome/fontawesome-free/js/solid';
import '@fortawesome/fontawesome-free/js/regular';
import '@fortawesome/fontawesome-free/js/brands';

document.addEventListener('DOMContentLoaded', function() {
    // متغیرهای مورد نیاز
    const sidebarContent = document.querySelector('.sidebar-content');
    const sidebar = document.querySelector('.sidebar');
    const sidebarOverlay = document.querySelector('.sidebar-overlay');
    const mobileToggle = document.querySelector('.sidebar-mobile-toggle');
    const menuItems = document.querySelectorAll('.sidebar .nav-link[data-bs-toggle="collapse"]');
    const body = document.body;

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
            e.preventDefault();

            const targetId = this.getAttribute('data-bs-target') || this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            
            // بستن سایر منوها
            menuItems.forEach(otherItem => {
                if (otherItem !== this) {
                    otherItem.setAttribute('aria-expanded', 'false');
                    const otherTargetId = otherItem.getAttribute('data-bs-target') || otherItem.getAttribute('href');
                    const otherTarget = document.querySelector(otherTargetId);
                    if (otherTarget) {
                        otherTarget.classList.remove('show');
                    }
                    const otherArrow = otherItem.querySelector('.menu-arrow');
                    if (otherArrow) {
                        otherArrow.style.transform = 'rotate(0deg)';
                    }
                }
            });

            // تغییر وضعیت منوی فعلی
            this.setAttribute('aria-expanded', (!isExpanded).toString());
            if (targetElement) {
                targetElement.classList.toggle('show');
                const arrow = this.querySelector('.menu-arrow');
                if (arrow) {
                    arrow.style.transform = !isExpanded ? 'rotate(180deg)' : 'rotate(0deg)';
                }
            }
        });
    });

    // نمایش منوی فعال
    const currentPath = window.location.pathname;
    const activeLinks = document.querySelectorAll('.sidebar .nav-link');
    
    activeLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
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