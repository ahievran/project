<?php
require_once '../admin/header.php';
require_once 'sidebar.php';
include '../baglanti.php';
?> 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">E-commerce</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="col-12">
                <img src="admin/uploads/labs/lab-1.jpg" class="product-image" alt="Laboratuvar Resim">
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="my-3">Duyuru Başlık</h3>
              <p>Duyuru Açıklama</p>
              <p>Tarih:</p>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>


<?php require_once 'footer.php'; ?>