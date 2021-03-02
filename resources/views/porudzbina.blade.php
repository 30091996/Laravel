<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Porucivanje | Cvecara</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


</head>

<body>
    <div id="navbar"></div>
    <div class="container">
        <form method="POST" action="http://127.0.0.1:8000/porudzbina/poruci">
            @csrf
            <div class="row">
                <div class="col">
                    Kolicina na lageru:
                    <input type="text" disabled value={{$_GET['na_lageru']}} class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <input type="text" name="proizvod_id" hidden value={{$_GET['id']}} class="form-control" placeholder="Ime i prezime">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Ime i prezime:
                    <input type="text" name="ime_prezime" class="form-control" placeholder="Ime i prezime">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Email:
                    <input type="text" name="email" class="form-control" placeholder="Email adresa">
                </div>
                <div class="col">
                    Broj telefona:
                    <input type="text" name="broj_telefona" class="form-control" placeholder="Broj telefona">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Adresa:
                    <input type="text" name="adresa" class="form-control" placeholder="Adresa">
                </div>
                <div class="col">
                    Broj porucenih proizvoda:
                    <input type="number" name="broj_porucenih_proizvoda" class="form-control">
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <input type="submit" value="Poruci" class="btn-success form-control">
                </div>
            </div>
        </form>
    </div>
</body>

</html>