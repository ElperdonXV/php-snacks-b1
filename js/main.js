const app = new Vue({
    el: '#app',
    data: {
        autousate: [],
    },
    created() {
        axios.get('http://localhost:88/php-snacks-b1/server/controller.php')
        .then((result) => {
            this.autousate = result.data.results;
            console.log(result.data.results);
            console.log(this.autousate);
        })
        .catch((error)=>{
            console.log(error);
        });
    }
});