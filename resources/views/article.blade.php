<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body{
            padding:1rem 4rem;
        }
        header .title{
            text-align:center;
        }
        header .sub{
            display:flex;
            justify-content:space-around;
            border-bottom:0.1rem solid red;
        }
        .contents{
            margin-top:2rem;    
        }
    </style>
  </head>
  <body>
    <header>
        <h1 class='title'>Kathmandu Post</h1>
        <div class="sub">
            <p>Sunday, September 25, 2022</p>
            <p><strong>Without Fear or Favour</strong></p>
            <p>21.12°C Kathmandu
            <br>Air Quality in Kathmandu: 70</p>
        </div>
    </header>
    <section class="contents">
            <h1>{{$articles['header']}}</h1>
            <p>{{$articles['detail']}}</p>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>