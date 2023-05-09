const { createApp } = Vue;
createApp({
    data(){
        return{
            start: false
        }
    },
    methods: {
        hello(){
            this.start = true;
        }
    }
}).mount("#app");