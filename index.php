<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>
<body>
    <main id="app">
        <form action="http://localhost:88/php-snacks-b1/index.php" method="GET">
            <label for="stato">Stato:</label>
            <select name="stato" id="stato" v-model="filter.stato" @change="getAuto">
                <option value="all">all</option>
                <option value="ottime">ottime</option>
                <option value="buono">buono</option>
                <option value="indistruttibile">indistruttibile</option>
            </select>
        </form>
        <div class="container p-5">
            <div class="row row-col-3 g-3">
                <div v-for="auto in autousate" class="col-3 m-3 p-3 text-center card">
                    <h5>ID: {{auto.id}}</h5>
                    <h3>{{auto.marca}} {{auto.modello}}</h3>
                    <h4>{{auto.anno}}</h4>
                    <span>Km percorsi: {{auto.km}}</span>
                    <span>Telaio n. {{auto.numtelaio}}</span>
                    <p>Descrizione: {{auto.descrizione}}</p>
                    <span>Stato: <strong>{{auto.stato}}</strong></span>
                    <div class="card-footer">
                        <h3>Prezzo: {{auto.prezzo}}€</h3>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>
</html>