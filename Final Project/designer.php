<?php include_once('./components/Customer_head.php');
 include_once('./models/item.php');

 include_once('./controllers/common.php');
 $owner_id = safeGet('id');
 $name = safeGet('name');
 ?>


 <head>
   <link rel='stylesheet' href='css3/designerstyle.css' />
   <script type="js/upload.js"></script>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="How to create an image upload form without page refresh using Bootstrap, jQuery AJAX and PHP.">
    <meta name="author" content="ShinDarth">


<!--
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"> -->


 </head>
<body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Welcome <?= $name ?></h2>
        <p class="lead">Here you can add your stock and sort them according to many filters </p>
      </div>




		  <form action="upload.php" method="POST" enctype="multipart/form-data">
         <div class="row">
        <div class="col-lg-6">
          <h4 class="d-flex justify-content-between align-items-center mb-6">
            <span class="text-muted">Product Details</span>
            <span class="badge badge-secondary badge-pill">6</span>
          </h4>
          <ul class="list-group mb-2">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="color">color</label>
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
               <label for="size">size</label>
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
               <label for="material">material</label>
                <select id="inputState" name="material" class="form-control">
                 <option selected>cotton</option>
                            <option>cotton</option>
          		         <option>poliaster</option>
          		         <option>wool</option>
                </select>
               </div>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="type">Type</label>
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
			<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="valid">Validity</label>
                <input type="text" class="form-control" name="valid" id="no" placeholder="valid Number" value="" required>
               </div>
            </li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-6">
               <label for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="$$$" value="" required>
               </div>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div class="form-group col-md-6">
                     <label for="owner_id">owner_id</label>
                      <input type="text" class="form-control" name="owner_id" id="price"  value="<?= $owner_id?>" readonly>
                     </div>
                  </li>

          </ul>

            </div>
              <div class="col-lg-6  " >


  <div class="right_section BORDER" style ="width:500px;height:500px;border:1px solid #000;">
<div class="container">

      <div style="max-width: 650px; margin: auto;">
        <h1 class="page-header">Upload Image Product</h1>
        <p class="lead">Select a PNG or JPEG image, having maximum size <span id="max-size"></span> KB.</p>

        <form id="upload-image-form" action="" method="post" enctype="multipart/form-data">
          <div id="image-preview-div" style="display: none">
            <label for="exampleInputFile">Selected image:</label>
            <br>
            <img id="preview-img" src="noimage">
          </div>
          <div class="form-group">
            <input type="file" name="image" id="file" required>
          </div>

        </form>

        <br>
        <div class="alert alert-info" id="loading" style="display: none;" role="alert">
          Uploading image...
          <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
            </div>
          </div>
        </div>
        <div id="message"></div>
      </div>
    </div>

  </div>
  <div class="input-group-append">
                <button type="submit" class="btn  btn-lg btn-primary " id="add_button" >ADD</button>
              </div>
    </div>
  </div>

  </div>
		  </form>





























 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="js/upload.js"></script>
        <script src="upload-image.js"></script>



		  </body>
