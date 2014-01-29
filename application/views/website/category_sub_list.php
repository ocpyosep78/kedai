<?php
	/* region form */
	
	$array_sort[] = array( 'value' => '[{"property":"date_update","direction":"DESC"},{"property":"Item.id","direction":"DESC"}]', 'label' => 'Default' );
	$array_sort[] = array( 'value' => '[{"property":"price_show","direction":"ASC"}]', 'label' => 'Price (Low &gt; High)' );
	$array_sort[] = array( 'value' => '[{"property":"price_show","direction":"DESC"}]', 'label' => 'Price (High &gt; Low)' );
	
	$array_limit = array( array( 'value' => 4 ), array( 'value' => 8 ), array( 'value' => 12 ), array( 'value' => 25 ), array( 'value' => 50 ), array( 'value' => 75 ), array( 'value' => 100 ) );
	
	/* end region form */
	
	/* region advert */
	
	$page_sort = (isset($_POST['page_sort'])) ? $_POST['page_sort'] : '[{"property":"date_update","direction":"DESC"},{"property":"Item.id","direction":"DESC"}]';
	$page_active = (isset($_POST['page_active'])) ? $_POST['page_active'] : 1;
	$page_limit = (isset($_POST['page_limit'])) ? $_POST['page_limit'] : 12;
	$page_offset = ($page_active * $page_limit) - $page_limit;
	
	/*
	$param_item = array(
		'namelike' => $namelike,
		'item_status_id' => ITEM_STATUS_APPROVE,
		'brand_id' => @$brand['id'],
		'category_id' => @$category['id'],
		'category_sub_id' => @$category_sub['id'],
		'sort' => $page_sort,
		'start' => $page_offset,
		'limit' => $page_limit
	);
	$array_item = $this->Item_model->get_array($param_item);
	$total_item = $this->Item_model->get_count($param_item);
	$page_total = ceil($total_item / $page_limit);
	/*	*/
	
	/* end region advert */
	
	
	// build breadcrumb
	$param_breadcrumb['title_list'][] = array( 'link' => base_url(), 'title' => 'Home', 'class' => 'first' );
	$param_breadcrumb['title_list'][] = array( 'link' => '#', 'title' => 'Title 1', 'class' => '' );
	$param_breadcrumb['title_list'][] = array( 'link' => '#', 'title' => 'Title 2', 'class' => '' );
?>
<?php $this->load->view('website/common/meta'); ?>
<body id="offcanvas-container" class="offcanvas-container layout-fullwidth fs12 page-product">

