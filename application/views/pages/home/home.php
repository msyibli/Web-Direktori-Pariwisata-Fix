	<div class="hero-wrap js-fullheight" style="background-image: url('assets/images/home/home-13.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
				<div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
					<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Eksplor <br></strong> Indahnya <strong>Indonesia</strong></h1>
					<p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Cari dan pilih apa yang Anda inginkan! Temukan berbagai hal menarik disini</p>
					<div class="block-17 my-4">
						<form action="Search" method="post" class="d-block d-flex">
							<div class="fields d-block d-flex">
								<div class="textfield-search one-third border">
									<input type="text" name="kode_prov" class="form-control" placeholder="Kode Provinsi">
								</div>
								<div class="textfield-search one-third border">
									<input type="text" name="kode_kab" class="form-control" placeholder="Kode Kabupaten">
								</div>
								<div class="textfield-search one-third border">
									<input type="text" name="kode_klasifikasi" class="form-control" placeholder="Klasifikasi Usaha">
								</div>
							</div>
							<button type="submit" class="search-submit btn btn-primary">Cari</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section" style="padding: 2em;">
		<div class="container">
			<div class="row d-md-flex">
				<div class="col-md-6 ftco-animate img-2 about-image" style="background-image: url(assets/images/home/home-30.png);">
				</div>
				<div class="col-md-6 ftco-animate p-md-5">
					<div class="row">
						<div class="col-md-12 nav-link-wrap mb-5">
							<div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">Direktori Pariwisata</a>
							</div>
						</div>
						<div class="col-md-12 d-flex align-items-center">

							<div class="tab-content ftco-animate" id="v-pills-tabContent">

								<div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
									<div>
										<p style="text-align: justify; font-size: small;"><strong style="font-weight: 700; color:#f85959">Badan Pusat Statistik (BPS)</strong> perlu adanya <i>updating</i> atau pemutakhiran Direktori Usaha Jasa dan Objek Pariwisata bertujuan untuk memelihara tersedianya informasi keberadaan usaha penyedia jasa dan objek pariwisata yang masih aktif yang berguna sebagai kerangka sampel berbagai survei sekaligus bermanfaat untuk keperluan lain terkait Statistik Pariwisata.</p>
										<p style="text-align: justify; font-size: small;">Saat ini BPS berusaha untuk memberikan gambaran umum mengenai <strong style="font-weight: 700; color:#f85959">Jasa Akomodasi</strong>, <strong style="font-weight: 700; color:#f85959">Penyedia Makan dan Minum (PMM)</strong>, serta <strong style="font-weight: 700; color:#f85959">Daya Tarik Wisata (DTW)</strong> lainnya yang ada di Indonesia melalui Direktori Pariwisata. Data yang disajikan pada direktori ini adalah hasil pencacahan terhadap semua jasa dan objek pariwisata
											lainnya yang dilakukan oleh BPS Kabupaten/Kota di seluruh Indonesia.</p>
										<p style="text-align: justify; font-size: small;">Informasi yang disajikan dalam publikasi ini meliputi nama provinsi, kabupaten, kecamatan, desa, dan komersial dari jasa dan objek pariwisata yang bersangkutan.
											Kemudian, terdapat alamat jalan, nomor telefon, dan kontak sosial media dari masing - masing jasa, serta objek tersebut.
											Dengan adanya direktori ini diharapkan dapat memberikan kemudahan bagi para pencari data pariwisata lainnya dalam mendapatkan informasi yang dibutuhkan. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-destination">
		<div class="container">
			<div class="row justify-content-start mb-5 pb-3">
				<div class="col-md-7 heading-section-2 ftco-animate">
					<h2 class="mb-4"><strong>Jasa Akomodasi</strong></h2>
					<span class="subheading-2">Jelajahi beragam pilihan tempat penginapan dengan berbagai fasilitas untuk liburan yang berkenang</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="destination-slider owl-carousel ftco-animate">
						<?php foreach ($akomodasi_ringkas->data as $akomodasi) { ?>
							<div class="item">
								<div class="destination">
									<a href="<?= base_url('Jasa_akomodasi/jasa_akomodasi_search_result_by_provinsi/' . $akomodasi->kode_prov); ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?= $akomodasi->photo_url  ?>);">
										<div class="icon d-flex justify-content-center align-items-center">
											<span class="icon-search2"></span>
										</div>
									</a>
									<div class="text p-3">
										<span class="listing"><?= $akomodasi->jumlah ?> Jasa Akomodasi di</span>
										<h3><a href="<?= base_url('Jasa_akomodasi/jasa_akomodasi_search_result_by_provinsi/' . $akomodasi->kode_prov); ?>"><?= $akomodasi->nama_prov ?></a></h3>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<a href="<?= base_url('jasa_akomodasi'); ?>" class="btn-first float-right">Selengkapnya</a>
		</div>
	</section>

	<section class="ftco-section ftco-destination">
		<div class="container">
			<div class="row justify-content-start mb-5 pb-3">
				<div class="col-md-7 heading-section-2 ftco-animate">
					<h2 class="mb-4"><strong>Penyedia Makan dan Minum</strong></h2>
					<span class="subheading-2">Negara dengan rempah - rempah terkaya di dunia membuat Indonesia mempunyai berbagai macam khas di tiap daerahnya, cari dan sesuaikan selera Anda</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="destination-slider owl-carousel ftco-animate">
						<?php foreach ($PMM_ringkas->data as $PMM) { ?>
							<div class="item">
								<div class="destination">
									<a href="<?= base_url('Penyedia_makan_dan_minum/penyedia_makan_dan_minum_search_result_by_provinsi/' . $PMM->kode_prov); ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?= $PMM->photo_url  ?>);">
										<div class="icon d-flex justify-content-center align-items-center">
											<span class="icon-search2"></span>
										</div>
									</a>
									<div class="text p-3">
										<span class="listing"><?= $PMM->jumlah ?> PMM di</span>
										<h3><a href="<?= base_url('Penyedia_makan_dan_minum/penyedia_makan_dan_minum_search_result_by_provinsi/' . $PMM->kode_prov); ?>"><?= $PMM->nama_prov ?></a></h3>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<a href="<?= base_url('penyedia_makan_dan_minum'); ?>" class="btn-first float-right">Selengkapnya</a>
		</div>
	</section>

	<section class="ftco-section ftco-destination">
		<div class="container">
			<div class="row justify-content-start mb-5 pb-3">
				<div class="col-md-7 heading-section-2 ftco-animate">
					<h2 class="mb-4"><strong>Daya Tarik Wisata</strong></h2>
					<span class="subheading-2">Indonesia memiliki berbagai jenis pariwisata, pilihlah apa yang Anda sukai disini</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="destination-slider owl-carousel ftco-animate">
						<?php foreach ($DTW_ringkas->data as $DTW) { ?>
							<div class="item">
								<div class="destination">
									<a href="<?= base_url('Daya_tarik_wisata/daya_tarik_wisata_search_result_by_provinsi/' . $DTW->kode_prov); ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?= $DTW->photo_url ?>);">
										<div class="icon d-flex justify-content-center align-items-center">
											<span class="icon-search2"></span>
										</div>
									</a>
									<div class="text p-3">
										<span class="listing"><?= $DTW->jumlah ?> Daya tarik Wisata di</span>
										<h3><a href="<?= base_url('Daya_tarik_wisata/daya_tarik_wisata_search_result_by_provinsi/' . $DTW->kode_prov); ?>"><?= $DTW->nama_prov ?></a></h3>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<a href="<?= base_url('daya_tarik_wisata_search_result_by_provinsi'); ?>" class="btn-first float-right">Selengkapnya</a>
		</div>
	</section>

	<section class="ftco-section testimony-section">
		<div class="container">
			<div class="row justify-content-start">
				<div class="col-md-5 heading-section ftco-animate">
					<h2 class="mb-4 pb-3"><strong>Kenapa</strong> Memilih Kami?</h2>
					<p class="why-1">BPS sebagai lembaga penyedia data akurat dan terpercaya pasti akan memberikan informasi yang valid, serta sesuai dengan keadaan nyata.</p>
					<p class="why-1">Banyak objek wisata, jasa akomodasi, dan tempat makan, serta minum yang detail keberadaannya dapat kami berikan.</p>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-6 heading-section ftco-animate">
					<h2 class="mb-4 pb-3"><strong>Informasi</strong> apa saja yang Kami Beri?</h2>
					<div class="row ftco-animate">
						<div class="col-md-12">
							<div class="carousel-testimony owl-carousel">
								<div class="item">
									<div class="testimony-wrap d-flex">
										<div class="user-img" style="background-image: url(assets/images/home/home-6.png)">
										</div>
										<div class="text ml-md-4">
											<p class="ket">Menyediakan berbagai informasi pariwisata dari pulau - pulau di Indonesia.</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-wrap d-flex">
										<div class="user-img" style="background-image: url(assets/images/home/home-5.png)">
											<span class="d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text ml-md-4">
											<p class="ket">Semua informasi yang kami berikan selalu akurat dan diupdate terus, serta dapat dipercaya.</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-wrap d-flex">
										<div class="user-img" style="background-image: url(assets/images/home/home-3.png)">
											<span class="d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text ml-md-4">
											<p class="ket">Berbagai macam Hotel, tempat makan dan minum, serta objek wisata kami sediakan informasinya.</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-wrap d-flex">
										<div class="user-img" style="background-image: url(assets/images/home/home-4.png)">
											<span class="d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text ml-md-4">
											<p class="ket">Layanan direktori pariwisata ini sangat mudah dijangkau dan diakses oleh pengguna.</p>
										</div>
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