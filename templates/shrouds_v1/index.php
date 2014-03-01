<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');
$doc->addScript('templates/' .$this->template. '/js/template.js');

// Add Stylesheets
//$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');

// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);

// Add current user information
$user = JFactory::getUser();

// Adjusting content width
if ($this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = "span6";
}
elseif ($this->countModules('position-7') && !$this->countModules('position-8'))
{
	$span = "span9";
}
elseif (!$this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = "span9";
}
else
{
	$span = "span12";
}

// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="'. JUri::root() . $this->params->get('logoFile') .'" alt="'. $sitename .'" />';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="'. $sitename .'">'. htmlspecialchars($this->params->get('sitetitle')) .'</span>';
}
else
{
	$logo = '<span class="site-title" title="'. $sitename .'">'. $sitename .'</span>';
}
?>


<!DOCTYPE html>
<html><head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<jdoc:include type="head" />
    
    <link href="templates/<?php echo $this->template; ?>/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="templates/<?php echo $this->template; ?>/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- // IE  // -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
    
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,900,700italic,300italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	
	<script src="templates/<?php echo $this->template; ?>/js/jquery.isotope.min.js" type="text/javascript"></script>
	<script src="templates/<?php echo $this->template; ?>/js/sorting.js" type="text/javascript"></script>
	<script src="templates/<?php echo $this->template; ?>/js/sorting_events.js" type="text/javascript"></script>
	
	<script src="templates/<?php echo $this->template; ?>/js/jquery.stellar.min.js" type="text/javascript"></script>
	
	<script src="templates/<?php echo $this->template; ?>/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	
	<script src="templates/<?php echo $this->template; ?>/js/jcarousellite_1.0.1.min.js" type="text/javascript"></script>
	
    <script src="templates/<?php echo $this->template; ?>/js/myscript.js" type="text/javascript"></script>
