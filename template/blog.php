<section class="blog">
	<div class="container">
		<h2 class="text-center">Acompanhe nosso blog</h2>
		<p class="text-center subtitle">Veja nossas notícias e dicas</p>

		<div class="owl-carousel blog owl-theme">
			
			<?php
				$posts = json_decode(file_get_contents('http://centtran.com.br/blog/wp-json/wp/v2/posts?per_page=3'));
				foreach ( $posts as $post ):
								
			?>
			<div class="item">
				<div class="card">
					<?php
						$day = date('j', strtotime($post->date_gmt));
 						$month = date('F', strtotime($post->date_gmt));

					?>
					<div class="date">
						<span class="day"><?php echo $day; ?></span> 
						<span class="month"><?php echo $month ?></span>
					</div>
					<div class="thumb">
						<?php
							if($post->featured_media > 0):	
								$media = json_decode(file_get_contents('http://centtran.com.br/blog/wp-json/wp/v2/media/'.$post->featured_media));	
								echo '<img src="'.$media->source_url.'">';
							else:
								echo '<img src=""';
							endif;
						?>
					</div>
					<div class="actions">
						<h3><?php echo $post->title->rendered ?></h3>
						<p><?php echo $post->excerpt->rendered; ?></p>
						<a href="<?php echo $post->link ?>"  target="_blank"><button class="btn">Leia mais</button></a>
 					</div>
				</div>
			</div>

			<?php endforeach; ?>
		</div>

		<script>
			$('.owl-carousel.blog').owlCarousel({
			    margin:0,
			    nav:false,
			    
			    responsive : {
				    0 : {
				    	items:1,
				    },
				    768 : {
						items:2,
				    }	
				}
			})
		</script>
	</div>
</section>