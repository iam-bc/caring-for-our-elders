<div class="node <?php print $node_classes ?>" id="node-<?php print $node->nid; ?>"><div class="node-inner">

  <?php if ($page == 0): ?>
    <h1 class="title contentheading">
  
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h1>
  <?php endif; ?>
  
   
  <?php if ($submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <?php if (count($taxonomy)): ?>
    <div class="taxonomy"><?php print t(' in ') . $terms; ?></div>
  <?php endif; ?>

  <div class="content">
     <div id="image" ><?php print $node->content['image_attach']['#value']; ?></div>
         <div id="main-text"> <?php print $node->content['body']['#value']; ?>
  </div>

  <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

</div></div> <!-- /node-inner, /node -->
