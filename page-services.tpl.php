<?php
// $Id: page.tpl.php,v 1.1.2.1 2009/02/24 15:34:45 dvessel Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body>
   <!-- class="<?php print $body_classes; ?> show-grid" -->
  <div id="page" class="container-16 clear-block">

    <div id="site-header" class="clear-block">
      <div id="branding" class="grid-16 clear-block">
         
          <?php if ($site_slogan): ?>
              <div id="site-slogan" class="grid-9 push-2 alpha"><?php print $site_slogan; ?></div>
            <?php endif; ?>
      <!-- the linked logo is not working on my localhost. i have no idea why.  maybe because
      it is symlink? inserting logo into background of branding for now. 
      
      <?php if ($linked_logo_img): ?>
              <span id="logo" class="grid-12 alpha"><?php print $linked_logo_img; ?></span>
            <?php endif; ?>
            <?php if ($linked_site_name): ?>
              <h1 id="site-name" class="grid-3 omega"><?php print $linked_site_name; ?></h1>
            <?php endif; ?>
           
            </div> -->


            <div id="search-box" class="grid-4 push-4">
           
            <?php print $search_box; ?>
            </div>
    </div>


    <div id="site-subheader" class="prefix-2 clear-block alpha">
    <div id="links"> <?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist')) ?></div> 

    </div>


    <div id="main" class="column grid-16">
      
      <?php if ($title): ?>
        <h1 class="title prefix-2" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php if ($tabs): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>
      <?php print $messages; ?>
      <?php print $help; ?>

      <div id="main-content" class="region grid-13 prefix-2 suffix-2 alpha">
       <?php print $content; ?>
          <!-- <?php print_r($node); ?> -->
         </div>
         
      </div>
  
      <?php print $feed_icons; ?>
    </div>
    
    <div id="sub-content" class="grid-14 push-2 clear-block alpha">
      <div id="linkimage" class="grid-2">
          <?php echo $node->field_imagelink1[0]['view'];?></div>
       <div id="service" class="grid-11"> 
              <h4 id="subtitle2">
               <?php print $node->content['field_caremanage']['field']['#title'] ?> </h4>
                <h5 id="subsub"><?php echo $node->field_tag1[0]['view'];?></h5>
            <?php echo $node->field_caremanage[0]['view'];?> </div>
        <div id="linkimage" class="grid-2"> 
        <?php echo $node->field_imagelink2[0]['view'];?></div>
       <div id="service" class="grid-11">
           <h4 id="subtitle2">
             <?php print $node->content['field_housing']['field']['#title'] ?> </h4>
              <h5 id="subsub"><?php echo $node->field_tag2[0]['view'];?></h5>
            <?php echo $node->field_housing[0]['view'];?></div>
      <div id="linkimage" class="grid-2">
          <?php echo $node->field_imagelink3[0]['view'];?></div>
       <div id="service" class="grid-11">
            <h4 id="subtitle2">
            <?php print $node->content['field_communication']['field']['#title'] ?> </h4>
             <h5 id="subsub"><?php echo $node->field_tag3[0]['view'];?></h5>
            <?php echo $node->field_communication[0]['view'];?></div>
       
 
     </div>

  <!-- <?php if ($left): ?>
     <div id="sidebar-left" class="column sidebar region grid-4 <?php print ns('pull-12', $right, 3); ?>">
       <?php print $left; ?>
     </div>
   <?php endif; ?>

   <?php if ($right): ?>
     <div id="sidebar-right" class="column sidebar region grid-3">
       <?php print $right; ?>
     </div>
   <?php endif; ?> -->
 

   <div id="footer" class="prefix-1 suffix-1">

           <div id="footer-region" class="region grid-14 push-1 clear-block">
           <?php print $footer; ?>  
           </div>


         <?php if ($footer_message): ?>
           <div id="footer-message" class="grid-14 push-1">
           <center><?php print $footer_message; ?> </center>
            <div class="grid-5 push-6 alpha"><?php print $service_links; ?></div>
           </div>
         <?php endif; ?>

       </div>

  </div>
  <?php print $closure; ?>
</body>
</html>
