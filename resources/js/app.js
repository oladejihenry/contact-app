require('./bootstrap');

import { createApp } from 'vue';
import App from './components/App.vue';

import { library } from '@fortawesome/fontawesome-svg-core'
import { faPlusSquare } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faPlusSquare)



const app =  createApp({
    components: {
        App
    }
});
app.component('font-awesome-icon', FontAwesomeIcon)
app.mount("#app");
