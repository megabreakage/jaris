
        <!-- Our-blog-Page -->
        <div class="bgImages opacityLayer" style="background-image: url(img/cake-bg.jpg); background-position: 50% 50%; background-size: cover;">
			<div class="container">
				<div class="cell-view tableCellVH2">
          <div class="emptySpace100 emptySpace-md50"></div>
          <div class="emptySpace115 emptySpace-md100"></div>
					<div class="row">
						<!-- Our-Blog-Title -->
						<div class="col-sm-8 col-sm-offset-2">
              <div class="emptySpace50 emptySpace-md30"></div>
							<div class="big titleShortcode">
								<h2 class="h1">Our Gallery</h2>
								<div class="emptySpace5"></div>
								<!-- <p>Our wide Variety allows you to make a decision that best suites your taste buds and your heart desires. We cater for all custom requests at very competitive prices.</p> -->
							</div>
              <div class="emptySpace50 emptySpace-md30"></div>
						</div>
            <div class="row text-center swiperContacts">
              <div class="col-sm-4 pt pb divBorder">
                <p><i class="fa fa-phone"></i> <a href="tel:+254717623487">(+254)717 623-487</a> </p>
              </div>
              <div class="col-sm-4 pt pb swiperContacts">
                <p><i class="fa fa-envelope"> <a href="mailto:orders@jarisbakers.co.ke">orders@jarisbakers.co.ke</a> </i></p>
              </div>
              <div class="col-sm-4 pt pb swiperContacts">
                <p><i class="fa fa-envelope"> <a href="mailto:enquiries@jarisbakers.co.ke"> enquiries@jarisbakers.co.ke </a> </i></p>
              </div>
            </div>
					</div>
					<div class="emptySpace50"></div>
				</div>
			</div>
        	</div>
        <div class="bgWhite">
          <div class="container">
              <div class="emptySpace50 emptySpace-xs30"></div>
              <div class="row">
                  <!-- Filter-Buttons -->
                  <div class="col-sm-12">
                      <div class="big filterShortcode button-group filters-button-group">
                          <div class="filterBtn is-checked" data-filter="*">All</div>
                          <div class="filterBtn" data-filter=".Birthday">Birthday</div>
                          <div class="filterBtn" data-filter=".BabyShower">Baby Shower</div>
                          <div class="filterBtn" data-filter=".Graduation">Graduation</div>
                          <div class="filterBtn" data-filter=".Corperate">Corporate Occasions</div>
                          <div class="filterBtn" data-filter=".Wedding">Wedding</div>
                          <div class="filterBtn" data-filter=".Anniversary">Anniversary</div>
                     </div>
                  </div>
              </div>
              <div class="emptySpace50 emptySpace-xs30"></div>
              <div class="grid">
                  <div class="row">
                      <!-- Sweets-1 -->
                      <?php foreach ($cakes as $cake): ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 element-item <?php echo $cake['filter']; ?>">
                            <div class="normall contentShortcode">
                                <a href="product_detail/<?php echo $cake['cake_id']; ?>"><h5 class="h5"><?php $cake['cake']; ?></h5></a>
                                <div class="emptySpace-xs15 emptySpace25"></div>
                                <div class="row">
                                  <div class="col-sm-12 prodImg">
                                    <a class="imgLayer"><img class="imgShortcode" src="<?php echo $cake['photo']; ?>" alt=""><span></span><span></span></a>
                                  </div>
                                </div>
                                <div class="emptySpace-xs15 emptySpace20"></div>
                                <div class="emptySpace-xs30 emptySpace45"></div>
                            </div>
                        </div>
                      <?php endforeach; ?>
                  </div>
              </div>
          </div>
          <div class="emptySpace-xs60 emptySpace120"></div>
        </div>
