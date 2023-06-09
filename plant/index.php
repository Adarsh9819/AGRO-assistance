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
    <script>
      
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
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="/actions.html">Actions</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="graphs.php">Graphs</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="logs.php">Logs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item dropdown">
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
              <a class="dropdown-item" href="temprature.php">Temperature</a>
              <a class="dropdown-item" href="humid1.php">Humidity</a>
              <a class="dropdown-item" href="moisture1.php">Moisture</a>
              <!-- <a class="dropdown-item" href="/sunlight.html">Sunlight</a> -->
              <!-- <div class="dropdown-divider"></div>
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
                  <h1 class="text-center">KISAAN DOST | Agro Assitance-System</h1>
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
              />Factors
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 offset-md-3 text-center">
            <div class="row mt-5">
              <!-- <div class="col-6 text-center">
                <img
                  class="rounded-circle mb-2"
                  alt="tree icon"
                  height="140px"
                  width="140px"
                  src="svg\overall.svg"
                  data-holder-rendered="true"
                />
                <h3>Overall</h3>
              </div> -->
              <div class="row mt-5 mb-5 d-none d-md-block text-center">
          <img
            class="mb-2 mt-3 mx-auto mx-md-3"
            alt="thermometer icon"
            height="140px"
            width="140px"
            src="svg\thermometer.svg"
            data-holder-rendered="true"
          >Temperature</img>
          <img
            class="mb-2 mt-3 mx-auto mx-md-3"
            alt="humidity icon"
            height="140px"
            width="140px"
            src="svg\humidity.svg"
            data-holder-rendered="true"
          >Humidity</img>
          <img
            class="mb-2 mt-3 mx-auto mx-md-3"
            alt="moisture icon"
            height="140px"
            width="140px"
            src="svg\moisture.svg"
            data-holder-rendered="true"
          >Soil Moisture</img>

          <!-- <img
                  class="rounded-circle mb-2"
                  alt="waterpump icon"
                  height="140px"
                  width="140px"
                  src="svg\pump.svg"
                  data-holder-rendered="true"
                > Water Sprinkler</img> -->
          </div>
              <!-- <div class="col-6 align-self-center" id="overallstatus"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 text-center">
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
                <h3>Temperature</h3>
              </div>
              <div class="col-6 align-self-center" id="temperature"></div>
            </div>
          </div>
          <div class="col-md-6 text-center">
            <div class="row mt-5">
              <div class="col-6">
                <img
                  class="rounded-circle mb-2"
                  alt="humidity icon"
                  height="140px"
                  width="140px"
                  src="svg\humidity.svg"
                  data-holder-rendered="true"
                />
                <h3>Humidity</h3>
              </div>
              <div class="col-6 align-self-center" id="humidity"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 text-center">
            <div class="row mt-5">
              <div class="col-6">
                <img
                  class="rounded-circle mb-2"
                  alt="moisture icon"
                  height="140px"
                  width="140px"
                  src="svg\moisture.svg"
                  data-holder-rendered="true"
                />
                <h3>Soil Moisture</h3>
              </div>
              <div class="col-6 align-self-center" id="moisture"></div>
            </div>
          </div>
          <div class="col-md-6 text-center">
            <div class="row mt-5"> -->
              <!-- <div class="col-6">
                <img
                  class="rounded-circle mb-2"
                  alt="sunlight icon"
                  height="140px"
                  width="140px"
                  src="/svg/sunlight.svg"
                  data-holder-rendered="true"
                />
                <h3>Sunlight</h3>
              </div>
              <div class="col-6 align-self-center" id="sunlight"></div>
            </div> -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 text-center">
            <div class="row mt-5">
              <!-- <div class="col-6">
                <img
                  class="rounded-circle mb-2"
                  alt="watertank icon"
                  height="140px"
                  width="140px"
                  src="/svg/water.svg"
                  data-holder-rendered="true"
                />
                <h3>Tank Water Level</h3>
              </div>
              <div class="col-6 align-self-center" id="waterlevel"></div>
            </div> -->
          </div>
          <div class="col-md-6 text-center">
            <div class="row mt-5">
              <!-- <div class="col-6">
                <img
                  class="rounded-circle mb-2"
                  alt="waterpump icon"
                  height="140px"
                  width="140px"
                  src="/svg/pump.svg"
                  data-holder-rendered="true"
                />
                <h3>Water Pump</h3>
              </div>
              <div class="col-6 align-self-center" id="waterpump"></div>
            </div> -->
          </div>
        </div>
      </div>
      <!-- <div class="container mt-5">
        <div class="row">
          <div class="col-12 mt-5 mb-2 text-center">
            <h2>
              <img
                class="mb-2 mr-3"
                alt="can do icon"
                height="30px"
                width="30px"
                src="svg\cando.svg"
                data-holder-rendered="true"
              />What You can do
            </h2>
          </div>
        </div>
        <div class="row mt-3 mb-5">
          <div class="col-sm-6 col-lg-4 text-center mt-4">
            <div class="card card-button">
              <div class="card-body">
                <p>
                  <a class="btn btn-link stretched-link" href="#"
                    ><img
                      class="mb-2"
                      alt="see status icon"
                      height="140px"
                      width="140px"
                      src="/svg/seestatus.svg"
                      data-holder-rendered="true"
                  /></a>
                </p>
                <h3>View Status</h3>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 text-center mt-4">
            <div class="card card-button">
              <div class="card-body">
                <p>
                  <a class="btn btn-link stretched-link" href="/logs.html"
                    ><img
                      class="mb-2"
                      alt="inspect icon"
                      height="140px"
                      width="140px"
                      src="/svg/inspect.svg"
                      data-holder-rendered="true"
                  /></a>
                </p>
                <h3>Inspect Logs</h3>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 text-center mt-4">
            <div class="card card-button">
              <div class="card-body">
                <p>
                  <a class="btn btn-link stretched-link" href="/graphs.html"
                    ><img
                      class="mb-2"
                      alt="graph icon"
                      height="140px"
                      width="140px"
                      src="/svg/bar.svg"
                      data-holder-rendered="true"
                  /></a>
                </p>
                <h3>Plot Graphs</h3>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 text-center mt-4">
            <div class="card card-button">
              <div class="card-body">
                <p>
                  <a class="btn btn-link stretched-link" href="/graphs.html"
                    ><img
                      class="mb-2"
                      alt="microchip icon"
                      height="140px"
                      width="140px"
                      src="/svg/ai.svg"
                      data-holder-rendered="true"
                  /></a>
                </p>
                <h3>Predict Using AI</h3>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 text-center mt-4">
            <div class="card card-button">
              <div class="card-body">
                <p>
                  <a class="btn btn-link stretched-link" href="/actions.html"
                    ><img
                      class="mb-2"
                      alt="weather station icon"
                      height="140px"
                      width="140px"
                      src="/svg/station.svg"
                      data-holder-rendered="true"
                  /></a>
                </p>
                <h3>Manage Stations</h3>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 text-center mt-4">
            <div class="card card-button">
              <div class="card-body">
                <p>
                  <a class="btn btn-link stretched-link" href="/graphs.html"
                    ><img
                      class="mb-2"
                      alt="reports icon"
                      height="140px"
                      width="140px"
                      src="/svg/report.svg"
                      data-holder-rendered="true"
                  /></a>
                </p>
                <h3>Generate Reports</h3>
              </div>
            </div>
          </div>
        </div>
      </div> -->
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
      src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"
      integrity="sha256-T/f7Sju1ZfNNfBh7skWn0idlCBcI3RwdLSS4/I7NQKQ="
      crossorigin="anonymous"
    ></script>
    <script src="/js/scripts.js"></script>
  </body>
</html>
