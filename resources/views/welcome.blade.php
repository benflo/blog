<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
                align-items: left;
                display: flex;
                justify-content: left;
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
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">home</a>
                    <a href="{{url('/ajoutarticle')}}">ajout article</a>
                    @else
                        <a href="{{ route('login') }}">S'identifier</a>
                        <a href="{{ route('register') }}">Enregistrement</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    blog
                </div>
{{--
                <link href ="./css/custom.css" rel="stylesheet" type="text/css">
--}}

                <h2>Derniers Article</h2>
                <div class="post-container2">
                    @foreach($articles as $article)
                        <h2>{{$article->titre}}:</h2>
                        <p>{{$article->contenu}}</p>
                        <p>{{$article->created_at}}</p>
                        <p>{{$article->auteur}}</p>
                        @if(Route::has('login'))
                            @auth
                        <input type="checkbox" name="checkbox" class="" value="false">  Cocher la case pour poster l'article

                            @endauth

                        @endif

                    @endforeach


                </div>
                <h3>commentaires</h3>

                @foreach($commentaires as $commentaire)
                    <div class="post-container">
                <p>{{$commentaire->commentaire}}</p>
                <p>{{$commentaire->auteur}}</p>
                <p>{{$commentaire->created_at}}</p>

                        @if(Route::has('login'))
                            @auth

                            <a href="{{url ('/commentaire')}}">Modifier</a>
                            <a href="{{url ('/welcome')}}">Supprimer</a><br>


                            @endauth

                        @endif
                    </div>
                    @endforeach



                <form method="post" >
                    {{csrf_field()}}
                    commentaire: <textarea name="commentaire" id="commentaire"></textarea>
                    <input value="valider" type="submit"/>
                </form>
                </div>


            </div>
    </body>
</html>
