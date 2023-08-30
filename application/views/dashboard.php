<div class="container-fluid">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        
    </ol>
</div>

    <div class="row text-center mt-4">

    <?php foreach ($barang as $barang) : ?>

        <div class="card ml-5 " style="width: 18rem;">
        <img src="<?php echo base_url().'/uploads/'.$barang->gambar ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title mb-1"><?php echo $barang->nama_barang ?></h5>
            <small><?php echo $barang->nama_barang ?>keterangan</small><br>
            <span class="badge badge-pill badge-success mb-3">Rp.<?php echo $barang->harga ?></span><br>
            <a href="#" class="btn btn-sm btn-primary">Tambah Ke Keranjang</a>
            <a href="#" class="btn btn-sm btn-success">Detail</a>
        </div>
        </div>

    <?php endforeach; ?>
    </div>
</div>