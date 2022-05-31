<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Izipay</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Javascript library. Should be loaded in head section -->
    <script type="text/javascript"
        src="https://static.micuentaweb.pe/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js" 
        kr-public-key="51447378:testpublickey_3SNSOCewrXOZNL2oNYoixUO4q9RaBwClYyCIEofTLGs2g">
    </script>

    <!-- theme and plugins. should be loaded in the HEAD section -->
    <link rel="stylesheet" href="https://static.micuentaweb.pe/static/js/krypton-client/V4.0/ext/classic-reset.css">
    <script type="text/javascript" src="https://static.micuentaweb.pe/static/js/krypton-client/V4.0/ext/classic.js"></script>  

</head>
<body class="bg-light">    
    
    <div class="container">
    <main>
        <div class="py-5 text-center">      
        <h2>Pasarela de Pagos</h2>
        <p class="lead"></p>
        </div>

        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <div class="d-flex justify-content-center">
                    <h4>
                    <span class="text-primary ">Formulario Incrustado</span>                  
                    </h4>
                </div>
                <hr class="my-4">    
                    <div class="d-flex justify-content-center">
                        <div id="form"></div>                   
                    </div>                    
                <hr class="my-4">

            </div>
            

        <div class="col-md-7 col-lg-8">            
            <form id="formulario" class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-sm-6">
                    <label for="firstName" class="form-label">Monto Total</label>
                    <input name="Monto" type="text" class="form-control" id="firstName" placeholder="S/." value="" required>
                    <div class="invalid-feedback">
                        Ingrese un monto para pagar.
                    </div>
                    </div>

                    <div class="col-sm-6">
                    <label for="lastName" class="form-label">Moneda</label>
                    <input name="Moneda" type="text" class="form-control" id="lastName" placeholder="PEN" value="PEN" readonly="readonly">                    
                    </div>

                    <!--
                    <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" id="username" placeholder="Username" required>
                    <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>
                    </div>

                    <div class="col-12">
                    <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                    </div>

                    <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                    </div>

                    <div class="col-12">
                    <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                    </div>

                    <div class="col-md-5">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" id="country" required>
                        <option value="">Choose...</option>
                        <option>United States</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                    </div>

                    <div class="col-md-4">
                    <label for="state" class="form-label">State</label>
                    <select class="form-select" id="state" required>
                        <option value="">Choose...</option>
                        <option>California</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                    </div>

                    <div class="col-md-3">
                    <label for="zip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="zip" placeholder="" required>
                    <div class="invalid-feedback">
                        Zip code required.
                    </div>
                    </div>
                    -->
                </div>            
            
                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Finalizar con el Pago</button>
            </form>
        </div>
        </div>
    </main>
    </div>
    <script src="app.js"></script>    
</body>
</html>
