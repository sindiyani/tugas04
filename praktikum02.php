<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>praktikum 02</h1>
              </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Judul</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1>Belanja Online</h1>
                        </div>
                        <tbody>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8">
                                        <form action="2.form_belanja.php" method="POST">
                                            <div class="form-group row">
                                                <label for="costomer" class="col-3 col-form-label">Costomer</label>
                                                <div class="col-9">
                                                    <input id="costomer" name="costomer" placeholder="Nama Costomer" type="costomer" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-3">Pilih Produk</label>
                                                <div class="col-9">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input value="TV" name="pilih_produk" id="pilih_produk_0" type="radio" required="required" class="custom-control-input" value="tv">
                                                        <label for="pilih_produk_0" class="custom-control-label">TV</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input value="KULKAS" name="pilih_produk" id="pilih_produk_1" type="radio" required="required" class="custom-control-input" value="kulkas">
                                                        <label for="pilih_produk_1" class="custom-control-label">KULKAS</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input value="MESIN CUCI" name="pilih_produk" id="pilih_produk_2" type="radio" required="required" class="custom-control-input" value="mesin_cuci">
                                                        <label for="pilih_produk_2" class="custom-control-label">MESIN CUCI</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jumlah" class="col-3 col-form-label">Jumlah</label>
                                                <div class="col-9">
                                                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-3 col-9">
                                                    <button name="submit" value="Tersimpan" type="submit" class="btn btn-primary">KIRIM</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--Kode PHP-->
                                        <?php
                                        ?>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <h2 class="card-header bg-dark text-white">
                                                Daftar Harga
                                            </h2>
                                            <div class="card-body bg-dark text-white">
                                                <p class="card-text">
                                                    TV Rp.4.200.000
                                                </p>
                                            </div>
                                            <div class="card-body bg-dark text-white">
                                                <p class="card-text">
                                                    KULKAS Rp.3.100.000
                                                </p>
                                            </div>
                                            <div class="card-body bg-dark text-white">
                                                <p class="card-text">
                                                    Mesin Cuci Rp.3.800.000
                                                </p>
                                            </div>
                                            <div class="card-footer bg-dark text-whit">
                                                Harga Dapat Berubah Setipa Saat
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Optional JavaScript; choose one of the two! -->

                            <!-- Option 1: Bootstrap Bundle with Popper -->
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

                            <!-- Option 2: Separate Popper and Bootstrap JS -->
                            <!--
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
                            -->
                        </tbody>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>