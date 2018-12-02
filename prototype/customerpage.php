
<?php include_once('./components/Customer_head.php') ?>

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
		  
		  
		  <form>
          <ul class="list-group mb-2">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="inputState">color</label>
                <select id="inputState" class="form-control">
				<option selected>ALL</option>
                 <option>red</option>
		         <option>black</option>
		         <option>red</option>
                </select>
               </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="inputState">size</label>
                <select id="inputState" class="form-control">
				<option selected>ALL</option>
                 <option>s</option>
		         <option>m</option>
		         <option>l</option>
                </select>
               </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="inputState">material</label>
                <select id="inputState" class="form-control">
				<option selected>ALL</option>
                 <option>cotton</option>
		         <option>poliaster</option>
		         <option>wool</option>
                </select>
               </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="inputState">dress code</label>
                <select id="inputState" class="form-control">
				<option selected>ALL</option>
                 <option>casual</option>
		         <option>clasic</option>
		         <option>formal</option>
                </select>
               </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="inputState">dress code</label>
                <select id="inputState" class="form-control">
				<option selected>ALL</option>
                 <option>casual</option>
		         <option>clasic</option>
		         <option>formal</option>
                </select>
               </div>
            </li>
          </ul>
		  <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Search</button>
              </div>
		  </form>
		  
		  
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Search for Shops</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Shop Name </label>
                <input type="text" class="form-control" id="ShopName" placeholder="Shop Name" value="" required>
                <div class="invalid-feedback">
                  Valid Shop name is required.
                </div>
              

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Governtrate</label>
                <select class="custom-select d-block w-100" id="gov" required>
				   <option selected>Any</option>
                   <option>Cairo</option>
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
		   
	 
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Search for Designers</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-9 mb-6">
                <label for="firstName">Designer Name </label>
                <input type="text" class="form-control" id="DesignerName" placeholder="Designer Name" value="" required>
                <div class="invalid-feedback">
                  Valid Designer name is required.
                </div>
              

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Governtrate</label>
                <select class="custom-select d-block w-100" id="gov" required>
				   <option selected>Any</option>
                   <option>Cairo</option>
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
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2018-2019 EG Fashion</p>
      </footer>
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
