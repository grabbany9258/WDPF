<?php get_header(); ?>
  <div id="posts">
    <?php if(have_posts()):  
        while(have_posts()): the_post();
    ?>   
    <div class="post">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?>(<?php the_id() ?>)</a></h2>
      <p class="date"><?php the_time('F j, Y') ?> by <?php the_author() ?></p>
      <div class="entry">
        <p>
          <?php the_post_thumbnail(); ?>
        </p>
        <?php the_excerpt(); ?>
        <?php //the_content(); ?>
      </div>
      <div class="postmetadata"> <span class="tags">
      Category: <?php the_category(); ?>
      <br>
      <?php the_tags(); ?>  
      </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comments-no">
      <?php comments_number( 'no comments', '1 comment', '% comments' ); ?>.  
      <!-- <a href="#">1 Comment</a> -->
      </span> <br /> 
      </div>
    </div>
    <?php 
         endwhile;
          endif; 
    ?>  
  </div>
 <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
