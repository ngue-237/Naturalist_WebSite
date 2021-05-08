<?php 
 require_once '../Controller/contacterC.php';


       
      $error = "";
     $message ="";
    
     
      $visiteurC = new ContactC();

    if(
        isset($_POST['nomC']) &&
        isset($_POST['emailC']) && 
        isset($_POST['sujetC']) && 
        isset($_POST['messageC']) )
    {
        if(

            !empty($_POST['nomC']) && 
            !empty($_POST['emailC']) && 
            !empty($_POST['sujetC']) && 
            !empty($_POST['messageC']) )    
             {

 $visiteur = new Contact(20, $_POST['nomC'], $_POST['emailC'], $_POST['sujetC'], $_POST['messageC'] );



                 $visiteurC->ajouterContact($visiteur);
                 header('Location: index.php');
                 
                              
             }
              else
                   {
                    $error = "Missing information";
                   }
    }                
           
                  

                      



 ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:23:39 GMT -->
<?php include 'head.php'; ?>

<body class="">
	<div class="site-wrapper">
	
<?php include 'header.php'; ?>
					
<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Contact</li>
    </ol>
  </div>
</nav>

<div class="gogle_map section-padding-top">
  <div id="googleMap">

  </div>
</div>
<section class="contact-page-section overflow-hidden">
    <div class="row">
      <div class="col-md-6">
        <div class="ct-single-side">
          <div class="ct-section-title">
            <h2>TELL US YOUR PROJECT</h2>
          </div>
          <form action="" method="post" >
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="text" class="form-control" name="nomC" id="nom"  placeholder="Name..."  required/>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input name="sujetC"  id="sujet" placeholder="Subject..." type="text"  class="form-control" required/>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <input name="emailC" id="email" placeholder="exemple@gmail.com..." type="email" class="form-control" required/>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <textarea name="messageC" id="message" placeholder="Your Message*" style="width: 100%"></textarea>
                </div>
              </div>
              
             
              <div class="submit-btn">
                  <button type="submit" class="btn btn-black">Send Mail</button>
                </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6 bg-gray">
        <div class="ct-single-side">
          <div class="section-title mb--20">
            <h2>CONTACT US</h2>
          </div>
          <div class="contact-right-description">
            <article class="ct-article">
              <h3 class="d-none sr-only">blog-article</h3>
              <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam
                littera
                gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
            </article>
            <ul class="contact-list mb--35">
              <li><i class="fas fa-fax"></i>Address : No 40 Baria Sreet 133/2 NewYork City</li>
              <li><i class="fas fa-phone"></i>0(1234) 567 890</li>
              <li><i class="far fa-envelope"></i>Info@roadthemes.com</li>
            </ul>
            <div class="working-hour">
              <h3>Working hours</h3>
              <p> <strong>Monday – Saturday</strong>: 08AM – 22PM</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

  
  
 <?php include 'footer.php'; ?> 

<script src="js/plugins.js"></script>
<script src="js/ajax-mail.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
<script>
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        
        var mapOptions = { 
            // How zoomed in you want the map to start at (always required)
            zoom: 12,

            scrollwheel: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(23.761226, 90.420766), // New York

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{
                "featureType": "all",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "saturation": 36
                },
                {
                    "color": "#000000"
                },
                {
                    "lightness": 40
                }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "on"
                },
                {
                    "color": "#000000"
                },
                {
                    "lightness": 16
                }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#000000"
                },
                {
                    "lightness": 20
                }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#000000"
                },
                {
                    "lightness": 17
                },
                {
                    "weight": 1.2
                }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#000000"
                },
                {
                    "lightness": 20
                }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#000000"
                },
                {
                    "lightness": 21
                }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#000000"
                },
                {
                    "lightness": 17
                }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#000000"
                },
                {
                    "lightness": 29
                },
                {
                    "weight": 0.2
                }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#000000"
                },
                {
                    "lightness": 18
                }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#000000"
                },
                {
                    "lightness": 16
                }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#000000"
                },
                {
                    "lightness": 19
                }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#000000"
                },
                {
                    "lightness": 17
                }
                ]
            }
            ]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('googleMap');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(23.761226, 90.420766),
            map: map,
            title: 'googlemap!',
            animation: google.maps.Animation.BOUNCE

        });
    }
</script>
<script src="js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:25:02 GMT -->
</html>