<div class="hero-wrap js-fullheight" style="background-image: url(<?= base_url('assets/images/jasaAkomodasi/jasa-akomodasi-13.jpg') ?>);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?= base_url(); ?>">Home</a></span>/ <span class="mr-2"><a href="<?= base_url('jasa_akomodasi'); ?>">Jasa Akomodasi</a></span>/ <span>Detail Akomodasi</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?= $d_a->nama_komersial ?></h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="single-slider owl-carousel">
                            <div class="item">
                                <div class="hotel-img" style="background-image: url(<?= $d_a->photo_url ?>);"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                        <div class="row justify-content-between">
                            <div class="col-md-9">
                                <h2><strong><?= $d_a->nama_komersial ?></strong></h2>
                            </div>
                            <div class="col-md-3 text-right">
                                <a href="<?= base_url('Jasa_akomodasi/jasa_akomodasi_download/' . $d_a->id) ?>" target="_blank" class="btn btn-danger">Download Direktori</a>
                            </div>
                        </div>
                        <p class="rate mb-1">
                            <span class="star"><strong>Kodepos : <?= $d_a->kodepos ?></strong></span> <br />
                            <span class="loc"><a><i class="icon-map"></i> <?= $d_a->alamat_jalan ?></a></span>
                        </p>
                    </div>
                    <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                        <h2 class="mb-5"><strong>Kontak yang Bisa Dihubungi</strong></h2>
                        <div id="accordion">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#menuone" aria-expanded="false" aria-controls="menuone">No. Telephone<span class="collapsed"><i class="icon-contact_phone"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                                        </div>
                                        <div id="menuone" class="collapse">
                                            <div class="card-body">
                                                <p><strong><?= $d_a->no_telp ?></strong></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#menutwo" aria-expanded="false" aria-controls="menutwo">Twitter<span class="collapsed"><i class="icon-twitter-square"></i></span></a>
                                        </div>
                                        <div id="menutwo" class="collapse">
                                            <div class="card-body">
                                                <a href="https://twitter.com/oyorooms" style="color: black;" target="_blank"><strong><?= $d_a->twitter ?></strong></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#menu3" aria-expanded="false" aria-controls="menu3">Website<span class="collapsed"><i class="icon-web"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                                        </div>
                                        <div id="menu3" class="collapse">
                                            <div class="card-body">
                                                <a href="https://www.oyorooms.com/id/47842/?utm_source=GMB_ID&utm_medium=Organic&utm_campaign=ID_BDG025&latitude=-6.8664655&longitude=107.6060974&locale=id" style="color: black;" target="_blank"><strong><?= $d_a->website ?></strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#menu4" aria-expanded="false" aria-controls="menu4">Facebook<span class="collapsed"><i class="icon-facebook-square"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                                        </div>
                                        <div id="menu4" class="collapse">
                                            <div class="card-body">
                                                <a href="https://www.facebook.com/oyorooms" style="color: black;" target="_blank"><strong><?= $d_a->facebook ?></strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .col-md-8 -->
    </div>
</section> <!-- .section -->