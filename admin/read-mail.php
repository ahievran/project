<?php
require_once '../admin/header.php';
require_once 'sidebar.php';
include '../baglanti.php';
?>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Oku</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Mesajı Oku</h3>

                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                                    <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="mailbox-read-info">
                                    <h5>Mesajın Konusu</h5>
                                    <h6>Kimden:
                                        <span class="mailbox-read-time float-right">Gönderme Saati</span>
                                    </h6>
                                </div>
                                <div class="mailbox-read-message">
                                    <p>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie
                                        chillwave put a bird
                                        on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan
                                        scenester mlkshk. Ethical
                                        master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table
                                        mlkshk fanny pack
                                        gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester
                                        chillwave 3 wolf moon
                                        asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt
                                        migas church-key tofu
                                        blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck
                                        selfies narwhal American
                                        Apparel.</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Sil
                                </button>
                                <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Yazdır
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
require_once 'footer.php'; ?>