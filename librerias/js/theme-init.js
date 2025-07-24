(function () {
    // Aplica el tema guardado antes de renderizar la página
    if (localStorage.getItem('theme') === 'dark') {
        document.documentElement.classList.add('dark-mode');
    }
})();