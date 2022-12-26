<div class="p2">
    <div class="form-group">
        <label >Nama Customer:</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Nama Customer"></br>
        <label >Tanggal Masuk:</label>
        <input type="date" name="alamat" id="alamat" class="form-control" placeholder="Tanggal Masuk"></br>
        <input type="text" name="email" id="email" class="form-control" placeholder="email product"></br>
        <select id="cars" class="form-select" aria-label="Default select example">
            <option value="reguler">Reguler 3000/kg</option>
            <option value="express">Express 5000/kg</option>
        </select></br>
        <input type="text" name="berat" id="berat" class="form-control" placeholder="berat product"></br>
        <input type="text" name="biaya" id="biaya" class="form-control" placeholder="biaya product" disabled>



    </div>
    <div class="form-group mt-2">
        <button class="btn btn-success" onClick="store()">Create</button>
    </div>
</div>
<script>
$(document).ready(function() {
        $("#berat").keyup(function() {
            var harga  = $("#berat").val();
            if($("#cars").val() == "reguler"){
                var total = parseInt(harga) * 3000;
                $("#biaya").val(total);
            }else if($("#cars").val() == "express"){
                var total = parseInt(harga) * 5000;
                $("#biaya").val(total);
            }
        });
    });
</script>
      