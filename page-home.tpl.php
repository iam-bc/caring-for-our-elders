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
      <div id="branding" class="grid-15 clear-block">
         
          <?php if ($site_slogan): ?>
              <div id="site-slogan" class="grid-14 push-1 suffix-1 alpha"><?php print $site_slogan; ?></div>
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

   
        
    </div>
<!-- <?php print_r($node); ?> -->

    <div id="site-subheader" class="prefix-1 clear-block alpha">
    <div id="links"> <?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist')) ?>  </div> 

    </div>


    <div id="main" class="column grid-15">
      <?php print $breadcrumb; ?>
      
      <?php if ($tabs): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>
      <?php print $messages; ?>
      <?php print $help; ?>

      <div id="main-content" class="region grid-15 prefix-1 alpha">
         <div id="image" ><?php print $node->content['image_attach']['#value']; ?></div>
           <h1 class="page-title"><?php print $title; ?></h1>
     <?php print $node->content['body']['#value']; ?>
          <!-- <?php print_r($node); ?> -->
         </div>
         
      </div>
  
      <?php print $feed_icons; ?>
    </div>
    
    <div id="sub-content" class="grid-15 push-1 clear-block alpha">
       <div id="sub" class="grid-4"> 
              <h4 id="subtitle">
               <?php print $node->content['field_take_care']['field']['#title'] ?> </h4>
             </div>
         
       <div id="sub2" class="grid-4 prefix-1">
           <h4 id="subtitle">
             <?php print $node->content['field_lets_talk']['field']['#title'] ?> </h4>
            </div>
        
       <div id="sub" class="grid-4 prefix-1">
            <h4 id="subtitle">
            <?php print $node->content['field_whichwayhome']['field']['#title'] ?> </h4>
          </div>
       
     </div>
     <div class="grid-16 push-1 clear-block alpha">
        <div class="grid-4"> 
                       <?php echo $node->field_lets_talk[0]['view'];?>
                       <?php echo $node->field_image1[0]['view'];?> </div>
                       <div id="line" class="grid-1">b</div>
        <div class="grid-4">
                      <?php echo $node->field_take_care[0]['view'];?>
                      <?php echo $node->field_image2[0]['view'];?></div>
                       <div id="line" class="grid-1">.</div>
        <div class="grid-4">
                     <?php echo $node->field_whichwayhome[0]['view'];?>
                     <?php echo $node->field_image3[0]['view'];?></div>


      </div>


 

 <div id="footer" class="grid-16 prefix-1 alpha clear-block">
    
        <div id="footer-region" class="grid-15 clear-block">
        <?php print $footer; ?>  
        </div>
      

      <?php if ($footer_message): ?>
          <div id="servicelinks" class="grid-4"><?php print $service_links; ?></div>
         <div id="footer-message" class="grid-6 suffix-4">
        <div id="foot"><?php print $footer_message; ?> </div>   </div>
        
      <?php endif; ?>
     
    </div> 
  

  </div>
  <?php print $closure; ?>
</body>
</html>
