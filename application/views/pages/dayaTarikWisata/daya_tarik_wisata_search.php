<div class="hero-wrap js-fullheight" style="background-image: url('assets/images/dayaTarikWisata/daya-tarik-wisata-3.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Cari<strong> destinasi </strong>favorit Anda!</h1>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="text-align: justify;">Daya Tarik Wisata atau DTW adalah layanan web penyedia data nama, alamat, nomor telefon, dan
                    sosial media yang terkait dari setiap objek wisata tujuan. Lalu, terdapat fitur search berdasarkan Kode Provinsi dan Kode Kabupaten, serta Penyedia Makan dan Minum (PMM) dan Jasa Akomodasi sekitar daerah objek wisata yang dicari.
                </p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 sidebar">
                <div class="sidebar-wrap bg-light ftco-animate">
                    <h3 class="heading mb-4" style="text-align: center; font-weight: bold">Cari DTW Keinginan Anda</h3>
                    <form action="Daya_tarik_wisata" method="post">
                        <div class="fields">
                            <div class="form-group">
                                <input type="text" name="kode_prov" class="form-control" placeholder="Kode Provinsi">
                            </div>
                            <div class="form-group">
                                <input type="text" name="kode_kab" class="form-control" placeholder="Kode Kabupaten">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Cari" class="btn btn-primary py-3 px-5">
                                <?php if ($kode_prov || $kode_kab) { ?>
                                    <button class="btn btn-secondary mt-2 py-3 px-5" onclick="history.go(-1);">Back </button>
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <?php if ($kode_prov || $kode_kab) { ?>
                        <input type="hidden" id="hide_kode_prov" value="<?= $kode_prov ?>">
                        <input type="hidden" id="hide_kode_kab" value="<?= $kode_kab ?>">
                        <div class="col-md-12 ml-4" style="margin-bottom:-30px;">
                            <h2 class="h4">Search Result From <b><i>Kode Provinsi <?= $kode_prov ?>, Kode Kabupaten <?= $kode_kab ?></i></h2>
                        </div>
                    <?php } else { ?>
                        <input type="hidden" id="hide_kode_prov" value="">
                        <input type="hidden" id="hide_kode_kab" value="">
                        <div class="col-md-12 ml-4" style="margin-bottom:-30px;">
                            <h2 class="h4"><b><i> Menampilkan Semua Daya Tarik Wisata</i></b></h2>
                        </div>
                    <?php } ?>
                    <div class="col-md-12 ftco-animate">
                        <?php if ($result_dtw->status) {
                        ?>
                            <table id="example" class="table table-borderless" style="width:100%;padding-top:0px">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($result_dtw->data as $dtwAll) { ?>
                                        <tr>
                                            <td>
                                                <div class="destination">
                                                    <a href="<?= base_url('Daya_tarik_wisata/daya_tarik_wisata_detail/' . $dtwAll->id); ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?= $dtwAll->photo_url ?>);">
                                                        <div class="icon d-flex justify-content-center align-items-center">
                                                            <span class="icon-search2"></span>
                                                        </div>
                                                    </a>
                                                    <div class="text p-3">
                                                        <div class="d-flex">
                                                            <div class="one">
                                                                <h3><a href="<?= base_url('Daya_tarik_wisata/daya_tarik_wisata_detail/' . $dtwAll->id); ?>"><?= $dtwAll->nama_komersial ?></a></h3>
                                                                <p class="rate">
                                                                    <span>No Telephone : <?= $dtwAll->no_telp ?></span> <br />
                                                                    <span>Fax : -</span>
                                                                </p>
                                                            </div>
                                                            <div class="two">
                                                                <span class="price per-price"><small><?= $dtwAll->nama_kab ?><br><?= $dtwAll->nama_prov ?></small></span>
                                                            </div>
                                                        </div>
                                                        <p><?= $dtwAll->alamat_jalan ?></p>
                                                        <hr>
                                                        <p class="bottom-area d-flex">
                                                            <a href="<?= base_url('Jasa_akomodasi/jasa_akomodasi_sekitar/' . $kode_prov . '/' . $kode_kab); ?>" class="btn-first-2 float-left">Jasa Akomodasi Sekitar</a>
                                                            <a href="<?= base_url('Penyedia_makan_dan_minum/penyedia_makan_dan_minum_sekitar/' . $kode_prov . '/' . $kode_kab); ?>" class="btn-first-2 float-left">PMM Sekitar</a>
                                                            <a href="<?= base_url('Daya_tarik_wisata/daya_tarik_wisata_detail/' . $dtwAll->id); ?>" class="btn-first-3 ml-auto">Lihat</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        <?php
                        } else {
                            echo "Data Not Found!";
                        } ?>
                    </div>
                </div>
                <!-- <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section> <!-- .section -->

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <h2 class="mb-4"><strong>Layanan</strong> Lain</h2>
                <span class="subheading">Ada layanan lain yang mungkin Anda cari juga</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div id="accordion">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" href="<?= base_url('penyedia_makan_dan_minum'); ?>"><strong>Penyedia Makan dan Minum </strong><span class="collapsed"><i class="icon-restaurant_menu"></i></span></a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" href="<?= base_url('jasa_akomodasi'); ?>"><strong>Jasa Akomodasi </strong><span class="collapsed"><i class="icon-hotel"></i></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" href="<?= base_url('penunjang_pariwisata'); ?>"><strong>Penunjang Pariwisata </strong><span class="collapsed"><i class="icon-cab"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Ada Pertanyaan?</h2>
                    <p>Hubungi saja kami dengan mengakses halaman berikut</p>
                    <div class="row d-flex justify-content-center mt-5">
                        <a href="<?= base_url('tentang'); ?>" class="btn-first-4 justify-content-center w-50">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        if ($('#hide_kode_prov').val() || $('#hide_kode_kab').val()) {
            // Save the scroll position in local storage when the page is unloaded
            window.addEventListener('beforeunload', function() {
                localStorage.setItem('scrollPosition', window.scrollY);
            });

            // Retrieve the scroll position from local storage when the page is loaded
            window.addEventListener('load', function() {
                var scrollPosition = localStorage.getItem('scrollPosition');
                if (scrollPosition !== null) {
                    window.scrollTo(0, scrollPosition);
                    localStorage.removeItem('scrollPosition');
                }
            });
        }

        $('#example').DataTable({
            "bLengthChange": false,
            "bFilter": false,
            "bInfo": true,
            "bAutoWidth": false,
            "ordering": false
        });

        $('#example').on('page.dt', function() {
            // Your code here
            $('html, body').animate({
                scrollTop: $('.ftco-degree-bg').offset().top
            }, 0);
        });
    });
</script>