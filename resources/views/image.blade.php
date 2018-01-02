@extends('layouts.app')

@section('content')
    <h2>image</h2>
<div id="slider">
    <figure>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhUQTbg0zMVzP9zF5ZKIvRiXMjpp7QoFqd7rTNc4uyIf8CX2d8Eg" alt>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhUQTbg0zMVzP9zF5ZKIvRiXMjpp7QoFqd7rTNc4uyIf8CX2d8Eg" alt>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhUQTbg0zMVzP9zF5ZKIvRiXMjpp7QoFqd7rTNc4uyIf8CX2d8Eg" alt>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhUQTbg0zMVzP9zF5ZKIvRiXMjpp7QoFqd7rTNc4uyIf8CX2d8Eg" alt>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhUQTbg0zMVzP9zF5ZKIvRiXMjpp7QoFqd7rTNc4uyIf8CX2d8Eg" alt>
        <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhUQTbg0zMVzP9zF5ZKIvRiXMjpp7QoFqd7rTNc4uyIf8CX2d8Eg" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
        </div>

        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    </figure>

</div>
<!DOCTYPE HTML>
<html>
<head>
    <style>
        #div1, #div2 {
            float: left;
            width: 100px;
            height: 35px;
            margin: 10px;
            padding: 10px;
            border: 1px solid black;
        }
    </style>
    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }
    </script>
</head>
<body>

<h2>image</h2>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="img_w3slogo.gif" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
</div>

<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

</body>
</html>

@endsection