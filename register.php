
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "headerScript.php"?>
  </head>
  <body>
  <?php include "header.php"?>
    <!-- header section -->
    <section class="hero-sectoin m-3">
      <div class="container py-3 px-3 mt-5 h-100 border bg-white">
        <div
          class="row gx-5 py-3 justify-content-center align-items-center h-100"
        >
          <div class="col-md-5 d-none d-md-block">
            <h1 class="text-custom-font">
              <span class="h2 custom-green"> Welcome to productreport</span>
              <span class="h4"> make a product report easiy!</span>
            </h1>
            <br />
            <img
              src="images/hero image.jpg"
              class="img-fluid"
              alt=""
              srcset=""
            />
          </div>

          <div class="col-md">
            <div class="row justify-content-center align-items-center">
              <div class="col">
                <img
                  src="images/logo.png"
                  class="img-fluid mx-auto d-block"
                  style="width: 80px"
                  alt=""
                  srcset=""
                />
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 h5 text-center">
                  Sign up into your account
                </h3>
              </div>
            </div>

            <form action="" method="post"id="form">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline remove-focus">
                    <label class="form-label" for="firstName">First Name</label>
                    <input type="text"id="fname"name="fname"class="form-control form-control-lg"placeholder="Jhon"/>
                    <small class="text-danger"></small>
                  </div>
                </div>


                <div class="col-md-6 mb-4">
                  <div class="form-outline remove-focus">
                    <label class="form-label" for="lastName">Last Name</label>
                    <input type="text"id="lname" name="lname"
                      class="form-control form-control-lg"
                      placeholder="Doe"
                    />
                    <small class="text-danger"></small>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline remove-focus">
                  <label class="form-label" for="username">username</label>
                    <input
                      type="text"
                      id="username"
                      name="username"
                      class="form-control form-control-lg"
                      placeholder="jhon123"
                    
                    />
                    <small class="text-danger"></small>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline remove-focus">
                    <label class="form-label" for="mobileNo">Mobile No</label>
                    <input
                      type="number"
                      id="phone"
                      name="mobileno"
                      class="form-control form-control-lg"
                      placeholder="01*********"
                 
                    />
                    <small class="text-danger"></small>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline remove-focus">
                    <label class="form-label" for="password">Password</label>
                    <input
                      type="password"
                      id="password"
                      name="password"
                      class="form-control form-control-lg"
                      placeholder="******"
                    />
                    <small class="text-danger"></small>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline remove-focus">
                    <label class="form-label" for="lastName"
                      >Confirm Password</label
                    >
                    <input
                      type="password"
                      id="cpassword"
                      name="cpassword"
                      class="form-control form-control-lg"
                      placeholder="******"
                    />
                    <small class="text-danger"></small>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <label class="form-label select-label"
                    >Your Designation</label
                  >
                  <br />
                  <select class="select form-control-lg">
                    <option value="1" disabled>Choose option</option>
                    <option value="2">product Auditor</option>
                    <option value="3">packing auditor</option>
                    <option value="4">qms auditor</option>
                    <option value="5">GPQ</option>
                    <option value="6">QA incharge</option>
                  </select>
                </div>
              </div>

              <div
                class="mt-4 pt-2 d-flex align-items-center justify-content-between"
              >
            <button type="submit"class="btn custom-green-bg px-5 py-2 "id="s-btn">submit</button>
              
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <script src="main.js"></script>
  </body>
</html>
