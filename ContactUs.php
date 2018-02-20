<?php
$page_name = 'Contact Us - ';
include 'includes/header.php'; $page_name = '- ';
?>

<section>
	<div class="container">

		<div class="row">
	        <div class="col-sm">
	    		<h1 class="text-center">Contact Us</h1>
	        </div>
	    </div>

	    <div class="row">
	        <div class="col-sm">
	    		
				<form>

					<div class="form-row">
						<div class="form-group col-md-6">
							<input type="text" class="form-control" id="inputEmail4" placeholder="Name">
						</div>
						<div class="form-group col-md-6">
							<input type="email" class="form-control" id="inputPassword4" placeholder="Email">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<input type="text" class="form-control" id="inputEmail4" placeholder="Phone">
						</div>
						<div class="form-group col-md-6">
							<input type="email" class="form-control" id="inputPassword4" placeholder="Date Of Event">
						</div>
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="inputAddress" placeholder="Where did you find us">
					</div>

					<div class="form-group">
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
					</div>

					<div class="text-right">
						<button type="submit" class="btn btn-primary">Send Message</button>
					</div>
				</form>


	        </div>
	        <div class="col-sm">

	    		<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phaselamet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada.</p>

				<div itemscope itemtype="http://schema.org/Organization">
				  <span itemprop="name">Concept Effects</span>

				  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				      <span itemprop="streetAddress">126 E Wing St</span><br />
				      <span itemprop="addressLocality">Arlington Heights, IL</span> 
				      <span itemprop="postalCode">60004</span><br /><br />
				     

				  </div>
				    Tel: <span itemprop="telephone">(847) 878-5366</span>,<br />
				    Fax: <span itemprop="faxNumber">(847) 427-0022</span>,<br />
				    E-mail: <span itemprop="email">info@concepteffects.com</span>
				</div>

	        </div>
	    </div>

	</div>
</section>

<?php
    include 'includes/footer.php';
?>