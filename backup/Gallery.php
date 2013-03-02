
<?php
include 'includes/header.php'; $page_name = '- '
?>

<style>
	

	.fb {
		padding:0px;
		margin:0px;
	}

	.fb a, .backToAlbum {
		text-decoration:none;
		color:#fff;
	}

	.fb li {
		width:200px;
		height:200px;
		float:left;
		overflow:hidden;
		border:solid #666 1px;
		margin:5px;

		border-radius:5px;
	}

	.fb li div{
		width:225px;
		height:225px;
		background-size:225px 225px;
		padding:3px;
	}

	.fb h3 {
		margin:0px;
		padding:0px;
		color:#fff;
		text-shadow: 2px 2px 2px #000;
	}
</style>


<article class="col-1" style="width: 1000px;">
    <h2>Gallery</h2>

    <div style="margin-left:20px;">
    <script>

	$(document).ready(function(){
		$('#verLine').removeClass('line-ver1');
		$('ul.fb').facebookPhotoAlbums({
			appId : '52528597048',
			channelUrl : 'http://rizzonet.com/channel.html',
			ownerId: 297603655710
		});	

		//189255917781262
		//297603655710


	})

	</script>

	<ul class="fb">
	</ul>
	<div style="clear:both;"></div>
</div>
</article>


<?php
include 'includes/footer.php';
?>