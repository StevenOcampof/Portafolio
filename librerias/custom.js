document.addEventListener('DOMContentLoaded', () => {
    const root = document.documentElement;
    const toggleBtn = document.getElementById('toggle-mode');
    const themeIcon = document.getElementById('theme-icon');

    if (!toggleBtn) return;

    // Sincronizar icono según el tema actual
    syncIcon();

    toggleBtn.addEventListener('click', () => {
        const isDark = root.classList.toggle('dark-mode');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        syncIcon();
    });

    function syncIcon() {
        const isDark = root.classList.contains('dark-mode');
        if (themeIcon) {
            themeIcon.classList.toggle('fa-moon', !isDark);
            themeIcon.classList.toggle('fa-sun', isDark);
        }
    }
});
