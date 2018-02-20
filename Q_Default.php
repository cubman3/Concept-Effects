<?php
$page_name = '';
include 'includes/header.php'; $page_name = '- ';
include 'config.php';

require_once('twitteroauth/twitteroauth.php');

/* Create a TwitterOauth object with consumer/user tokens. */
$connection = new TwitterOAuth(TWITTER_CONSUMER_KEY, TWITTER_CONSUMER_SECRET);

/* If method is set change API call made. Test is called by default. */
$content = $connection->get('statuses/user_timeline', array('screen_name' => 'concepteffects', 'count' => 10));


?>
<script>
    $(document).ready(function() {
         $('#tweets li').each(function() {
            $(this).find('p').html(processTweetLinks($(this).find('p').html()));
        })
    });

    function processTweetLinks(text) {
        var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/i;
        text = text.replace(exp, "<a href='$1' target='_blank'>$1</a>");
        exp = /(^|\s)#(\w+)/g;
        text = text.replace(exp, "$1<a href='http://search.twitter.com/search?q=%23$2' target='_blank'>#$2</a>");
        exp = /(^|\s)@(\w+)/g;
        text = text.replace(exp, "$1<a href='http://www.twitter.com/$2' target='_blank'>@$2</a>");
        return text;
    }
</script>

<div class="row">
    <div id="content" class="8u 12u(mobile)">
        <!-- Post -->
        <article class="box post">
            <header>
                <h2>About Us</h2>
            </header>
            <h3>Concept Effects is available to help you achieve your vision.</h3>
            <p>Whether you
                are a lighting designer, corporate planner, production manager, event
                planner, wedding planner, concert promoter, private planner, fashion show
                designer or entertainment industry planner, Concept Effects is here to help
                you.</p>

                <p>Clients are encouraged to express their vision and work with our designers
                to come up with their ideal event. Our goal is to provide personal and
                professional consultation to help you get everything you need to make your
                event stand out and to work hand in hand with our clients and turn their
                event into a 5 star celebration.</p>

                <p>We understand that your visions come with a price; therefore, we work
                within your budget to help create a memorable event. We provide an
                opportunity for your dreams to come true. Whether you are a corporate
                representative looking to showcase a product for an event, a bride who
                wants a dream wedding, or even a theater director planning a show or an
                event, we can assist you in any way. No budget is too small and no event is
                too big.</p>

   <!--          <div id='ww-widget-wwaward-2015'>
                <a id="weddingwire1" href="http://www.weddingwire.com" title="WeddingWire" target="_blank"/>
                <a id="weddingwire2" href="http://www.weddingwire.com/reviews/concept-effects-arlington-heights/43016aaceab28d28.html" title="Concept Effects Reviews, Best Lighting &amp; Decor in Chicago - 2015 Couples&#39; Choice Award Winner"/>
            </div> -->

            <script src='//www.weddingwire.com/assets/vendor/widgets/ww-rated-2013.js' type='application/javascript'></script>
            <div id='ww-widget-wwrated-2013'>
                <a class="ww-top" href="https://www.weddingwire.com" target="_blank" title="Weddings, Wedding, Wedding Venues"></a>
                <a class="ww-bottom" href="https://www.weddingwire.com/reviews/concept-effects-arlington-heights/43016aaceab28d28.html" target="_blank" title="Concept Effects Reviews, Chicago, Rockford, South Bend Lighting &amp; Decor"></a>
            </div>
            <script> WeddingWire.ensureInit(function() {WeddingWire.createWWRated2013({"vendorId":"43016aaceab28d28" }); });</script>

            <script type="text/javascript" src="http://wwcdn.weddingwire.com/static/js/widgets/myReviews.js"></script>
            <div id="ww-widget-reviews" class="ww-reset ww-reviews-widget">
                <div class="ww-reviews-placeholder">Read all of our <a target="_new" href="http://www.weddingwire.com/biz/concept-effects-arlington-heights/43016aaceab28d28.html">Wedding Hair &amp; Makeup, Wedding Catering, Wedding Disc Jockey, Wedding Rentals, Wedding Flowers, Wedding Lighting &amp; Decor, Wedding Photography, Wedding Limousines, Travel, Wedding Videography, Wedding Cake Reviews</a> at <a target="_new" href="http://www.weddingwire.com"><img src="http://wwcdn.weddingwire.com/static/images/logo/WWlogo-83x19.gif" alt="Weddings, Wedding Cakes,  Wedding Planning, Wedding Checklists, Free Wedding Websites, Wedding Dresses, Wedding Ideas & more"/></a>
                </div>
            </div>
            <script type="text/javascript">
            WeddingWire.createReview({"vendorId":"43016aaceab28d28", "id":"ww-widget-reviews"});
            </script>
        </article>

        <!--<link href='//www.weddingwire.com/assets/global/widget.css' rel='stylesheet' type='text/css'>
        
        <div id="weddingwirewrapper">
            <div id="weddingwire">
                <a id="weddingwire1" href="http://www.weddingwire.com" title="WeddingWire">
                    <img alt="WeddingWire" src="//www.weddingwire.com/assets/badges/BCA-2015/BCA_2015-badge-top.png" />
                </a>
                <a id="weddingwire2" href="http://www.weddingwire.com/reviews/concept-effects-arlington-heights/43016aaceab28d28.html" title="Concept Effects Reviews, Best Lighting &amp; Decor in Chicago - 2015 Couples&#39; Choice Award Winner">
                    <img alt="Concept Effects Reviews, Best Lighting &amp; Decor in Chicago - 2015 Couples&#39; Choice Award Winner" src="//www.weddingwire.com/assets/badges/BCA-2015/BCA_2015-badge-bottom.png" />
                </a>
            </div>
        </div>
        -->

        

    </div>
    <div id="sidebar" class="4u 12u(mobile)">
        <section>
            <ul class="divided" id="tweets">
                <?php 

                  foreach ( $content as $tweet ) {
                    $formattedDate = date("F j", strtotime($tweet->created_at));
                    echo "<li><article class='box excerpt'>";
                    echo "<header><span class='date'>$formattedDate</span></header>";
                    echo "<p>$tweet->text</p>";
                    echo "</article></li>";
                  }
                ?> 
            </ul>
        </section>
    </div>
</div>




<?php
    include 'includes/footer.php';
?>