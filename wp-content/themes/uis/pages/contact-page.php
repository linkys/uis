<?php
/*
 Template Name: Contact Page
*/

global $post;


get_header(); ?>

    <!-- MAP -->
    <div class="map-wrap">
        <div id="map"></div>
    </div>
    <!-- MAP END -->

    <!-- CONTACT US -->
    <div class="contact-us">
        <div class="container">
            <h1 class="text-left">Contact us</h1>
            <div class="contact-wrap clearfix">
                <div class="contact-col">
                    <div class="contact-block">
                        <p class="contact-title">Address</p>
                        <div class="contact-text">
                            1066 West Hastings st, <br/>
                            Vancouver, BC V6E 3X2 <br/>
                            British Columbia <br/>
                            Canada
                        </div>
                    </div>
                    <div class="contact-block">
                        <p class="contact-title">Phones</p>
                        <div class="contact-text">
                            <a href="tel:5551232323">555-123-2323</a>;
                            <a href="tel:5551232323">555-123-2323</a>
                        </div>
                    </div>
                    <div class="contact-block">
                        <p class="contact-title">E-mail</p>
                        <div class="contact-text">
                            <a href="mailto:bedentist@demolink.org">bedentist@demolink.org</a>
                        </div>
                    </div>
                </div>
                <div class="contact-col">
                    <div class="contact-block contact-form">
                        <form>
                            <p class="contact-title">Contacts form</p>
                            <p class="contact-subtitle">If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
                            <div class="form-group">
                                <input type="text" class="form-text" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-text" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-text" placeholder="Phone number">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-text" placeholder="Country">
                            </div>
                            <div class="form-group m-4">
                                <button class="button">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT US END -->

    <script>
        function initMap() {
            var uis = {lat: 40.726030, lng: -73.998227};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: uis
            });

            var contentString =
                '<div class="map-info">'+
                '<div class="map-block">'+
                '<div class="map-label"><strong>Addres</strong></div>'+
                '<div class="map-text">22 St. Black Road Orlanndo, PL 3457</div>'+
                '</div>'+

                '<div class="map-block">'+
                '<div class="map-label"><strong>Phone</strong></div>'+
                '<div class="map-text">555-123-2323; 555-123-2323</div>'+
                '</div>'+
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            var image = '<?php echo get_template_directory_uri() ?>/img/assets/location.png';

            var marker = new google.maps.Marker({
                position: uis,
                map: map,
                title: 'Universal Immigration Services',
                icon: image
            });

            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALrLa9ZPT8xQRuhWbnOSvI9m7jzVH_4jU&callback=initMap">
    </script>

<?php get_footer(); ?>