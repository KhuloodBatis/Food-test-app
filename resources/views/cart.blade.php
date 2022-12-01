<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order - Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="container-fluid mt-5">

        <div class="mx-auto" style="width: 350px;">


         <!-- resources/views/cart.blade.php -->
                <div class="mt-3">
                    @foreach ($cart_items as $item)
                    <div class="card mb-3 overflow-hidden" style="max-width: 540px; max-height: 145px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ $item['image'] }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">

                                    <div class="float-start">
                                        <h5 class="card-title m-0 p-0">{{ $item['name'] }}</h5>
                                        <span>${{ $item['cost'] }}</span>
                                    </div>

                                    <div class="float-end">
                                        <button type="button" class="btn btn-link">Remove</button>
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="mt-4">
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-secondary btn-sm">-</button>
                                        </div>
                                        <div class="col-auto">
                                            <input class="form-control form-control-sm" type="text" name="qty" value="{{ $item['qty'] }}" style="width: 50px;">
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-secondary btn-sm">+</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

        </div>

    </div>

    <script src="{{ mix('js/cart.js') }}" defer></script>
</body>
</html>
