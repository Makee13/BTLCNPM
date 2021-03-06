<div class="panel panel-default sidebar-menu">
    <!--- panel panel-default sidebar-menu Starts -->

    <div class="panel-heading">
        <!-- panel-heading Starts -->

        <h3 class="panel-title">
            <!-- panel-title Starts -->

            Lựa chọn để tìm kiếm

            <div class="pull-right">
                <!-- pull-right Starts -->

                <a href="#" style="color:black;">

                    <span class="nav-toggle hide-show">
                        Ẩn bớt
                    </span>

                </a>

            </div><!-- pull-right Ends -->

        </h3><!-- panel-title Ends -->

    </div><!-- panel-heading Ends -->

    <form class="panel-collapse collapse-data" action= "shop.php" method= "POST">
        <!-- panel-collapse collapse-data Starts -->

        <div class="panel-body"  style="display:flex;">
            <!-- panel-body Starts -->
                <input id="input_search" type="text" class="form-control" name="input_name" id="dev-table-filter" data-action="filter" data-filters="#dev-p-cats" placeholder="Nhập vào tên sản phẩm">
                <button class="button_control_panel" name="search_control" type="submit" style="border: 0; padding: 5px 12px; background:#dddddd;"><i class="fa fa-search"></i> </button>

        </div><!-- panel-body Ends -->

        <div class="panel-body scroll-menu">
            <!-- panel-body scroll-menu Starts -->

            <ul class="nav nav-pills nav-stacked category-menu" id="dev-p-cats">
                <!-- nav nav-pills nav-stacked category-menu Starts -->

                <div class="form-check">                  
                    <li class="radio checkbox-primary" style="background:#dddddd; padding:10px;">
                    <a>
                    <label>
                    <input class="input_price" type="radio" value="50" name="input_price" class="get_p_cat" id="p_cat">
                    <span>
                        Dưới 50$
                    </span>
                    </label>
                    </a>
                    </li>
                    <li class="radio checkbox-primary" style="background:#dddddd; padding:10px;">
                    <a>
                    <label>
                    <input class="input_price" type="radio" value="100" name="input_price" class="get_p_cat" id="p_cat">
                    <span>
                        Dưới 100$
                    </span>
                    </label>
                    </a>
                    </li>
                    <li class="radio checkbox-primary" style="padding:10px;">
                    <a>
                    <label>
                    <input class="input_price" type="radio" value="200" name="input_price" class="get_p_cat" id="p_cat">
                    <span>
                        Dưới 200$
                    </span>
                    </label>
                    </a>
                    </li>
                    <li class="radio checkbox-primary" style="padding:10px; ">
                    <a>
                    <label>
                    <input class="input_price" type="radio" value="500" name="input_price" class="get_p_cat" id="p_cat">
                    <span>
                        Dưới 500$
                    </span>
                    </label>
                    </a>
                    </li>
                </div>


            </ul><!-- nav nav-pills nav-stacked category-menu Ends -->

        </div><!-- panel-body scroll-menu Ends -->

    </form><!-- panel-collapse collapse-data Ends -->

</div>

