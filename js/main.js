const app = new Vue({
    el: '#app',
    data: {
        autousate: [],
        filter: {
            stato: 'all',
            marca: 'all',
        },
    },
    created() {
       this.getAuto();
    },
    methods: {
        getAuto(){
            const params = {
                stato: this.filter.stato,
                marca: this.filter.marca,
            };
            axios.get('http://localhost:88/php-snacks-b1/server/controller.php', { params })
            .then((result) => {
            this.autousate = result.data.results;
            console.log(result.data.results);
            console.log(this.autousate);
            console.log(params.stato);
            })
            .catch((error)=>{
            console.log(error);
            });
        }
    }
});