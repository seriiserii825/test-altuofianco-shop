import "../vue/vue-app.js";
import streetMap from './modules/footer/map';
import {mainMenu} from './modules/header/mainMenu';
import fixedHeader from './modules/header/fixedHeader';
import headerAuth from "./modules/header/header-auth";
import fillMenuOnResize from "./modules/header/fill-menu-on-resize";
import checkToken from "./modules/auth/check-token";
import toggleLoggedContent from "./modules/auth/toggleLoggedContent";
import agentAuth from "./modules/home/agentAuth";
document.addEventListener('DOMContentLoaded', function () {
    const agent = document.querySelector('.agent');
    headerAuth();
    if (document.querySelector('#mymap')) {
        streetMap();
    }
    mainMenu();
    fixedHeader();
    fillMenuOnResize();
    checkToken();
    toggleLoggedContent();
    if (agent) {
        agentAuth();
    }
});
