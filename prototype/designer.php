<?php include_once('./components/Customer_head.php');
 ?>
<body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Welcome</h2>
        <p class="lead">Here you can add your stock and sort them according to many filters </p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-20">
          <h4 class="d-flex justify-content-between align-items-center mb-6">
            <span class="text-muted">Search filters</span>
            <span class="badge badge-secondary badge-pill">6</span>
          </h4>
		  
		  
		  <form>
          <ul class="list-group mb-2">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="inputState">color</label>
                <select id="inputState" class="form-control">
                 <option selected>red</option>
		         <option>black</option>
		         <option>red</option>
                </select>
               </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="inputState">size</label>
                <select id="inputState" class="form-control">
                 <option selected>S</option>
				 <option>XS</option>
		         <option>M</option>
		         <option>L</option>
				 <option>XL</option>
                </select>
               </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="inputState">material</label>
                <select id="inputState" class="form-control">
                 <option selected>cotton</option>
		         <option>poliaster</option>
		         <option>wool</option>
                </select>
               </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="inputState">dress code</label>
                <select id="inputState" class="form-control">
                 <option selected>casual</option>
		         <option>clasic</option>
		         <option>formal</option>
                </select>
               </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="inputState">dress code</label>
                <select id="inputState" class="form-control">
                 <option selected>casual</option>
		         <option>clasic</option>
		         <option>formal</option>
                </select>
               </div>
            </li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="inputState">Validity</label>
                <input type="text" class="form-control" id="no" placeholder="valid Number" value="" required>
               </div>
            </li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="inputState">Price</label>
                <input type="text" class="form-control" id="price" placeholder="$$$" value="" required>
               </div>
            </li>
          </ul>
		  <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">ADD</button>
              </div>
		  </form>
		  </body>