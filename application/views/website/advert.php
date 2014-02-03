<?php
	preg_match('/\/advert\/([a-z0-9]+)\/?/i', $_SERVER['REQUEST_URI'], $match);
	$advert_id = (isset($match[1])) ? $match[1] : 0;
	$advert = $this->Advert_model->get_by_id(array( 'id' => $advert_id ));
	
	if (count($advert) == 0) {
		header("HTTP/1.1 301 Moved Permanently");
		header('Location: '.base_url());
		exit;
	}
	
	// build breadcrumb
	$param_breadcrumb['title_list'][] = array( 'link' => base_url(), 'title' => 'Home', 'class' => 'first' );
	$param_breadcrumb['title_list'][] = array( 'link' => $advert['category_link'], 'title' => $advert['category_name'] );
	$param_breadcrumb['title_list'][] = array( 'link' => $advert['category_sub_link'], 'title' => $advert['category_sub_name'] );
	$param_breadcrumb['title_list'][] = array( 'link' => $advert['advert_link'], 'title' => $advert['name'] );
?>
<?php $this->load->view('website/common/meta'); ?>
<body id="offcanvas-container" class="offcanvas-container layout-fullwidth fs12 page-product">
<section id="page" class="offcanvas-pusher" role="main">
	<?php $this->load->view('website/common/header'); ?>
	
	<section id="columns" class="offcanvas-siderbars">
		<?php $this->load->view( 'website/common/breadcrumb', $param_breadcrumb ); ?>
		
		<div class="container">
			<div class="category-description wrapper">
				<div class="pagination">
					<div class="links">
						<h2><?php echo $advert['name']; ?></h2>
					</div>
					<div class="results">Share</div>
				</div>
			</div>
			<div class="row">
				<section class="col-lg-99 col-md-9 col-sm-12 col-xs-12 main-column">
					<div id="content" class="product-detail">
						<div class="product-info">
							<div class="pagination">
								<div class="links">
									<?php echo $advert['city_name']; ?> Kota, <?php echo $advert['region_name']; ?>
									| <?php echo $advert['post_time_text']; ?>
									
									<?php if (isset($advert['condition'])) { ?>| <?php echo $advert['condition']; ?><?php } ?>
								</div>
								<div class="results" style="padding-top: 0px;">List-ID: 23766151</div>
							</div>
							<div class="row">
								<div class="col-lg-7-single col-sm-7-gambar col-xs-12">
									<div class="description">
										<div class="image">
											<img src="<?php echo base_url('static/temp/416Za1p-V5L.jpg'); ?>" />
										</div>
										<p>
											<b>Price:</b>
											<span class="availability"><?php echo $advert['price_text']; ?></span>
										</p>
									</div>
									
									Spesifikasi<hr />
									<div class="text-wrap">
										<ul class="three-col">
											<li id="p_sqr_land"><span class="type">Luas tanah</span> : 214 m<sup>2</sup></li>
											<li id="p_sqr_building"><span class="type">Luas bangunan</span> : 55 m<sup>2</sup></li>
											<li id="p_bedroom"><span class="type">Kamar tidur</span> : 2</li>
											<li id="p_bathroom"><span class="type">Kamar mandi</span> : 1</li>
											<li id="p_certificate"><span class="type">Sertifikasi</span> : SHM - Sertifikat Hak Milik</li>
										</ul>
									</div>	

									Location<hr />
									<div class="text-wrap">
										<span class="type">Jl Candi Blok 2a no 401</span>
										Malang Kota - <span>Jawa Timur</span>
										<br /><br />
									</div>
									
									Others<hr />
									<div class="text-wrap">
										<ul class="three-col">
											<li>AC</li>
											<li>Swimming Pool</li>
											<li class="last">Carport</li>
											<li>Garden</li>
											<li>Telephone</li>
											<li class="last">Garasi</li>
											<li>Water heater</li>
										</ul>
									</div>
									
									~ Nadayu 92 is surrounded by luscious greenery within the same neighborhood with the well-known satay town of Kajang and Bangi, plus a mere 30 minutes journey to the Kuala Lumpur city centre.
									Details:<br/>
									~ Brand New<br/>
									~ 2 Sty House<br/>
									~ Freehold<br/>
									~ L/a : 22 x 65 Sf<br/>
									~ B/u : 2116 Sf<br/>
									~ 3+1 RoomS 3 Bath<br/><br/>
									
									Security :<br/>
									~ Gated & Guarded, 24-Hour security with perimeter fencing.<br/>
								</div>
							</div>
						</div>
						
						<div class="tabs-group box">
							<div id="tabs" class="htabs">
								<ul class="nav nav-tabs box-heading clearfix">
									<li><a class="selected"  href="#"></a></li>
									<li class="first"><a href="#tab-description">Send To Friends</a></li>
									<li><a href="#tab-review">Laporkan</a></li>
									<li><a href="#contact-advertiser">Contact Advertiser</a></li>
								</ul>
							</div>
							<div id="tab-description" class="tab-content"><form method="post" name="iklan_keteman">
								<label>Email Teman</label>
								<div class="kir"><input type="text" value="" name="friend_email" /></div>
								<div class="clr"></div>
								<div class="top10"></div>
								<br />
								
								<label>Pesan Anda</label>
								<div class="kir"><textarea rows="5" cols="60" name="pesan"></textarea></div>
								<div class="clr"></div>
								<div class="top10"></div>
								<br />

								<label>Email Anda</label>
								<div class="kir"><input type="text" value="" name="me_email" /></div>
								<div class="clr"></div>
								<div class="top10"></div>
								<br />
								
								<input type="submit" onclick="javascript:void(0);" class="readmore button" value="Kirim" name="submit" />
								<input type="reset" value="Batal" class="readmore button" />
							</form></div>
							<div id="tab-review" class="tab-content no-margin">
								<h2 id="review-title">Laporkan</h2>
								<p>
									Gunakan formulir dibawah ini untuk melaporkan komplain anda mengenai iklan ini. Harap hubungi Live Support untuk bertanya mengenai iklan anda atau hal umum lainnya.
									<br /><br />
									Laporkan karena :
								</p>
								<form method="post">
									<span>
										<p><label><input type="radio" value="Artikel tidak sesuai dengan peraturan" name="laporkan_komplain"> Artikel tidak sesuai peraturan</label></p>
										<p><label><input type="radio" value="Artikel duplikat" name="laporkan_komplain"> Artikel duplikat dari artikel lain</label></p>
										<p><label><input type="radio" value="Artikel salah kategori" name="laporkan_komplain"> Artikel dipasang di kategori yang salah</label></p>
										<p><label><input type="radio" checked="checked" value="Alasan Lain" name="laporkan_komplain"> Lainnya</label></p>
									</span>
									<div class="clr"></div>
									<div class="top10"></div>
									
									<label>Detail</label>
									<div class="kir"><textarea rows="5" cols="60" name="laporkan_description"></textarea></div>
									<div class="clr"></div>
									<div class="top10"></div>
									<br />

									<label>Email</label>
									<div class="kir"><input type="text" value="" name="laporkan_email" /></div>
									<div class="clr"></div>
									<div class="top10"></div>
									<br />

									<p><strong>Enter the code in the box below:</strong></p>
									<img src="v3/captcha.jpg" class="img-captcha" />
									<p><input name="captcha" type="text" /></p>
									<br />
									
									<input type="submit" onclick="javascript:void(0);" class="readmore button" value="Kirim" name="submit" />
									<input type="reset" value="Batal" class="readmore button" />
								</form>
							</div>
							<div id="contact-advertiser" class="tab-content"><form method="post" name="iklan_keteman">
								<label>Your Name</label>
								<div class="kir"><input type="text" value="" name="friend_email" /></div>
								<br />
								
								<label>Your Email</label>
								<div class="kir"><input type="text" value="" name="friend_email" /></div>
								<br />
								
								<label>Your Phone(optional)</label>
								<div class="kir"><input type="text" value="" name="friend_email" /></div>
								<br />

								<label>Pesan Anda</label>
								<div class="kir"><textarea rows="5" cols="60" name="pesan"></textarea></div>
								<div class="clr"></div>
								<br />
								
								<input type="submit" onclick="javascript:void(0);" class="readmore button" value="Kirim" name="submit" />
								<input type="reset" value="Batal" class="readmore button" />
							</form></div>
						</div>
					</div>
