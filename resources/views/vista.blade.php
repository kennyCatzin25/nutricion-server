<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FITNESS & SHAPE SISTEM</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Helvetica;
            }
        .titulo{
            color: white;
            z-index: 1;
            padding-top: 50px;
            width: 800px;
            text-align: center
        }
        .titulo h2{
            text-decoration: underline;
        }
        .titulo img{
            position: absolute;
            top: 0;
            left: 600px;
        }
        .top{
            padding-top: 0.5em;
        }
        .titulo p{
            color: black;
            font-size: 16px;
            font-weight: 700;
        }
        .img img{
            position: absolute;
            width: 800px;
            height: 1100px;
            left: 0;
            top: 0;
            z-index: -1;
        }
        #fisrt{
            width: 800px;
            align-items: center;
            color: red;
            margin-top: 1em;
            margin-left: 200px;
        }
        #fisrt p{
            color: black;
            font-size: 16px;
            font-weight: 700;
            padding-left: 5px;
        }
        .autocomplete{
            width: 800px;
            align-items: center;
            font-family: helvetica;
            color: red;
            margin-left: 200px;
        }
        .autocomplete p{
            color: black;
            font-size: 16px;
            font-weight: 700;
            padding-left: 5px;
        }
        .table_v{
            width: 800px;
            margin-top: 50px;
        }
        table{
            width: 80%;
            margin: auto;
            
        }
        table th{
            text-align: center;
            border: 1px black solid;
            padding: 15px 10px; 
        }
        table td{
            text-align: left;
            border: 1px black solid;
            padding: 15px 10px; 
        }
    </style>
</head>
<body>
    <div class="img">
        <img src="http://serteza.com/nut-serv/storage/public/fondo-1.png" alt="">
    </div>
    <div class="titulo">
    <h2>FITNESS AND SHAPE SYSTEM</h2>
    <img src="http://serteza.com/nut-serv/storage/public/200pxblanco.png" alt="">
    <p class="top">L.N. Rolando Arutro Almeida Burgos</p>
    <p>Especialista en Nutrición y Suplementación Deportiva</p>
    <p>Entrenador Profecional y Personalizado</p>
    <p>Cel: (999) 2 42 12 49 / e-mail: roly_alme@hotmail.com</p>
    </div>
    <div id="fisrt">
        <h4>FECHA : </h4>
        <p>{{date("d") . " de " . date("F"). " del " . date("Y")}}</p>
    </div>
    <div class="autocomplete">
        <h4>NOMBRE :</h4>
        <p>{{$data['nombre']}}</p>
    </div>
    <div class="autocomplete">
        <h4>PESO :</h4>
        <p>{{$data['peso']}}</p>
    </div>
    <div class="autocomplete">
        <h4>PORCENTAJE DE TEJIDO ADIPOSO :</h4>
        <p>{{"Info de la bd"}}</p>
    </div>
    <div class="autocomplete">
        <h4>MASA MUSCULAR :</h4>
        <p>{{"Info de la bd"}}</p>
    </div>
    <div>
        <table  class="table table-striped table-dark">
            <tr>
              <th>DESAYUNO</th>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dolores architecto officiis hic nemo, eum cumque possimus impedit voluptas voluptates!</td>
            </tr>
            <tr>
              <th>ALMUERZO</th>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eum perferendis, deleniti quod quas molestiae nesciunt consequuntur suscipit dicta ab velit quibusdam? Dignissimos, voluptatem amet, magnam facilis incidunt molestias illo mollitia repudiandae nobis quia, ipsum praesentium ab? Dolore, voluptatum doloremque?</td>
            </tr>
            <tr>
              <th>CENA</th>
              <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique maiores, repellendus expedita, rerum aperiam magni architecto voluptates illum itaque placeat nesciunt? Perferendis laborum expedita excepturi dicta! Qui natus aspernatur sed.</td>
            </tr>
          </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>