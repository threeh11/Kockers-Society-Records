let toggle = document.getElementById('toggle');
let page = document.documentElement;
let moon = document.getElementById('moon');
let sun = document.getElementById('sun');
let count = 0;//Счетчик для смены темы
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
    count++;
    if (count % 2 != 0){
        localStorage.setItem('switch', 'off');
        if (! toggle.classList.contains('dark')) {
            setDark();
        } else {
            setLight()
        }
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
    moon.classList.remove('swap-on');
    sun.classList.remove('swap-off');
    moon.classList.add('swap-off');
    sun.classList.add('swap-on');
} else {
    setLight();
    moon.classList.add('swap-on');
    sun.classList.add('swap-off');
    moon.classList.remove('swap-off');
    sun.classList.remove('swap-on');
}



//

