const { createApp } = Vue;
createApp({
    methods: {
        hello(){
            console.log('hello');
        }
    }
}).mount("#app");