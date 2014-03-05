<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>

<!-- events content-->
<section class="page_section" id="blog">
	
	<!-- section header -->
	<div class="container">
		<h2>Blog</h2>
	</div><!-- //section header -->
	
	
    <!-- section content -->
    <div class="content_section container"> 
		<div class="events_block">
			
			
			<?php $i = 1; foreach ($list as $item) { $images = json_decode($item->images); ?>
			<div class="post_block<?php if($i%2 == 0){echo ' right_post second_post_block';} ?>">
		
				<div class="event_img" style="max-height:300px;overflow:hidden">
					<img src="<?php echo $images->image_intro; ?>" alt="<?php echo $item->title; ?>" style="max-width:100%" />
					<a class="zoom" href="<?php echo $images->image_intro; ?>" rel="prettyPhoto[portfolio1]"></a>
				</div>
		
				<div class="event_description">
					<a class="title" href="javascript:void(0);" alt=""><?php echo $item->title; ?></a>
					<div class="event_info"><span class="place">tag :: another tag :: los angeles</span></div>
					<?php if ($params->get('show_introtext')) :?>
						<p class="mod-articles-category-introtext">
							<?php echo $item->displayIntrotext; ?>
						</p>
					<?php endif; ?>
					
					<?php if ($params->get('show_readmore')) :?>
						<p class="mod-articles-category-readmore">
						<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
						<?php if ($item->params->get('access-view') == false) :
							echo JText::_('MOD_ARTICLES_CATEGORY_REGISTER_TO_READ_MORE');
						elseif ($readmore = $item->alternative_readmore) :
							echo $readmore;
							echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit'));
								if ($params->get('show_readmore_title', 0) != 0) :
									echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
									endif;
						elseif ($params->get('show_readmore_title', 0) == 0) :
							echo JText::sprintf('MOD_ARTICLES_CATEGORY_READ_MORE_TITLE');
						else :
							echo JText::_('MOD_ARTICLES_CATEGORY_READ_MORE');
							echo JHtml::_('string.truncate', ($item->title), $params->get('readmore_limit'));
						endif; ?>
						</a>
						</p>
					<?php endif; ?>
					
				</div>
				
				<div class="post_date"><?php echo date('d', strtotime($item->created)); ?><span><?php echo date('M', strtotime($item->created)); ?></span></div>
				
			</div>
			<?php $i++ ;} ?>
			
		</div>
	
	</div>
	
	
	
</section>