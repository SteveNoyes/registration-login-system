<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
		<title>Home Page</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
      /* Nav Start */
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      /* Nav End */
      /* Raffle Draw Start */
      .value {
        font-size: 50px;
      }
      /* Raffle Draw End */
      /* Prizes Start */
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      /* Prizes End */
      /* Footer Start */
      .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
        .b-example-divider {
          height: 3rem;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }
        .bi {
          vertical-align: -.125em;
          fill: currentColor;
        }
        .nav-scroller {
          position: relative;
          z-index: 2;
          height: 2.75rem;
          overflow-y: hidden;
        }
        .nav-scroller .nav {
          display: flex;
          flex-wrap: nowrap;
          padding-bottom: 1rem;
          margin-top: -1px;
          overflow-x: auto;
          text-align: center;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
        }
        .selectBtn {
          padding: 1rem;
          background-color: lightgray;
          border-radius: 8px;
          box-shadow: 1px 4px 10px lightgray;
          transition: all .2s ease-in-out; 
        }
        .selectBtn:hover {
          cursor: pointer;
          transform: scale(1.1); 
        }
        /* input {
          display: none;
        }         */
    </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body class="loggedin">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="bootstrap" viewbox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
      </symbol>
    </svg>
    <?php include('nav.php') ?>
    <main>
      <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Company Raffle</h1>
            <p class="lead text-muted">Make your selection below and then submit down at the bottom. You have 14 tickets that can be placed with whatever prize you want.</p>
          </div>
        </div>
      </section>




      <div class="album py-5 bg-light">

        <form action="ticketSubmit.php" method="post">
          
        <div class="container">
          <div id="row0" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <div class="col">
              <div class="card shadow-sm">
                <img src="https://via.placeholder.com/225" alt="">
                <!-- <img src="./images/sq.jpg" width="225" alt=""> -->
                <div class="card-body">
                  <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum officiis accusantium maxime reiciendis aspernatur nihil ipsum ipsa.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="selectBtn" onclick="dec0()" id="dec">-</p>
                    <div id="counter0">0</div>
                    <p class="selectBtn" onclick="inc0()" id="inc">+</p>
                    <input type="number" id="prizeOne" value="0">
                  </div>
                </div>
              </div>
            </div> 



            <div class="col">
              <div class="card shadow-sm">
                <img src="https://via.placeholder.com/225" alt="">
                <!-- <img src="./images/sq.jpg" width="225" alt=""> -->
                <div class="card-body">
                  <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum officiis accusantium maxime reiciendis aspernatur nihil ipsum ipsa.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p>Main Counter: <span id="mainCount">0</span></p>
                    <p>Prize One Local Counter: <span id="p1local">0</span></p>
                    <p>Prize Two Local Counter: <span id="p2local">0</span></p>
                  </div>
                </div>
              </div>
            </div> 

           
            <div class="col">
              <div class="card shadow-sm">
                <img src="https://via.placeholder.com/225" alt="">
                <div class="card-body">
                  <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum officiis accusantium maxime reiciendis aspernatur nihil ipsum ipsa.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="selectBtn" onclick="dec1()" id="dec">-</p>
                    <div id="counter2">0</div>
                    <p class="selectBtn" onclick="inc1()" id="inc">+</p>
                    <input type="number" id="prizeTwo" value="0">
                  </div>
                </div>
              </div>
            </div> 

          </div>
        </div>

      </div>






      <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Company Raffle</h1>
            <p class="lead text-muted">Submit your selection below.</p>
            
              <input style="display: inline;" type="submit" value="Submit Tickets">
            </form>
          </div>
        </div>
      </section>
    </main>
    <?php include('footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="./app.js"></script>
	</body>
</html>