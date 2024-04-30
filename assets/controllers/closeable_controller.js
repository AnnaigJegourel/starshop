import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    async close() {
        //d'abord, réduire la largeur de l'élément
        this.element.width = '0';

        //ensuite, attendre que l'animation soit finie
        await this.#waitForAnimation();

        //enfin, faire disparaître l'élément
        this.element.remove();
    }

    #waitForAnimation() {
        return Promise.all(
            this.element.getAnimations().map((animation) => animation.finished),
        );
    }
}