</head>
<body class="site <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($params->get('fluidContainer') ? ' fluid' : '');
?>">
    <!-- #page -->
    <div id="page">
        <!-- header section -->
        <section id="top">
            <header>
                <div class="container">
                    <div id="logo"><a href="index.html" alt="">Shrouds Photography</a></div>
					<nav class="navmenu">
                        <ul>
                            <li class="active first"><a href="#top">Home</a></li>
                            <li><a href="#about">About</a></li>
							<li class="center_menu_item"><a href="#services">Services</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#events">Events</a></li>
                            <li class="last"><a href="#contact">Contact</a></li>
                        </ul>
                    </nav><!-- end nav -->
                </div><!-- end .container -->
            </header>
        </section><!-- //header section -->
            
        <!-- home content -->
        <section class="page_section parallax_effect" id="home" data-stellar-background-ratio="0.5" style="background-image:url(http://shroudsphotography.com/images/homepage-heroes/11877208826_18685199c9_b.jpg);">
			<div class="container">
				<div class="welcome_block">
					<h1>Shrouds Photography</h1></br>
					<p>A Los Angeles Based Freelance Photographer &amp; Videographer</p>
				</div>
				<a href="#about" class="down_btn"></a>
			</div>
			<div class="home_gradient"></div>
        </section>       

        <!-- about content-->
        <section class="page_section" id="about">
            <!-- section header -->
			<div class="container">
				<h2>About</h2>
			</div>
            <!-- //section header -->
            
            <!-- section content -->
            <div class="content_section container">
                <div class="row">
                	<div class="span6">
						<p>Aenean sagittis tortor quis nisl aliquet at rutrum nisi posuere. Ut sollicitudin congue orci sed aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et. Morbi rutrum, elit ac fermentum egestas, tortor ante vestibulum est, eget scelerisque nisl velit eget tellus. Fusce porta facilisis luctus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et.</p>
						<p>Integer neque dolor, rhoncus nec euismod eget, pharetra et tortor. Nulla id pulvinar nunc. Vestibulum auctor nisl vel lectus ullamcorper sed pellentesque dolor eleifend. Praesent lobortis magna vel diam mattis sagittis. Integer neque dolor, rhoncus nec euismod eget, pharetra et tortor. Nulla id pulvinar nunc. Vestibulum auctor nisl vel lectus ullamcorper sed pellentesque dolor eleifend. Praesent lobortis magna vel diam mattis sagittis. Integer neque dolor, rhoncus nec euismod eget, pharetra et tortor. Nulla id pulvinar nunc. Vestibulum auctor nisl vel lectus ullamcorper sed pellentesque dolor eleifend. Praesent lobortis magna vel diam mattis sagittis.</p>
					</div>
					<div class="span6">
						<p>Aenean sagittis tortor quis nisl aliquet at rutrum nisi posuere. Ut sollicitudin congue orci sed aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et. Morbi rutrum, elit ac fermentum egestas, tortor ante vestibulum est, eget scelerisque nisl velit eget tellus. Fusce porta facilisis luctus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et.</p>
						<p>Integer neque dolor, rhoncus nec euismod eget, pharetra et tortor. Nulla id pulvinar nunc. Vestibulum auctor nisl vel lectus ullamcorper sed pellentesque dolor eleifend. Praesent lobortis magna vel diam mattis sagittis. Integer neque dolor, rhoncus nec euismod eget, pharetra et tortor. Nulla id pulvinar nunc. Vestibulum auctor nisl vel lectus ullamcorper sed pellentesque dolor eleifend. Praesent lobortis magna vel diam mattis sagittis. Integer neque dolor, rhoncus nec euismod eget, pharetra et tortor. Nulla id pulvinar nunc. Vestibulum auctor nisl vel lectus ullamcorper sed pellentesque dolor eleifend. Praesent lobortis magna vel diam mattis sagittis.</p>
					</div>
					<div class="clear"></div>
                </div>
            </div>
            <!-- //section content -->
        </section>
		
		<!-- Services content-->
        <section class="page_section" id="services">
			<div class="parallax_effect" data-stellar-background-ratio="0.5">
				<!-- section header -->
				<div class="container">
					<h2>Services</h2>
				</div>
				<!-- //section header -->
				
				<!-- section content -->
				<div class="content_section container">
					<div class="row services_block">
						<div class="span3">
							<a class="services_item" href="javascript:void(0);" alt="">
								<div class="icon_block"><img src="templates/<?php echo $this->template; ?>/images/icon1.png" alt="" /></div>
								<p>Wedding</p>
								Aenean sagittis tortor quis nisl aliquet at rutrum nisi posuere. Ut sollicitudin
							</a>
						</div>
						<div class="span3">
							<a class="services_item" href="javascript:void(0);" alt="">
								<div class="icon_block"><img src="templates/<?php echo $this->template; ?>/images/icon2.png" alt="" /></div>
								<p>Portrait</p>
								Aenean sagittis tortor quis nisl aliquet at rutrum nisi posuere. Ut sollicitudin
							</a>
						</div>
						<div class="span3">
							<a class="services_item" href="javascript:void(0);" alt="">
								<div class="icon_block"><img src="templates/<?php echo $this->template; ?>/images/icon3.png" alt="" /></div>
								<p>Nature</p>
								Aenean sagittis tortor quis nisl aliquet at rutrum nisi posuere. Ut sollicitudin
							</a>
						</div>
						<div class="span3">
							<a class="services_item" href="javascript:void(0);" alt="">
								<div class="icon_block"><img src="templates/<?php echo $this->template; ?>/images/icon4.png" alt="" /></div>
								<p>Fashion</p>
								Aenean sagittis tortor quis nisl aliquet at rutrum nisi posuere. Ut sollicitudin
							</a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- //section content -->
				<div class="home_gradient"></div>
			</div>
        </section>

        <!-- porfolio content-->
        <section class="page_section" id="portfolio">
            <!-- section header -->
			<div class="container">
				<h2>Portfolio</h2>
			</div><!-- //section header -->
            <!-- section content -->
            <div class="content_section">
				<div class="container">
					<div id="options">
						<ul id="filter" class="option-set" data-option-key="filter">
							<li><a href="#filter" data-option-value="*" class="selected">All</a></li>
							<li><a href="#filter" data-option-value=".wedding">Wedding</a></li>
							<li><a href="#filter" data-option-value=".kids">Kids</a></li>
							<li><a href="#filter" data-option-value=".fashion">Fashion</a></li>
							<li><a href="#filter" data-option-value=".city">City</a></li>
							<li><a href="#filter" data-option-value=".nature">Nature</a></li>
						</ul>
						<div class="clear"></div>
					</div><!-- .filter_block -->
					<div class="row projects portfolio_block">
						<div class="element span4 wedding">
							<div class="portfolio_item">
								<div class="hover_img">
									<img src="templates/<?php echo $this->template; ?>/images/projects/1.jpg" alt="" />
								</div>
								<div class="description">
									<div class="description_in">
										<p>Mauris elementum</p>
										<span>Lorem ipsum dolor sit</span>
										<a class="zoom" href="images/projects/1.jpg" rel="prettyPhoto[portfolio1]">Open</a>
									</div>
								</div>
							</div>
						</div>
						<div class="element span4 Kids">
							<div class="portfolio_item">
								<div class="hover_img">
									<img src="templates/<?php echo $this->template; ?>/images/projects/2.jpg" alt="" />
								</div>
								<div class="description">
									<div class="description_in">
										<p>Mauris elementum</p>
										<span>Lorem ipsum dolor sit</span>
										<a class="zoom" href="images/projects/2.jpg" rel="prettyPhoto[portfolio1]">Open</a>
									</div>
								</div>
							</div>
						</div>
						<div class="element span4 fashion">
							<div class="portfolio_item">
								<div class="hover_img">
									<img src="templates/<?php echo $this->template; ?>/images/projects/3.jpg" alt="" />
								</div>
								<div class="description">
									<div class="description_in">
										<p>Mauris elementum</p>
										<span>Lorem ipsum dolor sit</span>
										<a class="zoom" href="images/projects/3.jpg" rel="prettyPhoto[portfolio1]">Open</a>
									</div>
								</div>
							</div>
						</div>
						<div class="element span4 city">
							<div class="portfolio_item">
								<div class="hover_img">
									<img src="templates/<?php echo $this->template; ?>/images/projects/4.jpg" alt="" />
								</div>
								<div class="description">
									<div class="description_in">
										<p>Mauris elementum</p>
										<span>Lorem ipsum dolor sit</span>
										<a class="zoom" href="images/projects/4.jpg" rel="prettyPhoto[portfolio1]">Open</a>
									</div>
								</div>
							</div>
						</div>
						<div class="element span4 nature">
							<div class="portfolio_item">
								<div class="hover_img">
									<img src="templates/<?php echo $this->template; ?>/images/projects/5.jpg" alt="" />
								</div>
								<div class="description">
									<div class="description_in">
										<p>Mauris elementum</p>
										<span>Lorem ipsum dolor sit</span>
										<a class="zoom" href="images/projects/5.jpg" rel="prettyPhoto[portfolio1]">Open</a>
									</div>
								</div>
							</div>
						</div>
						<div class="element span4 wedding">
							<div class="portfolio_item">
								<div class="hover_img">
									<img src="templates/<?php echo $this->template; ?>/images/projects/6.jpg" alt="" />
								</div>
								<div class="description">
									<div class="description_in">
										<p>Mauris elementum</p>
										<span>Lorem ipsum dolor sit</span>
										<a class="zoom" href="images/projects/6.jpg" rel="prettyPhoto[portfolio1]">Open</a>
									</div>
								</div>
							</div>
						</div>
						<div class="element span4 kids">
							<div class="portfolio_item">
								<div class="hover_img">
									<img src="templates/<?php echo $this->template; ?>/images/projects/7.jpg" alt="" />
								</div>
								<div class="description">
									<div class="description_in">
										<p>Mauris elementum</p>
										<span>Lorem ipsum dolor sit</span>
										<a class="zoom" href="images/projects/7.jpg" rel="prettyPhoto[portfolio1]">Open</a>
									</div>
								</div>
							</div>
						</div>
						<div class="element span4 fashion">
							<div class="portfolio_item">
								<div class="hover_img">
									<img src="templates/<?php echo $this->template; ?>/images/projects/8.jpg" alt="" />
								</div>
								<div class="description">
									<div class="description_in">
										<p>Mauris elementum</p>
										<span>Lorem ipsum dolor sit</span>
										<a class="zoom" href="images/projects/8.jpg" rel="prettyPhoto[portfolio1]">Open</a>
									</div>
								</div>
							</div>
						</div>
						<div class="element span4 city">
							<div class="portfolio_item">
								<div class="hover_img">
									<img src="templates/<?php echo $this->template; ?>/images/projects/9.jpg" alt="" />
								</div>
								<div class="description">
									<div class="description_in">
										<p>Mauris elementum</p>
										<span>Lorem ipsum dolor sit</span>
										<a class="zoom" href="images/projects/9.jpg" rel="prettyPhoto[portfolio1]">Open</a>
									</div>
								</div>
							</div>
						</div>
					</div><!-- portfolio_block -->
					<div class="load_more_cont"><a href="javascript:void(0)" class="btn_load_more">more</a></div>
					<script type="text/javascript">
						
