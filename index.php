<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>To Do List</title>
</head>

<body>
    <div id="app">
        <div class="card container">
            <header>
                <div class=" flex-column-center page-header">
                    <h1>{{ title }}</h1>
                    <input class="input-text" placeholder="Inserisci Todo" type="text" v-model:"newTodo">
                </div>                
            </header>
            <main>
                <div class="container">
                    <ul class="todos">
                        <li class="todos__item" v-for="(todo , i) in todos" :key="i">
                            <p>{{ todo[i] }}</p>
                            <span>&cross;</span>
                        </li>
                    </ul>
                </div>
            </main>
        </div>       
    </div>
    <script src="./js/app.js"></script>
</body>

</html>