<section id="page" class="offcanvas-pusher" role="main">
	<?php $this->load->view('website/common/header'); ?>
	
	<section id="columns" class="offcanvas-siderbars">
		<?php $this->load->view( 'website/common/breadcrumb', $param_breadcrumb ); ?>
		
		<div class="container"><div class="row">
			<section class="col-lg-9 col-md-9 col-sm-12 col-xs-12 main-column">
				<div id="content">
					<h1>Refine Search</h1>
					<div class="category-info clearfix">
						<div class="product-filter clearfix">
							<div class="display">
								<div class="limit">
									<select class="change_limit">
										<option value="4">4</option><option value="8">8</option><option value="12" selected="selected">All City</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="100">100</option>
									</select>
								</div>
								<div class="limit">
									<select class="change_limit">
										<option value="12" selected="selected">Semua Region</option>
										<option value="4">New</option>
										<option value="8">Second</option>
									</select>
								</div>
							</div>
							<div class="sort">
								<select class="change_limit">
									<option selected="" value="">Max sq.ft</option>
									<option value="1">1000</option>
									<option value="2">2000</option>
									<option value="3">3000</option>
									<option value="4">4000</option>
									<option value="5">5000</option>
									<option value="6">More than 5000</option>
								</select>	
							</div>
							<div class="sort">
								<select class="change_limit">
									<option selected="" value="">Min sq.ft</option>
									<option value="1">1000</option>
									<option value="2">2000</option>
									<option value="3">3000</option>
									<option value="4">4000</option>
									<option value="5">5000</option>
									<option value="6">More than 5000</option>
								</select>
							</div>
							<div class="sort">
								<select class="change_limit">
									<option value="12" selected="selected">Price To</option>
									<option value="4">New</option>
									<option value="8">Second</option>
								</select>
							</div>
							<div class="limit">
								<select class="change_limit">
									<option value="12" selected="selected">Price From</option>
									<option value="4">New</option>
									<option value="8">Second</option>
								</select>
							</div>
						</div>
					</div>
					<hr/>
					
					<div class="hidden">
						<form id="form-hidden" method="post">
							<input type="hidden" name="page_sort" value="<?php echo htmlentities($page_sort); ?>" />
							<input type="hidden" name="page_active" value="<?php echo 1; ?>" />
							<input type="hidden" name="page_limit" value="<?php echo $page_limit; ?>" />
						</form>
					</div>
					
					<div class="product-filter clearfix">
						<div class="display">
							<span style="float: left;">Display:</span>
							<a class="list" onclick="display_item('list');">List</a>
							<a class="grid active" onclick="display_item('grid');">Grid</a>
						</div>
						<div class="limit">
							<span>Show:</span>
							<select class="change_limit">
								<?php echo ShowOption(array( 'Array' => $array_limit, 'ArrayID' => 'value', 'ArrayTitle' => 'value', 'Selected' => $page_limit, 'WithEmptySelect' => false )); ?>
							</select>
						</div>
						<div class="sort">
							<span>Sort By:</span>
							<select class="change_sort">
								<?php echo ShowOption(array( 'Array' => $array_sort, 'ArrayID' => 'value', 'ArrayTitle' => 'label', 'Selected' => $page_sort, 'WithEmptySelect' => false )); ?>
							</select>
						</div>
						<div class="limit">
							<span>Show:</span>
							<select class="change_limit">
								<option value="12" selected="selected">All</option>
								<option value="4">Di Jual</option>
								<option value="8">DI Cari</option>
								<option value="25">Di Sewakan</option>
								<option value="50">Jasa</option>
							</select>
						</div>
						<div class="limit">
							<span>Condition:</span>
							<select class="change_limit">
								<option value="12" selected="selected">All</option>
								<option value="4">New</option>
								<option value="8">Second</option>
							</select>
						</div>
					</div>
					
					<div class="product-grid"><div class="products-block"><div class="row">
						<div class="col-lg-333 col-md-3 col-sm-6 col-xs-12">
							<div class="product-block">
								<div class="tanggal">Today 15:35</div>
								<div class="image">
									<a href="http://shopermarket.com/item/six-pack-handy-cups-reusable-k-cups-for-keurig-machines"><img src="<?php echo base_url(); ?>/static/temp/51oNeuFaB6L.jpg" title="** SIX Pack ** Handy Cups Reusable K-cups for Keurig Machines" alt="** SIX Pack ** Handy Cups Reusable K-cups for Keurig Machines" class="img-responsive"></a>
									<a href="http://shopermarket.com/item/six-pack-handy-cups-reusable-k-cups-for-keurig-machines" class="info-view colorbox product-zoom cboxElement" rel="colorbox" title="** SIX Pack ** Handy Cups Reusable K-cups for Keurig Machines"><i class="fa icon-zoom-in"></i></a>
									<div class="img-overlay"></div>
								</div>
								<div class="product-meta">
									<div class="left">
										<h3 class="name"><a href="http://shopermarket.com/item/six-pack-handy-cups-reusable-k-cups-for-keurig-machines">** SIX Pack ** Handy Cups Reusable ...</a></h3>
										<p class="description">Reusable Single Serve Filter Cups for Filter Cups for Filter Cups for Filter Cups for Filter Cups for...</p>
											<p class="description">	<div class="action">
											<div class="cartt">Region : Jawa Timur</div>
											<div class="wishlist">City : Malang</div>
										</div></p>
									</div>
									<div class="right">
										<div class="price"><span class="price-new">$ 12.9</span></div>
									</div>
								</div>
							</div>
						</div>
													<div class="col-lg-333 col-md-3 col-sm-6 col-xs-12">
							<div class="product-block">
															<div class="tanggal">
								Today 15:35
									 
								</div>
								<div class="image">
									<!--<span class="product-label-special"><span>Sale</span></span> -->
									<a href="http://shopermarket.com/item/aeropress-with-stainless-filter-and-free-liquid-planet-tea-sample"><img src="<?php echo base_url(); ?>/static/temp/416Za1p-V5L.jpg" title="Aeropress with Stainless Filter and Free Liquid Planet Tea Sample" alt="Aeropress with Stainless Filter and Free Liquid Planet Tea Sample" class="img-responsive"></a>
									<a href="http://shopermarket.com/item/aeropress-with-stainless-filter-and-free-liquid-planet-tea-sample" class="info-view colorbox product-zoom cboxElement" rel="colorbox" title="Aeropress with Stainless Filter and Free Liquid Planet Tea Sample"><i class="fa icon-zoom-in"></i></a>
									<div class="img-overlay"></div>
								</div>
								<div class="product-meta">
									<div class="left">
										<h3 class="name"><a href="http://shopermarket.com/item/aeropress-with-stainless-filter-and-free-liquid-planet-tea-sample">Aeropress with Stainless Filter and ...</a></h3>
										<p class="description">Aerobie AeroPress - Single Serve Reusable Single Serve Filter Cups for Reusable Single Serve Filter Cups for Reusable Single Serve Filter Cups for...</p>
											<p class="description">	<div class="action">
											<div class="cartt">
												Region : Jawa Timur -
											</div>
											<div class="wishlist">
												City : Malang
												</div>
										<!--	<div class="compare">
												<a onclick="addToCompare('43');" title="" class="icon-exchange product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Compare">&nbsp;</a>
											</div> -->
										</div></p>
									</div>
									<div class="right">
										<div class="price">
																							<span class="price-new">$ 36.99</span>
										</div>
								 
									</div>
								</div>
							</div>
						</div>
													<div class="col-lg-333 col-md-3 col-sm-6 col-xs-12">
							<div class="product-block">
															<div class="tanggal">
								Today 15:35
									 
								</div>
								<div class="image">
									<!--<span class="product-label-special"><span>Sale</span></span> -->
									<a href="http://shopermarket.com/item/mr-coffee-12-cup-switch-coffeemaker"><img src="<?php echo base_url(); ?>/static/temp/41qPf0pWc4L.jpg" title="Mr. Coffee 12-Cup Switch Coffeemaker" alt="Mr. Coffee 12-Cup Switch Coffeemaker" class="img-responsive"></a>
									<a href="http://shopermarket.com/item/mr-coffee-12-cup-switch-coffeemaker" class="info-view colorbox product-zoom cboxElement" rel="colorbox" title="Mr. Coffee 12-Cup Switch Coffeemaker"><i class="fa icon-zoom-in"></i></a>
									<div class="img-overlay"></div>
								</div>
								<div class="product-meta">
									<div class="left">
										<h3 class="name"><a href="http://shopermarket.com/item/mr-coffee-12-cup-switch-coffeemaker">Mr. Coffee 12-Cup Switch Coffeemaker</a></h3>
										<p class="description">This coffee maker lets you make up to Aerobie AeroPress - Single Serve Reusable Single..</p>
											<p class="description">	<div class="action">
											<div class="cartt">
												Region : Jawa Timur -
											</div>
											<div class="wishlist">
												City : Malang
												</div>
										<!--	<div class="compare">
												<a onclick="addToCompare('43');" title="" class="icon-exchange product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Compare">&nbsp;</a>
											</div> -->
										</div></p>
									</div>
									<div class="right">
										<div class="price">
																							<span class="price-new">$ 13.49</span>
										</div>
								 
									</div>
								</div>
							</div>
						</div>
													<div class="col-lg-333 col-md-3 col-sm-6 col-xs-12">
							<div class="product-block">
															<div class="tanggal">
								Today 15:35
									 
								</div>
								<div class="image">
									<!--<span class="product-label-special"><span>Sale</span></span> -->
									<a href="http://shopermarket.com/item/weston-83-2015-w-apple-peeler"><img src="<?php echo base_url(); ?>/static/temp/41clumm5TEL.jpg" title="Weston 83-2015-W Apple Peeler" alt="Weston 83-2015-W Apple Peeler" class="img-responsive"></a>
									<a href="http://shopermarket.com/item/weston-83-2015-w-apple-peeler" class="info-view colorbox product-zoom cboxElement" rel="colorbox" title="Weston 83-2015-W Apple Peeler"><i class="fa icon-zoom-in"></i></a>
									<div class="img-overlay"></div>
								</div>
								<div class="product-meta">
									<div class="left">
										<h3 class="name"><a href="http://shopermarket.com/item/weston-83-2015-w-apple-peeler">Weston 83-2015-W Apple Peeler</a></h3>
										<p class="description">The Weston Apple Peeler lets you peel This coffee maker lets you make up to Aerobie Aero..</p>
											<p class="description">	<div class="action">
											<div class="cartt">
												Region : Jawa Timur -
											</div>
											<div class="wishlist">
												City : Malang
												</div>
										<!--	<div class="compare">
												<a onclick="addToCompare('43');" title="" class="icon-exchange product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Compare">&nbsp;</a>
											</div> -->
										</div></p>
									</div>
									<div class="right">
										<div class="price">
																							<span class="price-new">$ 21.99</span>
										</div>
							 
									</div>
								</div>
							</div>
						</div>
													<div class="col-lg-333 col-md-3 col-sm-6 col-xs-12">
							<div class="product-block">
															<div class="tanggal">
								Today 15:35
									 
								</div>
								<div class="image">
									<!--<span class="product-label-special"><span>Sale</span></span> -->
									<a href="http://shopermarket.com/item/presto-05461-stainless-steel-profry-immersion-element-deep-fryer"><img src="<?php echo base_url(); ?>/static/temp/418EUogjqTL.jpg" title="Presto 05461 Stainless Steel ProFry Immersion Element Deep Fryer" alt="Presto 05461 Stainless Steel ProFry Immersion Element Deep Fryer" class="img-responsive"></a>
									<a href="http://shopermarket.com/item/presto-05461-stainless-steel-profry-immersion-element-deep-fryer" class="info-view colorbox product-zoom cboxElement" rel="colorbox" title="Presto 05461 Stainless Steel ProFry Immersion Element Deep Fryer"><i class="fa icon-zoom-in"></i></a>
									<div class="img-overlay"></div>
								</div>
								<div class="product-meta">
									<div class="left">
										<h3 class="name"><a href="http://shopermarket.com/item/presto-05461-stainless-steel-profry-immersion-element-deep-fryer">Presto 05461 Stainless Steel ProFry ...</a></h3>
										<p class="description">Professional-style deep fryer The Weston Apple Peeler lets Professional-style deep fryer The  you peel  is a...</p>
											<p class="description">	<div class="action">
											<div class="cartt">
												Region : Jawa Timur -
											</div>
											<div class="wishlist">
												City : Malang
												</div>
										<!--	<div class="compare">
												<a onclick="addToCompare('43');" title="" class="icon-exchange product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Compare">&nbsp;</a>
											</div> -->
										</div></p>
									</div>
									<div class="right">
										<div class="price">
																							<span class="price-new">$ 56.69</span>
										</div>
							 
									</div>
								</div>
							</div>
						</div>
													<div class="col-lg-333 col-md-3 col-sm-6 col-xs-12">
							<div class="product-block">
															<div class="tanggal">
								Today 15:35
									 
								</div>
								<div class="image">
									<!--<span class="product-label-special"><span>Sale</span></span> -->
									<a href="http://shopermarket.com/item/hario-mizudashi-cold-brew-coffee-pot-600ml-mcpn-7b"><img src="<?php echo base_url(); ?>/static/temp/41sn4Tvvs2L.jpg" title="Hario Mizudashi Cold Brew Coffee Pot 600ml MCPN-7B" alt="Hario Mizudashi Cold Brew Coffee Pot 600ml MCPN-7B" class="img-responsive"></a>
									<a href="http://shopermarket.com/item/hario-mizudashi-cold-brew-coffee-pot-600ml-mcpn-7b" class="info-view colorbox product-zoom cboxElement" rel="colorbox" title="Hario Mizudashi Cold Brew Coffee Pot 600ml MCPN-7B"><i class="fa icon-zoom-in"></i></a>
									<div class="img-overlay"></div>
								</div>
								<div class="product-meta">
									<div class="left">
										<h3 class="name"><a href="http://shopermarket.com/item/hario-mizudashi-cold-brew-coffee-pot-600ml-mcpn-7b">Hario Mizudashi Cold Brew Coffee Pot ...</a></h3>
										<p class="description">Hario again with their Cold does it Professional-style deep fryer The  again with their Cold...</p>
											<p class="description">	<div class="action">
											<div class="cartt">
												Region : Jawa Timur -
											</div>
											<div class="wishlist">
												City : Malang
												</div>
										<!--	<div class="compare">
												<a onclick="addToCompare('43');" title="" class="icon-exchange product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Compare">&nbsp;</a>
											</div> -->
										</div></p>
									</div>
									<div class="right">
										<div class="price">
																							<span class="price-new">$ 17.75</span>
										</div>
							 
									</div>
								</div>
							</div>
						</div>
													<div class="col-lg-333 col-md-3 col-sm-6 col-xs-12">
							<div class="product-block">
															<div class="tanggal">
								Today 15:35
									 
								</div>
								<div class="image">
									<!--<span class="product-label-special"><span>Sale</span></span> -->
									<a href="http://shopermarket.com/item/bunn-bxbd-velocity-brew-high-altitude-10-cup-home-brewer-black"><img src="<?php echo base_url(); ?>/static/temp/41BV3vyaZVL.jpg" title="BUNN BXBD Velocity Brew High Altitude 10-Cup Home Brewer, Black" alt="BUNN BXBD Velocity Brew High Altitude 10-Cup Home Brewer, Black" class="img-responsive"></a>
									<a href="http://shopermarket.com/item/bunn-bxbd-velocity-brew-high-altitude-10-cup-home-brewer-black" class="info-view colorbox product-zoom cboxElement" rel="colorbox" title="BUNN BXBD Velocity Brew High Altitude 10-Cup Home Brewer, Black"><i class="fa icon-zoom-in"></i></a>
									<div class="img-overlay"></div>
								</div>
								<div class="product-meta">
									<div class="left">
										<h3 class="name"><a href="http://shopermarket.com/item/bunn-bxbd-velocity-brew-high-altitude-10-cup-home-brewer-black">BUNN BXBD Velocity Brew High Altitude ...</a></h3>
										<p class="description">The BUNN BXBD Velocity The BUNN BXBD Velocity Brew High Velocity The BUNN BXBD Velocity Brew High...</p>
											<p class="description">	<div class="action">
											<div class="cartt">
												Region : Jawa Timur -
											</div>
											<div class="wishlist">
												City : Malang
												</div>
										<!--	<div class="compare">
												<a onclick="addToCompare('43');" title="" class="icon-exchange product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Compare">&nbsp;</a>
											</div> -->
										</div></p>
									</div>
									<div class="right">
										<div class="price">
																							<span class="price-new">$ 89.99</span>
										</div>
								 
									</div>
								</div>
							</div>
						</div>
													<div class="col-lg-333 col-md-3 col-sm-6 col-xs-12">
							<div class="product-block">
															<div class="tanggal">
								Today 15:35
									 
								</div>
								<div class="image">
									<!--<span class="product-label-special"><span>Sale</span></span> -->
									<a href="http://shopermarket.com/item/capresso-ec100-pump-espresso-and-cappuccino-machine"><img src="<?php echo base_url(); ?>/static/temp/415P0OQI9L.jpg" title="Capresso EC100 Pump Espresso and Cappuccino Machine" alt="Capresso EC100 Pump Espresso and Cappuccino Machine" class="img-responsive"></a>
									<a href="http://shopermarket.com/item/capresso-ec100-pump-espresso-and-cappuccino-machine" class="info-view colorbox product-zoom cboxElement" rel="colorbox" title="Capresso EC100 Pump Espresso and Cappuccino Machine"><i class="fa icon-zoom-in"></i></a>
									<div class="img-overlay"></div>
								</div>
								<div class="product-meta">
									<div class="left">
										<h3 class="name"><a href="http://shopermarket.com/item/capresso-ec100-pump-espresso-and-cappuccino-machine">Capresso EC100 Pump Espresso and ...</a></h3>
										<p class="description">Capresso - EC100 For perfect...</p>
											<p class="description">	<div class="action">
											<div class="cartt">
												Region : Jawa Timur -
											</div>
											<div class="wishlist">
												City : Malang
												</div>
										<!--	<div class="compare">
												<a onclick="addToCompare('43');" title="" class="icon-exchange product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Compare">&nbsp;</a>
											</div> -->
										</div></p>
									</div>
									<div class="right">
										<div class="price">
																							<span class="price-new">$ 149.99</span>
										</div>
									<!--	<div class="action">
											<div class="cart">
												<input value="?" onclick="addToCart('43');" class="product-icon icon-shopping-cart" data-placement="top" data-toggle="tooltip" data-original-title="Add to Cart" type="button" />
											</div>
											<div class="wishlist">
												<a onclick="addToWishList('43');" title="" class="icon-heart product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Wish List">&nbsp;</a>
											</div>
											<div class="compare">
												<a onclick="addToCompare('43');" title="" class="icon-exchange product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Compare">&nbsp;</a>
											</div>
										</div> -->
									</div>
								</div>
							</div>
						</div>
													<div class="col-lg-333 col-md-3 col-sm-6 col-xs-12">
							<div class="product-block">
							<div class="tanggal">
								Today 15:35
									 
								</div>
							
								<div class="image">
									<!--<span class="product-label-special"><span>Sale</span></span> -->
									<a href="http://shopermarket.com/item/breville-usa-bke595xl-the-crystal-clear-electric-kettle"><img src="<?php echo base_url(); ?>/static/temp/41egD5UglVL.jpg" title="Breville USA BKE595XL The Crystal Clear Electric Kettle" alt="Breville USA BKE595XL The Crystal Clear Electric Kettle" class="img-responsive"></a>
									<a href="http://shopermarket.com/item/breville-usa-bke595xl-the-crystal-clear-electric-kettle" class="info-view colorbox product-zoom cboxElement" rel="colorbox" title="Breville USA BKE595XL The Crystal Clear Electric Kettle"><i class="fa icon-zoom-in"></i></a>
									<div class="img-overlay"></div>
								</div>
								<div class="product-meta">
									<div class="left">
										<h3 class="name"><a href="http://shopermarket.com/item/breville-usa-bke595xl-the-crystal-clear-electric-kettle">Breville USA BKE595XL The Crystal Clear ...</a></h3>
										<p class="description">The Breville BKE595XL Crystal Clear Electric.</p>
											<p class="description">	<div class="action">
											<div class="cartt">
												Region : Jawa Timur -
											</div>
											<div class="wishlist">
												City : Malang
												</div>
										<!--	<div class="compare">
												<a onclick="addToCompare('43');" title="" class="icon-exchange product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Compare">&nbsp;</a>
											</div> -->
										</div></p>
									</div>
									<div class="right">
										<div class="price">
																							<span class="price-new">$ 99.95</span>
										</div>
									<!--	<div class="action">
											<div class="cart">
												<input value="?" onclick="addToCart('43');" class="product-icon icon-shopping-cart" data-placement="top" data-toggle="tooltip" data-original-title="Add to Cart" type="button" />
											</div>
											<div class="wishlist">
												<a onclick="addToWishList('43');" title="" class="icon-heart product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Wish List">&nbsp;</a>
											</div>
											<div class="compare">
												<a onclick="addToCompare('43');" title="" class="icon-exchange product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Compare">&nbsp;</a>
											</div>
										</div> -->
									</div>
								</div>
							</div>
						</div>
													<div class="col-lg-333 col-md-3 col-sm-6 col-xs-12">
							<div class="product-block">
															<div class="tanggal">
								Today 15:35
									 
								</div>
								<div class="image">
									<!--<span class="product-label-special"><span>Sale</span></span> -->
									<a href="http://shopermarket.com/item/victorinox-swisscard-swiss-army-knife"><img src="<?php echo base_url(); ?>/static/temp/418EAUS1lVL.jpg" title="Victorinox SwissCard Swiss Army Knife" alt="Victorinox SwissCard Swiss Army Knife" class="img-responsive"></a>
									<a href="http://shopermarket.com/item/victorinox-swisscard-swiss-army-knife" class="info-view colorbox product-zoom cboxElement" rel="colorbox" title="Victorinox SwissCard Swiss Army Knife"><i class="fa icon-zoom-in"></i></a>
									<div class="img-overlay"></div>
								</div>
								<div class="product-meta">
									<div class="left">
										<h3 class="name"><a href="http://shopermarket.com/item/victorinox-swisscard-swiss-army-knife">Victorinox SwissCard Swiss Army Knife</a></h3>
										<p class="description">A terrific gift for a man or a woman...</p>
											<p class="description">	<div class="action">
											<div class="cartt">
												Region : Jawa Timur -
											</div>
											<div class="wishlist">
												City : Malang
												</div>
										<!--	<div class="compare">
												<a onclick="addToCompare('43');" title="" class="icon-exchange product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Compare">&nbsp;</a>
											</div> -->
										</div></p>
									</div>
									<div class="right">
										<div class="price">
																							<span class="price-new">$ 25.58</span>
										</div>
									<!--	<div class="action">
											<div class="cart">
												<input value="?" onclick="addToCart('43');" class="product-icon icon-shopping-cart" data-placement="top" data-toggle="tooltip" data-original-title="Add to Cart" type="button" />
											</div>
											<div class="wishlist">
												<a onclick="addToWishList('43');" title="" class="icon-heart product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Wish List">&nbsp;</a>
											</div>
											<div class="compare">
												<a onclick="addToCompare('43');" title="" class="icon-exchange product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Compare">&nbsp;</a>
											</div>
										</div> -->
									</div>
								</div>
							</div>
						</div>
													<div class="col-lg-333 col-md-3 col-sm-6 col-xs-12">
							<div class="product-block">
															<div class="tanggal">
								Today 15:35
									 
								</div>
								<div class="image">
									<!--<span class="product-label-special"><span>Sale</span></span> -->
									<a href="http://shopermarket.com/item/nespresso-aeroccino-and-milk-frother-1"><img src="<?php echo base_url(); ?>/static/temp/31To66UufL.jpg" title="Nespresso Aeroccino and Milk Frother" alt="Nespresso Aeroccino and Milk Frother" class="img-responsive"></a>
									<a href="http://shopermarket.com/item/nespresso-aeroccino-and-milk-frother-1" class="info-view colorbox product-zoom cboxElement" rel="colorbox" title="Nespresso Aeroccino and Milk Frother"><i class="fa icon-zoom-in"></i></a>
									<div class="img-overlay"></div>
								</div>
								<div class="product-meta">
									<div class="left">
										<h3 class="name"><a href="http://shopermarket.com/item/nespresso-aeroccino-and-milk-frother-1">Nespresso Aeroccino and Milk Frother</a></h3>
										<p class="description">Nespresso 3194-us-re aeroccino and</p>
											<p class="description">	<div class="action">
											<div class="cartt">
												Region : Jawa Timur -
											</div>
											<div class="wishlist">
												City : Malang
												</div>
										<!--	<div class="compare">
												<a onclick="addToCompare('43');" title="" class="icon-exchange product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Compare">&nbsp;</a>
											</div> -->
										</div></p>
									</div>
									<div class="right">
										<div class="price">
																							<span class="price-new">$ 119</span>
										</div>
									<!--	<div class="action">
											<div class="cart">
												<input value="?" onclick="addToCart('43');" class="product-icon icon-shopping-cart" data-placement="top" data-toggle="tooltip" data-original-title="Add to Cart" type="button" />
											</div>
											<div class="wishlist">
												<a onclick="addToWishList('43');" title="" class="icon-heart product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Wish List">&nbsp;</a>
											</div>
											<div class="compare">
												<a onclick="addToCompare('43');" title="" class="icon-exchange product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Compare">&nbsp;</a>
											</div>
										</div> -->
									</div>
								</div>
							</div>
						</div>
													<div class="col-lg-333 col-md-3 col-sm-6 col-xs-12">
							<div class="product-block">
															<div class="tanggal">
								Today 15:35
									 
								</div>
								<div class="image">
									<!--<span class="product-label-special"><span>Sale</span></span> -->
									<a href="http://shopermarket.com/item/bodum-11451-01us-17-ounce-electric-water-kettle-black"><img src="<?php echo base_url(); ?>/static/temp/41VUDVGiWyL.jpg" title="Bodum 11451-01US 17-Ounce Electric Water Kettle, Black" alt="Bodum 11451-01US 17-Ounce Electric Water Kettle, Black" class="img-responsive"></a>
									<a href="http://shopermarket.com/item/bodum-11451-01us-17-ounce-electric-water-kettle-black" class="info-view colorbox product-zoom cboxElement" rel="colorbox" title="Bodum 11451-01US 17-Ounce Electric Water Kettle, Black"><i class="fa icon-zoom-in"></i></a>
									<div class="img-overlay"></div>
								</div>
								<div class="product-meta">
									<div class="left">
										<h3 class="name"><a href="http://shopermarket.com/item/bodum-11451-01us-17-ounce-electric-water-kettle-black">Bodum 11451-01US 17-Ounce Electric ...</a></h3>
										<p class="description">Whether you're a tea lover or a coffee aficionadoout ...</p>
