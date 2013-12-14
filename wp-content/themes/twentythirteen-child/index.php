<?php
/**
 * Template Name: index
 *
 */
get_header(); ?>
	<nav>
		<ul id="nav">
			<li><a id="li1" >home</a></li>
			<li><a id="li2" >Que es Social Drinks</a></li>
			<li><a id="li3" >Reunion</a></li>
			<li><a id="li4" >Contacto</a></li>
		</ul>
		<div class="clear"></div>
	</nav>
	
	<div id="home" class="slide">
			<a name="home"></a>
			<h1>
				<span class="invisible">Social Drinks</span>
				<img src="<?php echo get_template_directory_uri(); ?>-child/images/logo.jpg"/>
			</h1>
	        <div id="video">aca video</div>	
	</div><!--#home-->

	<div id="somos" class="slide" style="background:url(<?php echo get_template_directory_uri(); ?>-child/images/secondBG.jpg) 50% 0 no-repeat fixed;">
		<a name="somos"></a>
		
		<div id="separador" style="background:url(<?php echo get_template_directory_uri(); ?>-child/images/separador.png) repeat-x;"></div>
		
		<?php query_posts('p=82'); ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<div class="galeria">
			<?php query_posts('p=96'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
			<div class="clear"></div>
		</div>
		
	</div> <!--#somos-->
	
	<div id="reunion" class="slide" style="background:url(<?php echo get_template_directory_uri(); ?>-child/images/thirdBG.jpg) 50% 0 no-repeat fixed;">
		<a name="reunion"></a>
		<h2>Reunion</h2>
		<?php query_posts('p=59'); ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
	</div> <!--#reunion-->
	
	<div id="contacto" class="slide">
		<a name="contacto"></a>
		<form>
			<label>Nombre</label><input type="text" value="" required/>
			<label>Email</label><input type="email" value="" required/>
			<label>Mensaje</label><input type="text" value="" required/>
			<input type="submit" value="Enviar"/>
		</form>
	</div> <!--#contacto-->
	<?php get_footer(); ?>
</body>
</html>