<script type="text/javascript">
$('#tabs a').tabs();

// review
$('#form-review').submit(function(event) {
	$('#button-review').click();
	event.preventDefault();
});
$('#form-review').validate({
	rules: {
		user: { required: true },
		name: { required: true },
		desc: { required: true },
		captcha: { required: true }
	}
});
$('#button-review').click(function(event) {
	event.preventDefault();
	if (! $('#form-review').valid()) {
		return false;
	}
	
	var param = {
		action: 'send_review',
		item_id: $('[name="item_id"]').val(),
		user: $('[name="user"]').val(),
		name: $('[name="name"]').val(),
		desc: $('[name="desc"]').val(),
		rating: $('input[name=rating]:checked', '#form-review').val(),
		captcha: $('[name="captcha"]').val()
	}
	Func.ajax({ url: web.host + 'ajax', param: param, callback: function(result) {
		if (result.status) {
			$.notify(result.message, "success");
			$('#form-review')[0].reset();
		} else {
			// new captcha
			var captcha_new = web.host + 'static/img/captcha/?' + new Date().getTime();
			$('.img-captcha').attr('src', captcha_new);
			
			$.notify(result.message, "error");
		}
	} });
});
</script>
				</section>
				
				<aside id="oc-column-right" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 offcanvas-sidebar">
					<div id="column-right" class="sidebar">
						<?php $this->load->view('website/common/profile'); ?>
						<?php $this->load->view('website/common/widget_section'); ?>
					</div>
				</aside>
			</div>
		</div>
	</section>
	
	<?php $this->load->view('website/common/footer'); ?>
</section>

<?php $this->load->view('website/common/menu_canvas'); ?>

<script>
</script>

</body>
</html>