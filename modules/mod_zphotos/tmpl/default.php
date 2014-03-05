<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_zphotos
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>

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
					
					<?php foreach( $categories as $category ){ ?>
						<li><a href="#filter" data-option-value=".<?php echo $category->alias; ?>"><?php echo $category->title; ?></a></li>
					<?php } ?>
				</ul>
				<div class="clear"></div>
			</div><!-- .filter_block -->
			
			
			<div class="row projects portfolio_block">
			
				<?php foreach( $list as $photo ){ ?>
				<div class="element span4 <?php echo $photo->cat_alias; ?>">
					<div class="portfolio_item">
						<div class="hover_img">
							<img src="images/zphotos/<?php echo $photo->large; ?>" alt="" />
						</div>
						<div class="description">
							<div class="description_in">
								<p><?php echo $photo->name; ?></p>
								<?php echo $photo->desc; ?>
								<a class="zoom" href="images/zphotos/<?php echo $photo->large; ?>" rel="prettyPhoto[portfolio1]">Open</a>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			
			</div><!-- portfolio_block -->
			<!-- <div class="load_more_cont"><a href="javascript:void(0)" class="btn_load_more">more</a></div> -->
			<script type="text/javascript">
				
/*
				jQuery(window).load(function(){
				
					items_set = [	//Service Data
					
						{title : 'Mauris elementum', content: 'Lorem ipsum dolor sit', src : 'templates/shrouds_v1/images/projects/1.jpg', url : 'javascript:void(0)', category: 'span4 nature' },
						
						{title : 'Mauris elementum', content: 'Lorem ipsum dolor sit', src : 'templates/shrouds_v1/images/projects/2.jpg', url : 'javascript:void(0)', category: 'span4 wedding' },
						
						{title : 'Mauris elementum', content: 'Lorem ipsum dolor sit', src : 'templates/shrouds_v1/images/projects/3.jpg', url : 'javascript:void(0)', category: 'span4 kids' }
						
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
