<?php 


require_once("connection.php");
$sql = "select * from log";
$result = mysqli_query($conn, $sql)


?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,shrink-to-fit=no"
    />
    <title>KISAAN DOST | Agro Assisstance-System</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/handsontable/7.4.2/handsontable.full.min.css"
      integrity="sha256-I1MrClMxfcEQ2gWwRjAt3+EZIqAOQDYz7c8z6/AY+Uw="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <script>
      var test = document.createElement("div");
      (test.className = "hidden d-none"), document.head.appendChild(test);
      var link,
        cssLoaded = "none" === window.getComputedStyle(test).display;
      document.head.removeChild(test),
        cssLoaded ||
          (((link = document.createElement("link")).type = "text/css"),
          (link.rel = "stylesheet"),
          (link.href = "main.css"),
          document.head.appendChild(link));
    </script>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark">
      <a class="navbar-brand mr-auto" href="index.html"
        ><img src="img\logo.png" height="30" width="30" /></a
      ><button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="/actions.html">Actions</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="graphs.html">Graphs</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="logs.php">Logs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item dropdown active">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
              >Details</a
            >
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"
                >Temperature<span class="sr-only">(current)</span></a
              >
              <a class="dropdown-item" href="humid1.php">Humidity</a>
              <a class="dropdown-item" href="moisture1.php">Moisture</a>
              <!-- <a class="dropdown-item" href="/sunlight.html">Sunlight</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/watertank.html">Water Tank</a> -->
            </div>
          </li>
        </ul>
        <!-- <button
          class="btn btn-outline-light mx-md-2 my-2 my-sm-0 align-self-center"
          id="signupmodalButton"
        >
          Signup
        </button>
        <button
          class="btn btn-outline-light ml-2 my-2 my-sm-0 align-self-center"
          id="loginmodalButton"
        >
          Login
        </button> -->
      </div>
    </nav>
    <div
      style="
        width: 100%;
        height: 0.4rem;
        background: rgba(0, 0, 0, 0)
          linear-gradient(
            90deg,
            #645b53 0,
            #eb5252 18.23%,
            #f78f2f 34.37%,
            #f4c151 48.96%,
            #52bb76 66.15%,
            #26a5d7 82.29%,
            #e069b7 100%
          )
          repeat scroll 0 0;
      "
    ></div>
    <div id="loginModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-row">
                <div class="form-group col-sm-4">
                  <label class="sr-only" for="loginemail">Email address</label>
                  <input
                    type="email"
                    name="email"
                    class="form-control form-control-sm mr-1"
                    id="loginemail"
                    placeholder="Enter email"
                    required
                  />
                </div>
                <div class="form-group col-sm-4">
                  <label class="sr-only" for="loginpassword">Password</label>
                  <input
                    type="password"
                    name="password"
                    class="form-control form-control-sm mr-1"
                    id="loginpassword"
                    placeholder="Password"
                    required
                  />
                </div>
                <div class="col-sm-auto">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      name="remember"
                      type="checkbox"
                    /><label class="form-check-label">Remember me</label>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <button
                  type="button"
                  class="btn btn-secondary btn-sm ml-auto"
                  data-dismiss="modal"
                >
                  Cancel
                </button>
                <button
                  type="button"
                  id="signinButton"
                  class="btn btn-success btn-sm ml-1"
                >
                  Sign in
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="signupModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Signup</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
            <form autocomplete="off">
              <div class="form-group row no-gutters">
                <div class="col-lg-3 align-self-center d-none d-lg-block">
                  <img
                    class="mr-5"
                    alt="signup icon"
                    height="350px"
                    src="/svg/signup.svg"
                    data-holder-rendered="true"
                  />
                </div>
                <div class="col-12 col-lg-9 mt-4">
                  <div class="form-group row">
                    <label for="firstname" class="col-sm-2 col-form-label"
                      >Firstname</label
                    >
                    <div class="col-sm-10">
                      <input
                        type="text"
                        class="form-control"
                        id="firstname"
                        name="firstname"
                        placeholder="Firstname"
                        required
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lastname" class="col-sm-2 col-form-label"
                      >Lastname</label
                    >
                    <div class="col-sm-10">
                      <input
                        type="text"
                        class="form-control"
                        id="lastname"
                        name="lastname"
                        placeholder="Lastname"
                        required
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label"
                      >Email</label
                    >
                    <div class="col-sm-10">
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Email Address"
                        required
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label"
                      >Password</label
                    >
                    <div class="col-sm-10">
                      <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        placeholder="Password"
                        required
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="telnum" class="col-sm-2 col-form-label"
                      >Phone Number</label
                    >
                    <div class="col-sm-10">
                      <input
                        type="telnum"
                        class="form-control"
                        id="telnum"
                        name="telnum"
                        placeholder="Phone Number"
                      />
                      <div>
                        <small
                          >Enter your phone number if you wish to recieve alerts
                          via sms</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-2 align-self-center"></div>
                    <div class="col-sm-10">
                      <div class="custom-control custom-switch">
                        <input
                          class="custom-control-input"
                          type="checkbox"
                          id="smsalert"
                          name="smsalert"
                        />
                        <label class="custom-control-label" for="smsalert"
                          >Alert me via SMS</label
                        >
                      </div>
                      <div class="custom-control custom-switch">
                        <input
                          class="custom-control-input"
                          type="checkbox"
                          id="emailalert"
                          name="emailalert"
                        />
                        <label class="custom-control-label" for="emailalert"
                          >Alert me via Email</label
                        >
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 offset-sm-2 mt-3">
                      <button
                        type="button"
                        id="signupButton"
                        class="btn btn-success"
                      >
                        Sign Me Up!
                      </button>
                      <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                      >
                        Cancel
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <header>
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 mx-auto text-center">
              <div class="row">
                <div class="col-12 col-md-3 align-self-center">
                  <img src="img\logo.png" height="200" width="200" />
                </div>
                <div class="col-12 col-md-9">
                  <h1 class="text-center">KISAAN DOST | Agro Assisstance-System</h1>
                  <p class="text-center">
                    A remote weather station powered by ESP WROOM-32
                  </p>
                  <p>&nbsp;</p>
                  <p class="text-center">
                    <a
                      class="btn btn-success btn-lg"
                      href="about.php"
                      role="button"
                      >Learn more</a
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div class="row mb-4 mt-2">
          <div class="col-sm-12 text-center align-self-center">
            <h2>
              <img
                class="mb-2 mr-3"
                alt="status icon"
                height="30px"
                width="30px"
                src="svg\status.svg"
                data-holder-rendered="true"
              />Temperature
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 offset-md-3 text-center">
            <div class="row mt-5">
              <div class="col-6">
                <img
                  class="rounded-circle mb-2"
                  alt="thermometer icon"
                  height="140px"
                  width="140px"
                  src="svg\thermometer.svg"
                  data-holder-rendered="true"
                />
              </div>
              <div class="col-6 align-self-center" id="temperature"></div>
            </div>
          </div>
        </div>
        <div class="col-12 custom-border">
          <div class="media mt-5 mb-5">
            <div class="row">
              <div class="media-body col-md-6">
                <h5 class="mb-3 mt-4">Temperature Logs</h5>
                <p>
              These are the values collected by the weather station during
              operation. The data is stored remotely on a server and is retained
              for 30 days.
            </p>
              </div>
              <div class="col-md-6 ml-md-3 mx-auto" style="width: 630px"> 
                <!-- style="overflow: auto" -->
                <div
                  class="align-self-center shadow my-3 mb-4"
                  id="temperature_graph" style="height: 43000px"
                >

                <table border="2px" style="width:450px; line-height:30px;">
              <tr>
              <td>time</td>
              <td>temperature</td>  
              </tr>
              <tr>
                <?php
                  while($row = mysqli_fetch_assoc($result))
                    { 
                ?>
                    <td><?php echo $row['time']; ?></td>
                    <td><?php echo $row['temperature']; ?></td>
              </tr>
                <?php
                    }
                ?>
                
            </table>

              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="row my-5">
          <div
            class="col-12 col-md-6 col-lg-4 offset-lg-2 mb-5 py-3"
            style="height: 430px"
          >
            <div id="temperature_spreadsheet">
              
               <table border="2px" style="width:600px; line-height:10px;">
              <tr>
              <td>Time</td>
              <td>Temperature</td>  
              </tr>
              <tr>
                <?php
                  while($row = mysqli_fetch_assoc($result))
                    { 
                ?>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo $row['temperature']; ?></td>
              </tr>
                <?php
                    }
                ?>
                
            </table> 

            </div>
          </div>
           <div class="col-12 col-md-6 col-lg-4 mt-2">
            <h5>Temperature Logs</h5>
            <p>
              These are the values collected by the weather station during
              operation. The data is stored remotely on a server and is retained
              for 30 days.
            </p>
            <div class="align-self-center text-center">
             
            </div>
          </div> 
        </div>  -->
      </div>
    </section>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12 mt-3 align-self-center">
            <p></p>
          </div>
        </div>
      </div>
    </footer>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"
      integrity="sha256-Xt8pc4G0CdcRvI0nZ2lRpZ4VHng0EoUDMlGcBSQ9HiQ="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/handsontable/7.4.2/handsontable.full.min.js"
      integrity="sha256-snKOUyKpbPfA0clT5s+QnvGaGYpkF2bXCbqgYvNv4ik="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.0/highcharts.min.js"
      integrity="sha256-PNoecAVzIUoL24x6Jl8cLh5LgV+FD1SpJhwmbia9vck="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.0/highcharts-more.min.js"
      integrity="sha256-P81FBSn6tJKQbv2SJa1yDrIV999UMw2cStH2v3vcOpA="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.0/modules/series-label.min.js"
      integrity="sha256-D3h1plKIyjIx92PNDYyQnO8zpStA9XFWd1lVyY9cTgA="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.0/modules/exporting.min.js"
      integrity="sha256-ba/YXl7Yjsh3Y3dmEdXZEdDoVhDQhkkHjd0/PJx/xWY="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.0/modules/export-data.min.js"
      integrity="sha256-1HHn+9bKoIyaI8WvPI+RtihMniR713q9lRiMOzqkRM0="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.0/modules/accessibility.min.js"
      integrity="sha256-1oSBeSNbKWm4QDs5ZM2RgpNcX5Su6qn2umlS92l6hF8="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"
      integrity="sha256-T/f7Sju1ZfNNfBh7skWn0idlCBcI3RwdLSS4/I7NQKQ="
      crossorigin="anonymous"
    ></script>
    <script src="js\scripts.js"></script>
  </body>
</html>
