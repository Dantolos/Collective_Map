<?php 
     
     $terms = get_terms( array(
          'taxonomy'   => 'ressources',
          'hide_empty' => true, 
          'orderby' => 'meta_value_num',
          'order' => 'ASC',
          'meta_query' => array(
               'relation' => 'OR',
               array(
                    'key' => 'partner_order',
                    'compare' => 'NOT EXISTS'
               ),
               array(
                    'key' => 'partner_order',
                    'value' => 0,
                    'compare' => '>='
               )
          ),
     ) ); 

?>


<div data-controller="map" class="sud-map-wrapper">

     <div class="sud-filter-container">
          <select data-action="map#filterMap" >
               <option value="" disabled selected>What are you looking for?</option>
               <option value="everything">Show all</option>
               <?php foreach ($terms as $term) : ?>
                    <option value="<?= $term->slug; ?>"><?= $term->name ?></option>
               <?php endforeach; ?> 
          </select>
     </div>
     <hr>

     <div id="d3map" class="map-container" data-map-target="mapContainer">
          <div data-target="tooltip" class="tooltip" style="display: none;">
               <img data-target="logo" class="tooltip-logo" style="max-width:200px;max-height:100px;margin:40px 0 20px;"/>
               <h1 data-target="name" class="tooltip-name"></h1>
               <p data-target="description" class="tooltip-description"></p>
               <a data-target="link" class="tooltip-link" href="" target="_blank">Website</a>
          </div>

          <div class="interaction-buttons">
            <button id="zoom_in">+</button>
            <button id="zoom_out">-</button>
          </div>

          <?php if(false) { ?>
          <div class="cta-position">
               <a href="#" target="_blank" class="cta-button">CALL TO ACTION</a>
          </div>
          <?php } ?>
     </div>

</div>
