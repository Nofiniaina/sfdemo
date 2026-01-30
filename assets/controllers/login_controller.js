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
    static targets = ['username', 'password'];

    prefillMichaelUser() {
        this.usernameTarget.value = 'michael.chen'
        this.passwordTarget.value = 'user123'
    }

    prefillSarahAdmin() {
        this.usernameTarget.value = 'sarah.johnson'
        this.passwordTarget.value = 'admin123'
    }

    prefillEmmaEditor() {
        this.usernameTarget.value = 'emma.rodriguez'
        this.passwordTarget.value = 'user123'
    }

    prefillJamesEditor() {
        this.usernameTarget.value = 'james.wilson'
        this.passwordTarget.value = 'editor123'
    }
}
