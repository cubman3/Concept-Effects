<?php
include 'includes/header.php';
?>
<script>
$(document).ready(function(){
    $('body').attr('id', 'page1');
});

    (function ($) {
        var url = 'https://api.twitter.com/1/statuses/user_timeline.json?include_entities=true&include_rts=true&screen_name=concepteffects&count=10';
        var weekday = new Array(7);
        weekday[0] = "Sunday";
        weekday[1] = "Monday";
        weekday[2] = "Tuesday";
        weekday[3] = "Wednesday";
        weekday[4] = "Thursday";
        weekday[5] = "Friday";
        weekday[6] = "Saturday";

        $.ajax({
            type: 'GET',
            url: url,
            async: false,
            contentType: "application/json",
            dataType: 'jsonp',
            success: function (d) {

                console.dir(d);
                for (var i = 0; i < d.length; i++) {
                    console.dir(d[i].text);
                    var date = new Date(d[i].created_at);
                    console.log(date);
                    var displayDate = (date.getMonth() + 1) + '/' + date.getDate() + '/' + date.getFullYear();
                    $('#tweets').append('<li>' + displayDate + ' <br />' + processTweetLinks(d[i].text) + '</li>');
                };

            },
            error: function (e) {
                console.log(e.message);
            }
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

    })(jQuery);

</script>



<article class="col-1">
    <h2>News</h2>
    <ul class="list1" id="tweets">
    
    </ul>
</article>

<article class="col-2">
                  <h2>About Us</h2>
               
                  <h5>Concept Effects is available to help you achieve your vision. </h5>
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

<link rel='stylesheet' type='text/css' href='http://wwcdn.weddingwire.com/static/css/wireWidgets.css' /><div class='ww-bca-2013 ww-reset'><a class='ww-bca-top' href='http://www.weddingwire.com' title='Weddings, Wedding Venues'><img src='http://wwcdn.weddingwire.com/static/images/badges/BCA-2013/BCA_2013-badge-top.png' alt='Weddings, Wedding Venues' /></a><a class='ww-bca-bottom' href='http://www.weddingwire.com/reviews/concept-effects-arlington-heights/43016aaceab28d28.html' title="Concept Effects, Best Lighting &amp; Decor in Chicago - 2013 Bride's Choice Award Winner"><img src='http://wwcdn.weddingwire.com/static/images/badges/BCA-2013/BCA_2013-badge-bottom.png' alt="Concept Effects, Best Lighting &amp; Decor in Chicago - 2013 Bride's Choice Award Winner" /></a><div class='ww-clear'>&nbsp;</div></div><img src='//api.weddingwire.com/api/v3/Tracker.gif?target_id=43016aaceab28d28&type=bca_2013&partner_key=163r5mm3' width='1' height='1' />
<br />
<div style="text-align:center;">
<div style='display: block; margin-right:auto; margin-left:auto; width: 74px; font-size: 10px; text-align: center;'><a href='http://www.theknot.com/Vendors/Concept-Effects/Profile/lad/179/378731/Profile'><img src='http://partnerimages.theknot.com/2013/silver_web_70x70.gif' alt='2013 Pick - Best of Weddings on The Knot' border='0' />Concept Effects</a></div>
</div>                 
              </article>


<article class="col-3">
    
<?php
    include 'includes/commentform.php';
?>
<br />
<script type="text/javascript" src="http://wwcdn.weddingwire.com/static/js/widgets/myReviews.js"></script><div id="ww-widget-reviews" class="ww-reset ww-reviews-widget"><div class="ww-reviews-placeholder">Read all of our <a target="_new" href="http://www.weddingwire.com/biz/concept-effects-arlington-heights/43016aaceab28d28.html">Wedding Hair & Makeup, Wedding Catering, Wedding Disc Jockey, Wedding Rentals, Wedding Flowers, Wedding Lighting & Decor, Wedding Photography, Wedding Limousines, Travel, Wedding Videography, Wedding Cake Reviews</a> at <a target="_new" href="http://www.weddingwire.com"><img src="http://wwcdn.weddingwire.com/static/images/logo/WWlogo-83x19.gif" alt="Weddings, Wedding Cakes,  Wedding Planning, Wedding Checklists, Free Wedding Websites, Wedding Dresses, Wedding Ideas & more"/></a></div></div><script type="text/javascript"><!--
WeddingWire.createReview({"vendorId":"43016aaceab28d28", "id":"ww-widget-reviews"});
--></script>
</article>

<?php
    include 'includes/footer.php';
?>