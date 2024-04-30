import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    close() {
        this.element.width = '0';
        this.element.remove();
    }
}
