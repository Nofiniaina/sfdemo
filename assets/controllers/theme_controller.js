import { Controller } from '@hotwired/stimulus';

/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */
export default class extends Controller {
    static targets = ['lighticon', 'darkicon', 'themetext'];

    connect() {
        const currentTheme = localStorage.getItem('theme');

        this.themetextTarget.textContent = `Light`;
        this.darkiconTarget.classList.add('hidden');
    }

    toggle(event) {
        const isDark = event.target.checked;

        if (isDark) {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
            this.themetextTarget.textContent = `Dark`;
            this.darkiconTarget.classList.remove('hidden');
            this.lighticonTarget.classList.add('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            this.themetextTarget.textContent = `Light`;
            this.lighticonTarget.classList.remove('hidden');
            this.darkiconTarget.classList.add('hidden');
        }
    }
}
