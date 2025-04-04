import PerfectScrollbar from 'perfect-scrollbar';

document.addEventListener('DOMContentLoaded', function() {
    // Initialize Perfect Scrollbar
    const sidebarContent = document.querySelector('.sidebar-content');
    if (sidebarContent) {
        const ps = new PerfectScrollbar(sidebarContent, {
            suppressScrollX: true,
            wheelPropagation: false
        });
    }

    // Toggle Sidebar on Mobile
    const sidebarToggler = document.querySelector('.sidebar-toggler');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');
    const sidebarOverlay = document.querySelector('.sidebar-overlay');

    if (sidebarToggler) {
        sidebarToggler.addEventListener('click', toggleSidebar);
    }

    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', toggleSidebar);
    }

    function toggleSidebar() {
        sidebar.classList.toggle('show');
        sidebarOverlay.classList.toggle('show');
    }

    // Handle Menu Items
    const menuItems = document.querySelectorAll('.sidebar .nav-link[data-bs-toggle="collapse"]');
    
    menuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();

            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            
            // Close other menus
            menuItems.forEach(otherItem => {
                if (otherItem !== this && otherItem.getAttribute('aria-expanded') === 'true') {
                    otherItem.setAttribute('aria-expanded', 'false');
                    otherItem.classList.remove('active');
                    const targetId = otherItem.getAttribute('href');
                    const targetCollapse = document.querySelector(targetId);
                    if (targetCollapse) {
                        bootstrap.Collapse.getInstance(targetCollapse).hide();
                    }
                }
            });

            // Toggle current menu
            this.setAttribute('aria-expanded', !isExpanded);
            this.classList.toggle('active', !isExpanded);
        });
    });

    // Close menus when clicking outside
    document.addEventListener('click', function(e) {
        if (!sidebar.contains(e.target) && !sidebarToggler.contains(e.target)) {
            menuItems.forEach(item => {
                if (item.getAttribute('aria-expanded') === 'true') {
                    item.setAttribute('aria-expanded', 'false');
                    item.classList.remove('active');
                    const targetId = item.getAttribute('href');
                    const targetCollapse = document.querySelector(targetId);
                    if (targetCollapse) {
                        bootstrap.Collapse.getInstance(targetCollapse).hide();
                    }
                }
            });
        }
    });
});