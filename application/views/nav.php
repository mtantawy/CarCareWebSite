<?php

$home = ($page == 'home') ? 'class="active"' : '';
$about = ($page == 'about') ? 'class="active"' : '';
$services = ($page == 'services') ? 'class="active"' : '';
$products = ($page == 'products') ? 'class="active"' : '';
$offers = ($page == 'offers') ? 'class="active"' : '';
$franchise = ($page == 'franchise') ? 'class="active"' : '';
$contact = ($page == 'contact') ? 'class="active"' : '';

?>
      <nav class="navbar navbar-default mynav" role="navigation">
        <div class="container-fluid">
          <ul class="nav navbar-nav mynavlinks">
            <li <?php echo $home; ?>><a href="/">Home</a></li> 
            <li <?php echo $about; ?>><a href="/about">About Detailer's</a></li> 
            <li <?php echo $services; ?>><a href="/services">Services</a></li> 
            <li <?php echo $products; ?>><a href="/products">Products</a></li> 
            <li <?php echo $offers; ?>><a href="/offers">Offers</a></li> 
            <li <?php echo $franchise; ?>><a href="/franchise">Franchising!</a></li>
            <li <?php echo $contact; ?>><a href="/contact">Contact</a></li>
          </ul>
        </div>
      </nav>