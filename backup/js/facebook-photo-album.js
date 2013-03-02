(function ($) {
    "use strict";
    $.fn.facebookPhotoAlbums = function (options) {
      // Create some defaults, extending them with any options that were provided
        var settings = $.extend({
                'appId'            : '189255917781262',
                'channelUrl'       : 'http://rizzonet.com/channel.html',
                'location'         : 'top',
                'background-color' : 'blue'
            }, options);

        function injectFacebook(callback) {
            window.fbAsyncInit = function () {
                // init the FB JS SDK
                FB.init({
                    appId      : settings.appId, // App ID from the App Dashboard
                    channelUrl : settings.channelUrl, // Channel File for x-domain communication
                    status     : true, // check the login status upon init?
                    cookie     : true, // set sessions cookies to allow your server to access the session?
                    xfbml      : true  // parse XFBML tags on this page?
                });

                callback();
            };

        // Load the SDK's source Asynchronously
            (function (d, debug) {
                var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
                if (d.getElementById(id)) {return; }
                js = d.createElement('script'); js.id = id; js.async = true;
                js.src = "http://connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
                ref.parentNode.insertBefore(js, ref);
            }(document, /*debug*/ false));

        }

        function getAlbums(callback) {
            var albumSQL = 'SELECT aid, name, description, cover_pid, modified, like_info'
                + ' FROM album  '
                + ' WHERE owner = ' + settings.ownerId;

            FB.api('/fql', 'GET', {q:albumSQL}, function (response) {
                if (response && response.data) {
                    window.fbpi.albums = response.data;
                    callback();
                }
            });
        }

        function getPics(callback) {
            var sql = 'SELECT pid,owner,aid,src_big,caption'
                + ' FROM photo'
                + ' WHERE aid IN ('
                + ' SELECT aid'
                + ' FROM album'
                + ' WHERE owner = ' + settings.ownerId
                + ' )';

            FB.api('/fql', 'GET', {q:sql}, function (response) {
                if (response && response.data) {
                    window.fbpi.pics = response.data;
                    callback();
                }
            });
        }

        function drawPics(el, aid) {
            var p;
            $(el).html('');
            $(el).before('<div><a href="#" class="backToAlbum">Back</a></div>');

            $('.backToAlbum').on('click', function () {
                $(this).remove();
                drawAlbums(el);
                return false;
            });

            for (p = 0; p < window.fbpi.pics.length; p += 1) {
                if(window.fbpi.pics[p].aid === aid){
                    $(el).append('<li style="background:url(' + window.fbpi.pics[p].src_big + '); background-size:225px 225px;"><a style="display:block; width:225px; height:225px;" title="' + window.fbpi.pics[p].caption + '" href="' + window.fbpi.pics[p].src_big + '">'
                    + '</a></li>');
                }
            }

            $(el).find('a').lightBox();
        }

        function drawAlbums(el) {
            var a, p;
            $(el).html('');
            for (a = 0; a < window.fbpi.albums.length; a += 1) {
                if (window.fbpi.albums[a].cover_pid !== '0') {
                    for (p = 0; p < window.fbpi.pics.length; p += 1) {
                        if (window.fbpi.pics[p].pid === window.fbpi.albums[a].cover_pid) {
                            window.fbpi.albums[a].coverImg = window.fbpi.pics[p].src_big;
                        }
                    }

                    $(el).append('<li><a href="#' + window.fbpi.albums[a].aid + '">'
                      + '<div style="background:url(' + window.fbpi.albums[a].coverImg + '); background-size:225px 225px;">'
                      + '<h3>' + window.fbpi.albums[a].name + '</h3></div>'
                      + '</a></li>');
                } 

                
            }

            $(el).find('a').click(function () {
                drawPics(el, $(this).attr('href').replace('#', ''));
                return false;
            });

        }

        return this.each(function () {
            var el = this;
            window.fbpi = {};
            window.fbpi.albums = [];
            window.fbpi.pics = [];

            injectFacebook(function () {
                getAlbums(function () {
                    getPics(function () {
                        drawAlbums(el);

                        
                    });
                });
            });
        });

    };
}(jQuery));