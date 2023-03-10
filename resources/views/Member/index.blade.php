<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" id="harga" class="form-control" placeholder="Harga Barang">
                        </div>
                        <div class="form-group">
                            <input type="text" id="jumlah" class="form-control" placeholder="Jumlah Barang">
                        </div>
                        <div class="form-group mb-0">
                            <input type="text" id="total" class="form-control" placeholder="Total" readonly="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#jumlah, #harga").keyup(function() {
            var harga  = $("#harga").val();
            var jumlah = $("#jumlah").val();

            var total = parseInt(harga) * parseInt(jumlah);
            $("#total").val(total);
        });
    });
</script>