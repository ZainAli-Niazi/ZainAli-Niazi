       // Enhanced Sidebar Functionality
        const sidebar = document.querySelector('.sidebar');
        const sidebarToggle = document.querySelector('.sidebar-toggle');
        const mainContent = document.querySelector('.main-content');
        const mainHeader = document.querySelector('.main-header');

        // Toggle Sidebar
        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            document.body.classList.toggle('sidebar-active');
        });

        // Auto-close on mobile when clicking outside
        document.addEventListener('click', (e) => {
            if (window.innerWidth < 992 && !sidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
                sidebar.classList.remove('active');
                document.body.classList.remove('sidebar-active');
            }
        });

        // Active Menu Item Management
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                if (this.hasAttribute('data-bs-toggle')) {
                    // For dropdown toggles, prevent default only if it's a # link
                    if (this.getAttribute('href') === '#') {
                        e.preventDefault();
                    }
                } else {
                    // For regular links, update active state
                    document.querySelectorAll('.nav-link').forEach(l => {
                        if (!l.hasAttribute('data-bs-toggle')) {
                            l.classList.remove('active');
                        }
                    });
                    this.classList.add('active');
                }
            });
        });

        // Initialize sidebar state based on screen size
        function initSidebar() {
            if (window.innerWidth >= 992) {
                sidebar.classList.add('active');
                document.body.classList.add('sidebar-active');
            } else {
                sidebar.classList.remove('active');
                document.body.classList.remove('sidebar-active');
            }
        }

        // Handle window resize
        window.addEventListener('resize', initSidebar);

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', initSidebar);




        //--------------------------- Full Screen code-------------------------



         // Fullscreen functionality
        const fullscreenToggle = document.getElementById('fullscreenToggle');
    
        let isFullscreen = false;

        fullscreenToggle.addEventListener('click', toggleFullscreen);

        // Also support ESC key to exit fullscreen
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && isFullscreen) {
                toggleFullscreen();
            }
        });

        function toggleFullscreen() {
            isFullscreen = !isFullscreen;

            if (isFullscreen) {
                // Enter fullscreen
                mainContent.classList.add('fullscreen-mode');
                document.body.style.overflow = 'hidden';
                fullscreenToggle.innerHTML = '<i class="fas fa-compress"></i>';
                fullscreenToggle.title = 'Exit Fullscreen';
            } else {
                // Exit fullscreen
                mainContent.classList.remove('fullscreen-mode');
                document.body.style.overflow = '';
                fullscreenToggle.innerHTML = '<i class="fas fa-expand"></i>';
                fullscreenToggle.title = 'Toggle Fullscreen';
            }

            // Move focus to the toggle button for better accessibility
            fullscreenToggle.focus();
        }



//------------------------------- Admin Dashboard-----------------------------------------


// Initialize accordion functionality
document.addEventListener('DOMContentLoaded', function () {
    // Auto-collapse other items when one is opened
    const accordionButtons = document.querySelectorAll('.accordion-button');
    accordionButtons.forEach(button => {
        button.addEventListener('click', function () {
            const target = this.getAttribute('data-bs-target');
            if (!this.classList.contains('collapsed')) {
                // Only collapse others if this one is being opened
                accordionButtons.forEach(btn => {
                    if (btn !== button && !btn.classList.contains('collapsed')) {
                        const collapse = bootstrap.Collapse.getInstance(btn.getAttribute('data-bs-target'));
                        if (collapse) {
                            collapse.hide();
                        }
                    }
                });
            }
        });
    });
});