let toggle = document.getElementById('toggle');
let page = document.documentElement;

if (localStorage.getItem('userTheme') == null) {
    if (! toggle.classList.contains('dark')) {
        switchMode();
    } else {
        // Определение темы браузера пользователя
        if (window.matchMedia('(prefers-color-scheme: dark)').matches == true) {
            page.classList.add('dark')
            toggle.classList.add('dark')
        } if (window.matchMedia('(prefers-color-scheme: dark)').matches == false) {
            page.classList.remove('dark')
            toggle.classList.remove('dark')
        }
    }
} else {
    page.classList.add(localStorage.getItem('userTheme'))
    toggle.classList.add(localStorage.getItem('userTheme'))
}

console.log(localStorage.getItem('userTheme'));

function switchMode() {
    if (! toggle.classList.contains('dark')) {
        localStorage.setItem('userTheme', 'dark');
        page.classList.add(localStorage.getItem('userTheme'))
        toggle.classList.add(localStorage.getItem('userTheme'))
    } else {
        localStorage.setItem('userTheme', 'light');
        page.classList.add(localStorage.getItem('userTheme'))
        toggle.classList.add(localStorage.getItem('userTheme'))
    }
};