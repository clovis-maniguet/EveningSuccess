<?php get_header(); ?>
        <div id="recipes-slider">
                
                <ul class="recipes-slides">
                    <li>
                        <img src="img/recette-header.jpg" alt"fzdfs">
                        <span class="recipes-slide-title">Mon titre</span>
                    </li>
                    <li>
                        <img src="img/recette-header.jpg" alt"fzdfs">
                        <span class="recipes-slide-title">Mon titre</span>
                    </li>
                    <li>
                        <img src="img/recette-header.jpg" alt"fzdfs">
                        <span class="recipes-slide-title">Mon titre</span>
                    </li>
                    <li>
                        <img src="img/recette-header.jpg" alt"fzdfs">
                        <span class="recipes-slide-title">Mon titre</span>
                    </li>
                    <li>
                        <img src="img/recette-header.jpg" alt"fzdfs">
                        <span class="recipes-slide-title">Mon titre</span>
                    </li>
                    <li>
                        <img src="img/recette-header.jpg" alt"fzdfs">
                        <span class="recipes-slide-title">Mon titre</span>
                    </li>
                </ul>
                
                <div class="left-arrow"></div>
                <div class="right-arrow"></div>
            </div>   
    
        <section>

         <?php 
                $args = array('post_type' => 'recette'); 
                $the_query = new WP_Query($args); ?>
            
            <div id="recipes-content">
                
                <div id="recipes-content-elmts">
                    <?php if ($the_query->have_posts()) : ?>
                    <div class="recipes-content-elmt">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <?php if (has_post_thumbnail()): ?>
                        <img src="<?= get_template_directory_uri(); ?>/img/recette-header.jpg" alt="fgrt">
                            <?php endif; ?>
                        
                        <div class="recipes-content-description">
                            <h3>Titre</h3>
                            <h4>Sous-titre</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus provident eius autem libero voluptatibus quaerat doloremque perspiciatis cupiditate fugit esse veritatis consequatur cum, reprehenderit voluptates, repudiandae neque tenetur excepturi aspernatur.</p>
                            <span>Durée : 20 minutes</span>
                            <a href="#" class="btn">suite</a>
                        </div>
                        
                        <div class="recipes-content-taxonomy">
                            <span>catégorie</span>
                            
                            <div class="recipes-content-tags">
                                <a href="#">Tag</a>
                                <a href="#">Tag</a>
                                <a href="#">Tag</a>
                                <a href="#">Tag</a>
                            </div>
                        <?php endwhile ; ?>
                        </div>
                        <?php endif; 
                            wp_reset_postdata(); ?>
                    
                    </div>
                    
                </div>
                
            </div>
            
        </section>
<?php get_footer(); ?>