<div class="panel panel-default sidebar-menu">
    <!--- panel panel-default sidebar-menu Starts -->
    <div class="panel-collapse collapse-data">
        <!-- panel-collapse collapse-data Starts -->

        <div class="panel-body">
            <!-- panel-body Starts -->

            <div class="input-group">
                <!-- input-group Starts -->

                <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-p-cats" placeholder="Nhập vào tên sản phẩm">

                <a class="input-group-addon"> <i class="fa fa-search"></i> </a>

            </div><!-- input-group Ends -->

        </div><!-- panel-body Ends -->

        <div class="panel-body scroll-menu">
            <!-- panel-body scroll-menu Starts -->

            <ul class="nav nav-pills nav-stacked category-menu" id="dev-p-cats">
                <!-- nav nav-pills nav-stacked category-menu Starts -->

                

                    <li class="checkbox checkbox-primary" style="background:#dddddd;">

                    <a>

                    <label>

                    <input type="checkbox" value="7" name="p_cat" class="get_p_cat" id="p_cat">

                    <span>

                    <img src="admin_area/other_images/jacketicn.png" width="20"> &nbsp;
                    jackets

                    </span>

                    </label>

                    </a>

                    </li>

                    

                    <li class="checkbox checkbox-primary" style="background:#dddddd;">

                    <a>

                    <label>

                    <input type="checkbox" value="8" name="p_cat" class="get_p_cat" id="p_cat">

                    <span>

                    <img src="admin_area/other_images/sneakericn.png" width="20"> &nbsp;
                    Sneakers

                    </span>

                    </label>

                    </a>

                    </li>

                    

                    <li class="checkbox checkbox-primary">

                    <a>

                    <label>

                    <input type="checkbox" value="4" name="p_cat" class="get_p_cat" id="p_cat">

                    <span>

                    <img src="admin_area/other_images/coaticn.png" width="20"> &nbsp;
                    Coats

                    </span>

                    </label>

                    </a>

                    </li>

                    

                    <li class="checkbox checkbox-primary">

                    <a>

                    <label>

                    <input type="checkbox" value="5" name="p_cat" class="get_p_cat" id="p_cat">

                    <span>

                    <img src="admin_area/other_images/tshirticn.png" width="20"> &nbsp;
                    T-Shirts

                    </span>

                    </label>

                    </a>

                    </li>

                    

                    <li class="checkbox checkbox-primary">

                    <a>

                    <label>

                    <input type="checkbox" value="6" name="p_cat" class="get_p_cat" id="p_cat">

                    <span>

                    <img src="admin_area/other_images/sweatericn.png" width="20"> &nbsp;
                    Sweater

                    </span>

                    </label>

                    </a>

                    </li>

                    

                    <li class="checkbox checkbox-primary">

                    <a>

                    <label>

                    <input type="checkbox" value="9" name="p_cat" class="get_p_cat" id="p_cat">

                    <span>

                    <img src="admin_area/other_images/trousericn.png" width="20"> &nbsp;
                    Trousers

                    </span>

                    </label>

                    </a>

                    </li>

                    
            </ul><!-- nav nav-pills nav-stacked category-menu Ends -->

        </div><!-- panel-body scroll-menu Ends -->

    </div>

</div>
<!--- panel panel-default sidebar-menu Ends -->



<!--- panel panel-default sidebar-menu Starts -->
<div class="panel panel-default sidebar-menu">
    <!--- panel panel-default sidebar-menu Starts -->
    <div class="panel-collapse collapse-data">
        <!-- panel-collapse collapse-data Starts -->
        <div class="panel-body">
            <!-- panel-body Starts -->
            <div class="input-group">
                <!-- input-group Starts -->
                <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-cats" placeholder="Nhập vào tên sản phẩm">
                <a class="input-group-addon"> <i class="fa fa-search"> </i> </a>
            </div><!-- input-group Ends -->
        </div><!-- panel-body Ends -->
        <div class="panel-body scroll-menu">
            <!-- panel-body scroll-menu Starts -->
            <ul class="nav nav-pills nav-stacked category-menu" id="dev-cats">
                <!-- nav nav-pills nav-stacked category-menu Starts -->
                <li class="checkbox checkbox-primary" style="background:#dddddd;">
                    <a>
                        <label>
                            <input type="checkbox" value="4" name="cat" class="get_cat" id="cat">
                            <span>
                                <img src="admin_area/other_images/othericon.png" width="20">&nbsp;
                                Others
                            </span>
                        </label>
                    </a>
                </li>
                <li class="checkbox checkbox-primary" style="background:#dddddd;">
                    <a>
                        <label>
                            <input type="checkbox" value="5" name="cat" class="get_cat" id="cat">
                            <span>
                                <img src="admin_area/other_images/malelg.png" width="20">&nbsp;
                                Men
                            </span>
                        </label>
                    </a>
                </li>
                <li class="checkbox checkbox-primary">
                    <a>
                        <label>
                            <input type="checkbox" value="2" name="cat" class="get_cat" id="cat">
                            <span>
                                <img src="admin_area/other_images/feminelg.png" width="20">&nbsp;
                                Feminine
                            </span>
                        </label>
                    </a>
                </li>
                <li class="checkbox checkbox-primary">
                    <a>
                        <label>
                            <input type="checkbox" value="3" name="cat" class="get_cat" id="cat">
                            <span>
                                <img src="admin_area/other_images/kidslg.jpg" width="20">&nbsp;
                                Kids
                            </span>
                        </label>
                    </a>
                </li>
            </ul><!-- nav nav-pills nav-stacked category-menu Ends -->

        </div><!-- panel-body scroll-menu Ends -->

    </div><!-- panel-collapse collapse-data Ends -->

</div>
<!--- panel panel-default sidebar-menu Ends -->
