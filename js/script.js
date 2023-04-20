const { createApp } = Vue;

createApp({
    data() {
        return {
            todoLangs: [],
        }
    },

    methods: {
        getlanguages() {

            axios.get('./server.php').then(res => {

                console.log(res);

                this.todoLangs = res.data;

            });
        },
    },

    mounted() {
        this.getlanguages();
    },

}).mount('#app');