/*
						jQuery(window).load(function(){
						
							items_set = [	//Service Data
							
								{title : 'Mauris elementum', content: 'Lorem ipsum dolor sit', src : 'templates/<?php echo $this->template; ?>/images/projects/1.jpg', url : 'javascript:void(0)', category: 'span4 nature' },
								
								{title : 'Mauris elementum', content: 'Lorem ipsum dolor sit', src : 'templates/<?php echo $this->template; ?>/images/projects/2.jpg', url : 'javascript:void(0)', category: 'span4 wedding' },
								
								{title : 'Mauris elementum', content: 'Lorem ipsum dolor sit', src : 'templates/<?php echo $this->template; ?>/images/projects/3.jpg', url : 'javascript:void(0)', category: 'span4 kids' }
								
							];
							
							jQuery('#list').portfolio_addon({
								type : 1, // 2-4 columns simple portfolio
								load_count : 3,
								items : items_set
							});
							
						});
*/
					</script>
				</div>
            </div><!-- //section content -->
        </section>
		
        <section class="page_section" id="sed_ul">
			<div class="parallax_effect" data-stellar-background-ratio="0.5">
				<!-- section header -->
				<div class="container">
					<h2>Sed ultrices tellus vel varius suscipit</h2>
				</div><!-- //section header -->
				<div class="home_gradient"></div>
			</div>
		</section>
        
        <!-- events content-->
        <section class="page_section" id="events">
            <!-- section header -->
			<div class="container">
				<h2>Events</h2>
			</div><!-- //section header -->
            
            <!-- section content -->
            <div class="content_section container"> 
                <div class="events_block">
					<div class="post_block">
						<div class="event_img">
							<img src="templates/<?php echo $this->template; ?>/images/events/1.jpg" alt="" />
							<a class="zoom" href="images/events/1.jpg" rel="prettyPhoto[portfolio1]"></a>
						</div>
						<div class="event_description">
							<a class="title" href="javascript:void(0);" alt="">Pellentesque elementum, magna eu</a>
							<div class="event_info"><span class="place">London</span></div>
							Aenean sagittis tortor quis nisl aliquet at rutrum nisi posuere. Ut sollicitudin congue orci sed aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum, elit ac fermentum <a class="read_more" href="javascript:void(0);" alt="">[...]</a>
						</div>
						<div class="post_date">23<span>july</span></div>
					</div>
					<div class="post_block second_post_block right_post">
						<div class="event_img">
							<img src="templates/<?php echo $this->template; ?>/images/events/2.jpg" alt="" />
							<a class="zoom" href="images/events/2.jpg" rel="prettyPhoto[portfolio1]"></a>
						</div>
						<div class="event_description">
							<a class="title" href="javascript:void(0);" alt="">Vestibulum adipiscing fermentum</a>
							<div class="event_info"><span class="place">London</span></div>
							Nullam eros lectus, adipiscing non ligula eu, egestas tempus purus. Donec feugiat eleifend risus, quis feugiat lectus suscipit vitae. Curabitur vitae blandit lectus. Fusce rhoncus semper mattis <a class="read_more" href="javascript:void(0);" alt="">[...]</a>
						</div>
						<div class="post_date">20<span>july</span></div>
					</div>
					<div class="post_block right_post">
						<div class="event_img">
							<img src="templates/<?php echo $this->template; ?>/images/events/4.jpg" alt="" />
							<a class="zoom" href="images/events/4.jpg" rel="prettyPhoto[portfolio1]"></a>
						</div>
						<div class="event_description">
							<a class="title" href="javascript:void(0);" alt="">In magna mi, luctus sit</a>
							<div class="event_info"><span class="place">London</span></div>
							Nullam eros lectus, adipiscing non ligula eu, egestas tempus purus. Donec feugiat eleifend risus, quis feugiat lectus suscipit vitae. Curabitur vitae blandit lectus. Fusce rhoncus semper mattis <a class="read_more" href="javascript:void(0);" alt="">[...]</a>
						</div>
						<div class="post_date">18<span>july</span></div>
					</div>
					<div class="post_block">
						<div class="event_img">
							<img src="templates/<?php echo $this->template; ?>/images/events/3.jpg" alt="" />
							<a class="zoom" href="images/events/3.jpg" rel="prettyPhoto[portfolio1]"></a>
						</div>
						<div class="event_description">
							<a class="title" href="javascript:void(0);" alt="">Cras cursus felis vestibulum</a>
							<div class="event_info"><span class="place">London</span></div>
							Aenean sagittis tortor quis nisl aliquet at rutrum nisi posuere. Ut sollicitudin congue orci sed aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum, elit ac fermentum <a class="read_more" href="javascript:void(0);" alt="">[...]</a>
						</div>
						<div class="post_date">17<span>july</span></div>
					</div>
					<div class="post_block right_post">
						<div class="event_img">
							<img src="templates/<?php echo $this->template; ?>/images/events/5.jpg" alt="" />
							<a class="zoom" href="images/events/5.jpg" rel="prettyPhoto[portfolio1]"></a>
						</div>
						<div class="event_description">
							<a class="title" href="javascript:void(0);" alt="">Vestibulum adipiscing fermentum varius.</a>
							<div class="event_info"><span class="place">London</span></div>
							Nullam eros lectus, adipiscing non ligula eu, egestas tempus purus. Donec feugiat eleifend risus, quis feugiat lectus suscipit vitae. Curabitur vitae blandit lectus. Fusce rhoncus semper mattis <a class="read_more" href="javascript:void(0);" alt="">[...]</a>
						</div>
						<div class="post_date">13<span>july</span></div>
					</div>
					<div class="center_line_events"></div>
				</div>
				<div class="load_more_cont"><a href="javascript:void(0)" class="btn_load_more2">more</a></div>
				<script type="text/javascript">
