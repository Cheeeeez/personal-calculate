<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form method="post">
        @csrf
        <div class="row justify-content-md-center">
            <div class="col-5 mt-5">
                <div class="row">
                    <input style="text-align: right" name="input" type="text" id="input"
                           value="@if(isset($result)) {{$result}} @endif" class="col-11">
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-5">
                <div class="row mt-2">
                    <button type="button" class="col-2 btn btn-primary mr-2" value="7" onclick="showValue(this.value)">
                        7
                    </button>
                    <button type="button" class="col-2 btn btn-primary mr-2" value="8" onclick="showValue(this.value)">
                        8
                    </button>
                    <button type="button" class="col-2 btn btn-primary mr-2" value="9" onclick="showValue(this.value)">
                        9
                    </button>
                    <button type="button" class="col-2 btn btn-primary mr-2" value="/" onclick="showValue(this.value)">
                        /
                    </button>
                    <button type="button" class="col-2 btn btn-primary mr-2" onclick="clearAll()">CE</button>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-5">
                <div class="row mt-2">
                    <button type="button" class="col-2 btn btn-primary mr-2" value="4" onclick="showValue(this.value)">
                        4
                    </button>
                    <button type="button" class="col-2 btn btn-primary mr-2" value="5" onclick="showValue(this.value)">
                        5
                    </button>
                    <button type="button" class="col-2 btn btn-primary mr-2" value="6" onclick="showValue(this.value)">
                        6
                    </button>
                    <button type="button" class="col-2 btn btn-primary mr-2" value="*" onclick="showValue(this.value)">
                        *
                    </button>
                    <button type="button" class="col-2 btn btn-primary mr-2">C</button>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-5">
                <div class="row mt-2">
                    <button type="button" class="col-2 btn btn-primary mr-2" value="1" onclick="showValue(this.value)">
                        1
                    </button>
                    <button type="button" class="col-2 btn btn-primary mr-2" value="2" onclick="showValue(this.value)">
                        2
                    </button>
                    <button type="button" class="col-2 btn btn-primary mr-2" value="3" onclick="showValue(this.value)">
                        3
                    </button>
                    <button type="button" class="col-2 btn btn-primary mr-2" value="-" onclick="showValue(this.value)">
                        -
                    </button>
                    <button type="button" class="col-2 btn btn-primary mr-2" value="%" onclick="showValue(this.value)">
                        %
                    </button>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-5">
                <div class="row mt-2">
                    <button type="button" class="col-4 btn btn-primary mr-3" value="0" onclick="showValue(this.value)">
                        0
                    </button>
                    <button type="button" class="col-2 btn btn-primary mr-2" value="." onclick="showValue(this.value)">
                        .
                    </button>
                    <button type="button" class="col-2 btn btn-primary mr-2" value="+" onclick="showValue(this.value)">
                        +
                    </button>
                    <input type="submit" class="col-2 btn btn-primary mr-2" value="=">
                </div>
            </div>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<script>
    let result = document.getElementById('input');

    function showValue(obj) {
        result.value += obj;
    }

    function clearAll() {
        result.value = null;
    }
</script>
</body>
</html>
