
       	<!-- Our-Product-Page -->
        <div class="bgImages opacityLayer" style="background-image: url(img/cake-bg3.jpg); background-position: 50% 50%; background-size: cover">
            <div class="container">
                <div class="cell-view tableCellVH2">
                    <div class="emptySpace100 emptySpace-md50"></div>
                    <div class="emptySpace115 emptySpace-md100"></div>
                    <div class="row">
                        <!-- Our-Prodicts-Title -->
                        <div class="col-sm-8 col-sm-offset-2">
                          <div class="emptySpace50 emptySpace-md30"></div>
                            <div class="big titleShortcode">
                                <h2 class="h1">Our Price List</h2>
                                <div class="emptySpace5"></div>
                                <!-- <p> Take your time to go through our list of products and prices then make a favorable choice. Your will never go wrong with products!</p> -->
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
                <div class="emptySpace40 emptySpace-xs30"></div>
                <div class="grid">
                    <div class="row">
                      <div class="col-md-12">
                        <table class="table table-hover priceList">
                          <thead>
                            <tr>
                              <th></th>
                              <th>Cake</th>
                              <th>0.5 Kgs</th>
                              <th>1 Kgs</th>
                              <th>1.5 Kgs</th>
                              <th>2 Kgs</th>
                              <th>2.5 Kgs</th>
                              <th>3 Kgs</th>
                              <th>3.5 Kgs</th>
                              <th>4 Kgs</th>
                              <th>4.5 Kgs</th>
                              <th>5 Kgs</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i = 1; foreach ($prices as $price): ?>
                              <tr class="<?php echo $price['filter']; ?>">
                                <td><?php echo $i ?>.</td>
                                <td> <?php echo $price['product']; ?> </td>
                                <td> <?php echo $price['half']; ?> </td>
                                <td> <?php echo $price['one']; ?> </td>
                                <td> <?php echo $price['one_half']; ?> </td>
                                <td> <?php echo $price['two']; ?> </td>
                                <td> <?php echo $price['two_half']; ?> </td>
                                <td> <?php echo $price['three']; ?> </td>
                                <td> <?php echo $price['three_half']; ?> </td>
                                <td> <?php echo $price['four']; ?> </td>
                                <td> <?php echo $price['four_half']; ?> </td>
                                <td> <?php echo $price['five']; ?> </td>
                                <td class="text-center"> <a href="order"><i class="fa fa-2x fa-plus-circle"></i></a> </td>
                              </tr>
                            <?php $i++; endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>
            <div class="emptySpace130 emptySpace-xs40"></div>
        </div>


        <div class="footerSeparator"></div>
