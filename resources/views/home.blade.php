<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @foreach($allmovies as $Movie)
    <div class="card-film">
        <h1>{{$Movie->title}}</h1>
        <img src="{{$Movie->cover}}" alt="copertina film {{$Movie->title}}">
        <p>{{$Movie->abstract}}</p>
        <div>
            <span>$ {{$Movie->price}} -----</span>
            <span>PEGI {{$Movie->pegi}}</span>
        </div>
    </div>
        
    @endforeach


    <!--@dump($allmovies) -->

    
    
    
    

</body>
</html>