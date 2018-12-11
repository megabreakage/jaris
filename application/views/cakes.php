
       	<!-- Our-Product-Page -->
        <div class="bgImages opacityLayer" style="background-image: url(img/muffins.jpg); background-position: 50% 50%; background-size: cover">
            <div class="container">
                <div class="cell-view tableCellVH2">
                    <div class="emptySpace100 emptySpace-md50"></div>
                    <div class="emptySpace115 emptySpace-md100"></div>
                    <div class="row">
                        <!-- Our-Prodicts-Title -->
                        <div class="col-sm-8 col-sm-offset-2">
                          <div class="emptySpace50 emptySpace-md100"></div>
                            <div class="big titleShortcode">
                                <!-- <h3 class="h3">Sweet And Delicious</h3> -->
                                <h2 class="h1">Our Products</h2>
                                <div class="emptySpace5"></div>
                                <p>For different kinds of cakes, cupcakes & loaves of bread in different flavors and shapes.</p>
                                Pick your flavor and proceed to order.
                            </div>
                        </div>
                        <div class="emptySpace120 emptySpace-md30"></div>
                        <div class="emptySpace120 emptySpace-md30"></div>
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
                <div class="emptySpace35 emptySpace-xs30"></div>
                <div class="row">
                    <!-- Filter-Buttons -->
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="big filterShortcode button-group filters-button-group">
                            <div class="filterBtn is-checked" data-filter="*">All</div>
                            <div class="filterBtn" data-filter=".cake">Cakes</div>
                            <div class="filterBtn" data-filter=".bread">Breads</div>
                            <div class="filterBtn" data-filter=".cupcakes">Cupcakes</div>
                       </div>
                    </div>
                </div>
                <div class="emptySpace70 emptySpace-xs30"></div>
                <div class="grid">
                    <div class="row">
                        <!-- Sweets-1 -->
                        <?php foreach ($products as $product): ?>
                          <div class="col-sm-6 col-md-4 col-lg-3 element-item <?php echo $product['filter']; ?>">
                              <div class="normall contentShortcode">
                                  <a href="products-detail"><h5 class="h5"><?php echo $product['product']; ?></h5></a>
                                  <div class="emptySpace-xs15 emptySpace25"></div>
                                  <div class="row">
                                    <div class="col-sm-12 prodImg">
                                      <a class="imgLayer" ><img class="imgShortcode" src="img/<?php echo $product['photo_link']; ?>" alt=""><span></span><span></span></a>
                                    </div>
                                  </div>
                                  <div class="emptySpace5"></div>
                                  <div class="emptySpace-xs15 emptySpace20"></div>
                                  <!-- <div class="sweetPrice"> Ksh. <?php echo $product['price']; ?></div> -->
                                  <div class="emptySpace-xs30 emptySpace65"></div>
                              </div>
                          </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="emptySpace120 emptySpace-xs30"></div>
        </div>