<p class="description">	<div class="action">
											<div class="cartt">
												Region : Jawa Timur -
											</div>
											<div class="wishlist">
												City : Malang
												</div>
										<!--	<div class="compare">
												<a onclick="addToCompare('43');" title="" class="icon-exchange product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Compare">&nbsp;</a>
											</div> -->
										</div></p>
									</div>
									<div class="right">
										<div class="price">
																							<span class="price-new">$ 33.49</span>
										</div>
									<!--	<div class="action">
											<div class="cart">
												<input value="?" onclick="addToCart('43');" class="product-icon icon-shopping-cart" data-placement="top" data-toggle="tooltip" data-original-title="Add to Cart" type="button" />
											</div>
											<div class="wishlist">
												<a onclick="addToWishList('43');" title="" class="icon-heart product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Wish List">&nbsp;</a>
											</div>
											<div class="compare">
												<a onclick="addToCompare('43');" title="" class="icon-exchange product-icon" data-placement="top" data-toggle="tooltip" data-original-title="Add to Compare">&nbsp;</a>
											</div>
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div></div></div>
					<div class="pagination">
						<div class="links">
							<b>1</b>
							<a data-page-value="2">2</a>
							<a data-page-value="3">3</a>
							<a data-page-value="4">4</a>
							<a data-page-value="5">5</a>
							<a data-page-value="2">&gt;</a>
							<a data-page-value="12">&gt;|</a>
						</div>
						<div class="results">Showing 1 to 12 of 139 (12 Pages)</div>
					</div>
				</div>
			</section>
		</div></div>
	</section>
	
	<?php $this->load->view('website/common/footer'); ?>
</section>

<?php $this->load->view('website/common/menu_canvas'); ?>

<script type="text/javascript">
	var view_type = get_local('view_type');
	display_item(view_type);
	
	// search
	$('.change_sort').change(function() {
		$('#form-hidden [name="page_sort"]').val($(this).val());
		$('#form-hidden').submit();
	});
	$('.change_limit').change(function() {
		$('#form-hidden [name="page_limit"]').val($(this).val());
		$('#form-hidden').submit();
	});
	$('.pagination .links a').click(function() {
		$('#form-hidden [name="page_active"]').val($(this).data('page-value'));
		$('#form-hidden').submit();
	});
</script>

</body></html>