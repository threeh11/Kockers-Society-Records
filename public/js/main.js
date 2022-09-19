let toggle = document.getElementById('toggle');
let page = document.documentElement;

// Меняют общую тему сайта

/**
 * Устанавливает темную тему для сайта
 *
 * @returns {void}
 */
function setDark() {
    localStorage.setItem('userTheme', 'dark');
    page.classList.add('dark');
    page.classList.remove('light');
    toggle.classList.add('dark');
    toggle.classList.remove('light');
}

/**
 * Устанавливает свтелую тему для сайта
 *
 * @returns {void}
 */
function setLight() {
    localStorage.setItem('userTheme', 'light');
    page.classList.remove('dark');
    page.classList.add('light');
    toggle.classList.remove('dark');
    toggle.classList.add('light');
}

/**
 * Меняет тему сайта
 *
 * @returns {void}
 */
function switchMode() {
    localStorage.setItem('switch', 'off');
    if (! toggle.classList.contains('dark')) {
        setDark();
    } else {
        setLight()
    }
}

if (localStorage.getItem('switch') == 'on') {
    if (window.matchMedia('(prefers-color-scheme: dark)').matches == true) {
        localStorage.setItem('userTheme', 'dark');
    }
}

if (localStorage.getItem('userTheme') == null) {
    if (window.matchMedia('(prefers-color-scheme: dark)').matches == true) {
        localStorage.setItem('userTheme', 'dark');
    } else {
        localStorage.setItem('userTheme', 'light');
    }
}

if (localStorage.getItem('userTheme') == 'dark') {
    setDark();
} else {
    setLight();
}



//