/*
					jQuery(window).load(function(){
						items_set = [
						
							{title : 'Mauris elementum', content: 'Aenean sagittis tortor quis nisl aliquet at rutrum nisi posuere. Ut sollicitudin congue orci sed aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum, elit ac fermentum', place : 'London', event_date : '10', event_month : 'july', src : 'images/events/1.jpg', url : 'javascript:void(0)', category: '' },
							
							{date_indent_class : 'second_post_block', title : 'Mauris elementum', content: 'Aenean sagittis tortor quis nisl aliquet at rutrum nisi posuere. Ut sollicitudin congue orci sed aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum, elit ac fermentum', place : 'London', event_date : '10', event_month : 'july', src : 'images/events/2.jpg', url : 'javascript:void(0)', category: 'right_post' },
							
							{title : 'Mauris elementum', content: 'Aenean sagittis tortor quis nisl aliquet at rutrum nisi posuere. Ut sollicitudin congue orci sed aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum, elit ac fermentum', place : 'London', event_date : '09', event_month : 'july', src : 'images/events/3.jpg', url : 'javascript:void(0)', category: 'right_post' },
							
							{title : 'Mauris elementum', content: 'Aenean sagittis tortor quis nisl aliquet at rutrum nisi posuere. Ut sollicitudin congue orci sed aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum, elit ac fermentum', place : 'London', event_date : '08', event_month : 'july', src : 'images/events/4.jpg', url : 'javascript:void(0)', category: '' },
							
							{title : 'Mauris elementum', content: 'Aenean sagittis tortor quis nisl aliquet at rutrum nisi posuere. Ut sollicitudin congue orci sed aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum, elit ac fermentum', place : 'London', event_date : '07', event_month : 'july', src : 'images/events/5.jpg', url : 'javascript:void(0)', category: '' }

						];
						jQuery('#list').events_addon({
							type : 1, // 2-4 columns simple portfolio
							load_count : 2,
							items : items_set
						});
					});
*/
				</script>
			</div><!-- //section content -->
        </section>
		
		<section id="testimonials">
            <!-- section header -->
			<div class="parallax_effect" data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="jcarousel_block">
						<div class="jCarouselLite">
							<ul>
								<li class="span4 testimonials_block">
									<div class="testimonials_txt">Fusce ornare semper varius. Duis ac mi neque. Praesent vitae eros urna. Integer dapibus, tellus non laoreet gravida, neque turpis ultricies tellus, a ullamcorper</div>
									<a href="javascript:void(0);"><img src="templates/<?php echo $this->template; ?>/images/avatar1.jpg" alt="" /></a>
									<div class="author_inf"><span>Tom Doe,</span>lorem ipsum</div>
								</li>
								<li class="span4 testimonials_block">
									<div class="testimonials_txt">Fusce ornare semper varius. Duis ac mi neque. Praesent vitae eros urna. Integer dapibus, tellus non laoreet gravida, neque turpis ultricies tellus, a ullamcorper</div>
									<a href="javascript:void(0);"><img src="templates/<?php echo $this->template; ?>/images/avatar2.jpg" alt="" /></a>
									<div class="author_inf"><span>Tom Doe,</span>lorem ipsum</div>
								</li>
								<li class="span4 testimonials_block">
									<div class="testimonials_txt">Fusce ornare semper varius. Duis ac mi neque. Praesent vitae eros urna. Integer dapibus, tellus non laoreet gravida, neque turpis ultricies tellus, a ullamcorper</div>
									<a href="javascript:void(0);"><img src="templates/<?php echo $this->template; ?>/images/avatar3.jpg" alt="" /></a>
									<div class="author_inf"><span>Tom Doe,</span>lorem ipsum</div>
								</li>
							</ul>
						</div>
						<div class="clear"></div>   
					</div><!-- //Jcarousel Lite-->
				</div><!-- end .container -->
				<div class="jcarousel_prev"></div>
				<div class="jcarousel_next"></div>
				<div class="home_gradient"></div>
			</div><!-- //section header -->
		</section>

        <!-- Contact content -->
        <section class="page_section" id="contact">
            <!-- section header -->
            <div class="container">
				<h2><span>Contact</span></h2>
			</div><!-- //section header -->
                        
            <!-- section content -->
            <div class="content_section container">
                <div class="row">
					<div class="span12">
                    	<p>Sed sit amet lectus id libero sagittis mollis vel in sem. Quisque eu tempus neque, at ultricies turpis. Fusce nec leo quis quam ultrices commodo id eget ante. Sed tincidunt metus eu magna ultrices, at lobortis magna elementum.</p>
                    </div>
					<div class="clear"></div>
                	<div class="span3">
						<div class="contact_info">
							<h3>Address</h3>
							24 Fifth st.New York City, United States
						</div>
						<div class="contact_info">
							<h3>Phone</h3>
							+1 959 603 6035</br>
							+1 959 603 6035
						</div>
						<div class="contact_info">
							<h3>Email</h3>
							<a href="mailto:clementjohnson@sitename.com" alt="">clementjohnson@sitename.com</a>
							<a href="mailto:johnson@sitename.com" alt="">johnson@sitename.com</a>
						</div>
                	</div>
					<div class="span9">
                    	<div class="contact_form">  
							<div id="note"></div>
							<div id="fields">
								<form id="ajax-contact-form" action="" class="row">
									<div class="span4">
										<input class="first" type="text" name="name" value="Name" onFocus="if (this.value == 'Name') this.value = '';" onBlur="if (this.value == '') this.value = 'Name';" />
										<input type="text" name="email" value="Email" onFocus="if (this.value == 'Email') this.value = '';" onBlur="if (this.value == '') this.value = 'Email';" />
										<input class="first" type="text" name="Phone" value="Phone" onblur="if(this.value=='') this.value='Phone'" onfocus="if(this.value=='Phone') this.value=''" />
									</div>
									<div class="span5">
										<textarea name="message" id="message" onFocus="if (this.value == 'Message') this.value = '';" onBlur="if (this.value == '') this.value = 'Message';">Message</textarea>
									</div>
									<div class="clear"></div>
									<input type="submit" class="span9 contact_btn" value="send message" />
									<div class="clear"></div>
								</form>
							</div>
						</div>
                	</div>
					<div class="clear"></div>
                </div>                
            </div>
                  
            <!-- //section content -->
        </section>
        <!--footer-->
        <div class="footer">
        	<!-- footer_bottom -->
        	<div class="footer_bottom container">         
                <div class="fleft copyright">Clement Johnson &copy; 2020 | <a href="javascript:void(0);">Privacy Policy</a></div>
				<a href="#home" class="fright down_btn">Back to top</a>
				<div class="clear"></div>
            </div>
        	<!-- //footer_bottom -->
        </div>
        <!--//footer-->
    </div><!-- end #page --> 
    <header class="fixed-menu"></header>    			
</body>
</html>
