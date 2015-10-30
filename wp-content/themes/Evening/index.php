<?php get_header(); ?> <!-- Fonction wp qui équivaut à un include allant chercher header.php-->  
<section class="section-index">
            
            <div class="page-home">
                
                <div class="slider">
                    <span class="glyphicons glyphicons-chevron-left"></span>
                    
                    <div class="slider-list">
                        <ul>
                            <li id="slider1" class="active">
                                <img src="<?= get_template_directory_uri(); ?>/img/imgslide1.jpg">
                                <div class="slider-button-container">
                                    <h2>Organisez la soirée<br>du siècle</h2>
                                    <a href="#" class="slider-button">Voir plus</a>
                                </div>                                  
                            </li>
                            <li id="slider2">
                                <img src="<?= get_template_directory_uri(); ?>/img/imgslide2.jpg">
                                <div class="slider-button-container">
                                    <h2>Réussissez votre dîner<br>avec vos beaux-parents</h2>
                                    <a href="#" class="slider-button">Voir plus</a>
                                </div>
                            </li>
                            <li id="slider3">
                                <img src="<?= get_template_directory_uri(); ?>/img/imgslide3.jpg">
                                <div class="slider-button-container">
                                    <h2>Devenez le meilleur<br>team-builder</h2>
                                    <a href="#" class="slider-button">Voir plus</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    <span class="glyphicons glyphicons-chevron-right"></span>
                </div>
            
            </div>
        
        </section>
<?php get_footer();?> <!-- Fonction wp qui équivaut à un include allant chercher footer.php-->  

<?php get_footer();?> <!-- Fonction wp qui équivaut à un include allant chercher footer.php-->  
