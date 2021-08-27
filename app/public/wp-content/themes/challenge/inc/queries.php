<?php

    function challenge_galeria(){ ?>
        <ul class="lista-clases">
            <?php 
                $args = array(
                    'post_type' => 'imagenes', 
                    'posts_per_page' => 3
                );
                $clases = new WP_Query($args);
                while( $clases->have_posts() ): $clases->the_post(); ?>
                    <li class="clase card gradient">
                        
                        <div class="contenido">
                            <?php if( get_field('imagen') ): ?>
                                <img src="<?php the_field('imagen'); ?>" width="534" height="289" />
                            <?php endif; ?> 
                            <ul>   
                                <li><strong>Título: </strong><?php the_field('titulo'); ?></li>
                                <li><strong>Autor: </strong><?php the_field('autor'); ?></li>
                                <li><strong>Etiquetas: </strong>
                                <?php $terms = get_field('hashtag');
                                    if( $terms ): ?>
                                        
                                        <?php foreach( $terms as $term ):
                                            echo esc_html( $term->name ).", "; 
                                        endforeach; ?>
                                        
                                    <?php endif; ?></li>
                                </ul>    
                        </div>
                    </li>            
                    <hr>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
<?php
    }