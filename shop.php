<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>
<!-- MAIN -->
<main>
  <!-- HERO -->
  <div class="nero">
    <div class="nero__heading">
      <span class="nero__bold">shop</span> AT AVE
    </div>
    <p class="nero__text">
    </p>
  </div>
</main>


<div id="content">
  <!-- content Starts -->
  <div class="container">
    <!-- container Starts -->

    <div class="col-md-12">
      <!--- col-md-12 Starts -->



    </div>
    <!--- col-md-12 Ends -->

    <div class="col-md-3">
      <!-- col-md-3 Starts -->

      <?php include("includes/sidebar.php"); ?>

    </div><!-- col-md-3 Ends -->

    <div id="products" class="col-md-9">
      <!-- col-md-9 Starts --->


      <?php getProducts(); ?>

    </div><!-- row Ends -->

    <center>
      <!-- center Starts -->

      <ul class="pagination">
        <!-- pagination Starts -->

        <?php getPaginator(); ?>

      </ul><!-- pagination Ends -->

    </center><!-- center Ends -->



  </div><!-- col-md-9 Ends --->



</div>
<!--- wait Ends -->

</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

<script>
  $(document).ready(function() {

    /// Hide And Show Code Starts ///

    $('.nav-toggle').click(function() {

      $(".panel-collapse,.collapse-data").slideToggle(700, function() {

        if ($(this).css('display') == 'none') {

          $(".hide-show").html('Show');

        } else {

          $(".hide-show").html('Hide');

        }

      });

    });

    /// Hide And Show Code Ends ///

    /// Search Filters code Starts ///



    /// Search Filters code Ends ///

  });
</script>


<script>
  $(document).ready(function() {

    // getProducts Function Code Starts

    function getProducts() {
      const input_search_value = $('#input_search').val();
      const input_price_value = [...$('.input_price')].filter(item => {
        return item.checked;
      })[0]?.value ?? '';

      if(input_search_value !== '' || input_price_value !== '') {
        $.ajax({
  
          url: "load.php",
  
          method: "POST",
  
          data: {
            input_search_value,
            input_price_value
          },
  
          success: function(data) {
  
            $('#products').html('');
  
            $('#products').html(data);
  
            $("#wait").empty();
  
          }
  
        });
      } else {
        window.open('shop.php');
      }

      // ajax Code Ends

    }

    // getProducts Function Code Ends

    $('.button_control_panel').click(function(event) {

      getProducts();
      event.preventDefault();

    });

  });
</script>

</body>

</html>
