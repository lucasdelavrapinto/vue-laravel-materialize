<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Materialize -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div id="app" class="title m-b-md">@{{ title }}</div>

                <div id="form" class="row">
                    <div class="input-field col s12">
                        <input type="text" v-model="text" v-on:keyup.enter="addTodo()">
                        <label for="input-tarefa">Adicionar</label>
                    </div>

                    <div class="row" v-for="item, index in list">
                        <div class="col s12" >
                            <div class="card blue-grey darken-1" @click="remove(index)">
                                <div class="card-content white-text">
                                    <span class="card-title">@{{item.text}}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Materialize Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <!-- Vue Js -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js'></script>

        <script>
        M.updateTextFields(); //Materialize

        var app = new Vue({
            el: '#app',
            data: {
                title: 'To do List!',
            }
        });

        var form = new Vue({
            el: '#form',
            data: {
                text: '',
                title: 'To do List!',
                list: [{ text: 'Clique para remover' }]
            },
            methods: {
                addTodo(){
                    this.list.push({ text: this.text })
                    this.text = ''
                },
                remove(index){
                    this.$delete(this.list, index)
                }
            }
        });

        </script>
    </body>
</html>
