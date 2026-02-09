import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ['lighticon', 'darkicon', 'themetext', 'toggle'];
    
    connect() {
        const currentTheme = localStorage.getItem('theme');
        const isDark = currentTheme === 'dark';
        
        // Apply the stored theme
        if (isDark) {
            document.documentElement.classList.add('dark');
            this.themetextTarget.textContent = 'Dark';
            this.darkiconTarget.classList.remove('hidden');
            this.lighticonTarget.classList.add('hidden');
            this.toggleTarget.checked = true;
        } else {
            document.documentElement.classList.remove('dark');
            this.themetextTarget.textContent = 'Light';
            this.lighticonTarget.classList.remove('hidden');
            this.darkiconTarget.classList.add('hidden');
            this.toggleTarget.checked = false;
        }
    }
    
    toggle(event) {
        const isDark = event.target.checked;
        
        if (isDark) {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
            this.themetextTarget.textContent = 'Dark';
            this.darkiconTarget.classList.remove('hidden');
            this.lighticonTarget.classList.add('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
            this.themetextTarget.textContent = 'Light';
            this.lighticonTarget.classList.remove('hidden');
            this.darkiconTarget.classList.add('hidden');
        }
    }
}