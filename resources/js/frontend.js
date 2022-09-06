import Vue from "vue";
import router from "./router";
import App from "./view/App.vue"
new Vue({
    el:"#app",
    render:(h)=>h(App),
    router
})