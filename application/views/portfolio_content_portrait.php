<section id="gallery">
	<div class="pnav">
		<ul>
			<li><a href="/clairejonesphotography/home/portfolio">NATURE<span class="divider">|<span></a></li>
			<li><a href="/clairejonesphotography/home/wildlife">WILD-LIFE<span class="divider">|<span></a></li>
			<li><a href="/clairejonesphotography/home/wedding">WEDDING<span class="divider">|<span></a></li>
			<li><a href="#" class="active">PORTRAITS<span class="divider">|<span></a></li>
			<li><a href="/clairejonesphotography/home/landscape">LANDSCAPE</a></li>
		</ul>
	</div>
	<div class="pagnav">
		<ul class="pag_nav">
			<li><?php echo $links; ?></li>
		</ul>
	</div>
	
	<span class="lobster offwhite">Portfolio</span>
		<div>
		<?php
			foreach($results as $data) { ?>
			<div class="img">
  			<a target="_blank" href="#">
  			<img src="<?php echo $data->url; ?>" alt="<?php echo $data->title ?>" width="300" height="130">
  			</a>
  			<h4><?php echo $data->title ?></h4>
		  	<div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a massa at lorem rutrum ultrices vitae vel elit. Nullam lacus mi, convallis vitae pretium eget, tincidunt </div>
		</div>
		
		<?php }; ?>
	</section>
	<div class="transbox"></div>
	<section id="subfooter">
		<div>
			<h4>SUB HEADER</h4>
			<p>Lorem ipsum dolor sit amet, consecttur adipiscing elit. Pellentesque a massa at lorem rutrum ultrices vitae vel elit. Nullam lacus mi, convallis vitae d</p>
		</div>
		<div>
			<h4>SUB HEADER</h4>
			<p>Lorem ipsum dolor sit amet, consecttur adipiscing elit. Pellentesque a
			massa at lorem rutrum ultrices vitae vel elit. Nullam lacus mi, convallis vitae d</p>
			<p>Lorem ipsum dolor sit amet, consecttur adipiscing elit.</p>
		</div>
		<div>
			<h4>SUB HEADER</h4>
				<ul>
					<li> - Wildlife</li>
					<li> - Nature</li>
					<li> - Portraits</li>
					<li> - Weddings</li>
					<li> - Still-Life</li>
				</ul>
		</div>
	</section>