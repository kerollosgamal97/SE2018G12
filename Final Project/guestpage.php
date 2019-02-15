
<?php
 include_once('./components/Customer_head.php');
 include_once('./models/item.php');
 ?>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Welcome</h2>
        <p class="lead">Here you can search for whatever you want using filters , or even search for shops and designers</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-20">
          <h4 class="d-flex justify-content-between align-items-center mb-6">
            <span class="text-muted">Search filters</span>
            <span class="badge badge-secondary badge-pill">5</span>
          </h4>


		  <form method="GET" action="guestfilter.php">
          <ul class="list-group mb-2">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="inputState">color</label>
                <select id="inputState" name="color" class="form-control">

              <option selected>red</option>
		         <option>black</option>
		         <option>yellow</option>
             <option>orange</option>
             <option>blue</option>
             <option>green</option>
             <option>brown</option>
             <option>gray</option>
             <option>pink</option>
             <option>white</option>

                </select>
               </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="inputState">size</label>
                <select id="inputState" name="size" class="form-control">

                <option selected>XS</option>
		         <option>S</option>
		         <option>M</option>
             <option>L</option>
             <option>XL</option>
             <option>XXL</option>
             <option>XXXL</option>
                </select>
               </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="inputState">material</label>
                <select id="inputState" name="material" class="form-control">

                 <option selected>cotton</option>
		         <option>poliaster</option>
		         <option>wool</option>
                </select>
               </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="inputState">type</label>
                <select id="inputState" name="type" class="form-control">

         <option selected>Jacket</option>
     <option>Coat</option>
 <option>Skirt</option>
<option>Shorts</option>
<option>Trousers</option>
<option>Suits</option>
<option>Sweater</option>
<option>Dress</option>
                </select>
               </div>
            </li>

          </ul>
		  <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Filter</button>
              </div>
		  </form>


        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Search for :</h4>
          <form class="needs-validation" novalidate action="search.php" method="GET">



 <div class="row">
              <div class="col-md-5 mb-3">

                <select class="custom-select d-block w-100" name="type" id="gov" required>
				   <option selected>Shop Owner</option>
                   <option>Designer</option>


                </select>
                <div class="invalid-feedback">
                  Please select a valid Governerate.
                </div>
              </div>
            </div>
<div class="row">
              <div class="col-md-4 mb-3">
                <label for="firstName">Name </label>
                <input type="text" class="form-control" id="ShopName" name="name" placeholder="Name" value="" required>
                <div class="invalid-feedback">
                  Valid Shop name is required.
                </div>
            <div class="row">
              <div class="col-md-10 mb-3">
                <label for="country">Governtrate</label>
                <select class="custom-select d-block w-100" name="gov" id="gov" required>
				 
                   <option selected>Cairo</option>
                   <option>Giza</option>
		           <option>Alexandria</option>
		           <option>Al Gharbia</option>
		           <option>Al Qalubia</option>
		           <option>Al Mansoura</option>
		           <option>Al Wadi Al Gdid</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid Governerate.
                </div>
              </div>
            </div>
			<div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Search</button>
              </div>
			</form>

            <hr class="mb-4">

           </div>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
