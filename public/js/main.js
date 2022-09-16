let toggle = document.getElementById('toggle');
let page = document.documentElement;
if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark')
    toggle.classList.add('dark');
    page.classList.add('dark');
  } else {
    document.documentElement.classList.remove('dark')
    toggle.classList.remove('dark');
    page.classList.remove('dark');
}
localStorage.theme = 'light'
localStorage.theme = 'dark'
localStorage.removeItem('theme')

function switchMode() {
    if (toggle.classList.contains('dark')) {
        toggle.classList.remove('dark');
        page.classList.remove('dark');
    } else {
        toggle.classList.add('dark');
        page.classList.add('dark');
    }
};