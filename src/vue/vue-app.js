import {createApp} from "vue";
import RestrictedAreaView from "./views/restricted/RestrictedAreaView.vue";
createVueApp("#restrictedArea", RestrictedAreaView);
function createVueApp(id, component) {
    if (document.querySelector(id)) {
        const app = createApp(component);
        app.mount(id);
    }
}
