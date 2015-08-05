<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>

<!DOCTYPE html>
<html>
<head>
<style>

</style>
	
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	
	
	
	<?php
		echo $this->Html->meta('icon');

		
		//echo $this->Html->css('bootstrap-responsive.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		echo $this->Html->css(array('bootstrap.min','bootstrap-responsive.min','custom'));
		echo $this->Html->script(array('jquery-2.1.1','bootstrap.min'));
	?>
	

</head> 
<body>
	<div id="container">
		<div id="header">
			<div id="headdemo">
			<H2>
				Header
				
			</H2>
			<div class="navbar">
				<li class="menu-bar active">

					<a href="#" >HOME</a></li>
					<li class="menu-bar">

					<a href="#" >HTML</a></li>
											
					<li class="menu-bar">
					<a href="#">CSS</a> </li>
					<li class="menu-bar">

					<a href="#" >PHP</a></li>

					<li class="menu-bar">
					<a href="#">JAVASCRIPT</a> 
					</li>
					<li class="menu-bar">
					<a href="#">JQUERY</a>
					</li>
					<li class="menu-bar">
					<a href="#">SQL</a>
					</li>
					<li class="menu-bar">
					<a href="#">PHP FRAMEWORK</a>
					</li>
					<li class="menu-bar">
					<a href="#">XML</a>
					</li>					
					<li class="menu-bar">
					<a href="#">EXAMPLES</a>
					</li>
					<li class="menu-bar">
					<a href="#">OTHERS</a>
					</li>
                </div>
			</div>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<footer>
        <ul>
            <li>
                <div class="icon" data-icon="E"></div>
                <div class="text">
                    <h4>About</h4>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique justo eu sollicitudin pretium. Nam scelerisque arcu at dui porttitor, non viverra sapien pretium. Nunc nec dignissim nunc. Sed eget est purus. Sed convallis, metus in dictum feugiat, odio orci rhoncus metus. <a href="#">Read more</a></div>
                </div>
            </li>
            <li>
                <div class="icon" data-icon="a"></div>
                <div class="text">
                    <h4>Archive</h4>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique justo eu sollicitudin pretium. Nam scelerisque arcu at dui porttitor, non viverra sapien pretium. Nunc nec dignissim nunc. Sed eget est purus. Sed convallis, metus in dictum feugiat, odio orci rhoncus metus. <a href="#">Read more</a></div>
                </div>
            </li>
            <li>
                <div class="icon" data-icon="s"></div>
                <div class="text">
                    <h4>Cloud</h4>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique justo eu sollicitudin pretium. Nam scelerisque arcu at dui porttitor, non viverra sapien pretium. Nunc nec dignissim nunc. Sed eget est purus. Sed convallis, metus in dictum feugiat, odio orci rhoncus metus. <a href="#">Read more</a></div>
                </div>
            </li>
        </ul>     
        </div>
    </footer>
	</div>
	
	
	<?php //echo $this->element('sql_dump'); ?>
	<SCRIPT>
$(document).ready(function() {

	var div = $('#headdemo');
	var start = $(div).offset().top;

	$.event.add(window, "scroll", function() {
		var p = $(window).scrollTop();
		$(div).css('position',((p)>start) ? 'fixed' : 'static');
		$(div).css('top',((p)>start) ? '0px' : '');
	});

});

</SCRIPT>
</body>
</html>
