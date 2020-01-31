<?php include_once("header.php");?>   <!--Chama a o header.php ou seja o cabeçalho--> 

<link rel="stylesheet" href="lib/plyr/dist/plyr.css">

<section>
	
	<div id="call-to-action">
		
		<div class="container">

			<div class="row text-center">
				<h2>Videos</h2>
				<hr>	
			</div>

			<div class="row">	<!--começo do carrossel -->			
				<div class="player">
					<video src="mp4/v1.mp4" controls poster="img/img_videos/test.jpg">						
						<track kind="subtitles" label="Português (Brasil)" src="vtt/legendas.vtt" srclang="pt-br" default>
					</video>
				</div>
				<input type="range" id="volume" min="0" max="1" step="0.01" value="1">
				<button type="button" id="btn-play-pause" class="btn btn-success">PLAY</button>
			</div>

		</div>

	</div>

	<div id="news" class="container" style="top:0">
		
		<div class="row text-center">
			<h2>Proximos videos</h2>
			<hr>	
		</div>				

		<div class="row thumbnails">
			<div class="item" data-video="v1"> <!--data-video coloca o video a ser tocado-->	
				<div class="item-inner">
					<img src="img/img_videos/test.jpg" alt="Noticia">
					<h3>Video 1</h3>
				</div>
			</div>
			<div class="item" data-video="v2"><!--data-video coloca o video a ser tocado-->	
				<div class="item-inner">
					<img src="img/img_videos/test2.jpg" alt="Noticia">
					<h3>Video 2</h3>
				</div>
			</div>
			<div class="item" data-video="v1"> <!--data-video coloca o video a ser tocado-->	
				<div class="item-inner">
					<img src="img/img_videos/test.jpg" alt="Noticia">
					<h3>Video 3</h3>
				</div>
			</div>
			<div class="item" data-video="v2"><!--data-video coloca o video a ser tocado-->	
				<div class="item-inner">
					<img src="img/img_videos/test2.jpg" alt="Noticia">
					<h3>video 4</h3>
				</div>
			</div>


			<div class="item" data-video="v1"> <!--data-video coloca o video a ser tocado-->	
				<div class="item-inner">
					<img src="img/img_videos/test.jpg" alt="Noticia">
					<h3>Video 5</h3>
				</div>
			</div>

		</div>

	</div>

</section>

<?php include_once("footer.php");?>  <!--Coloca o rodapé aqui-->	

<script src="lib/plyr/dist/plyr.js"></script>
<script>
(function(d, p){
    var a = new XMLHttpRequest(),
        b = d.body;
    a.open("GET", p, true);
    a.send();
    a.onload = function(){
        var c = d.createElement("div");
        c.style.display = "none";
        c.innerHTML = a.responseText;
        b.insertBefore(c, b.childNodes[0]);
    }
})(document, "lib/plyr/dist/sprite.svg");
</script>
<script>
$(function(){

	$(".thumbnails .item").on("click", function(){

		$("video").attr({
			"src":"mp4/"+$(this).data('video')+".mp4",
			"poster":"img/"+$(this).data('video')+".jpg"
		});

	});

	$("#volume").on("mousemove", function(){

		$("video")[0].volume = parseFloat($(this).val());

	});

	$("#btn-play-pause").on("click", function(){

		

		var video = $("video")[0];

		if ($(this).hasClass("btn-success")) {
			$(this).text("STOP");
			video.play();
		} else {
			$(this).text("PLAY");
			video.pause();
		}

		$(this).toggleClass("btn-success btn-danger");

	});

	plyr.setup();//Disparando player PLYR

});
</script>