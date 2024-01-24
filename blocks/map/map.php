<?php 
 
?>


<div data-controller="map" class="sud-map-wrapper">

     <div class="sud-filter-container">
          <select data-action="map#filterMap">
               <option value="everything">Alles</option>
               <option value="funding">Funding</option>
               <option value="business-skills">Business Skills</option>
               <option value="pitching-skills">Pitching Skills</option>
               <option value="community">Community</option>
               <option value="inspiration">Inspiration</option>
               <option value="finance-skills">Finance Skills</option>
               <option value="tech-skills">Tech Skills</option>
          </select>
     </div>
     <hr>

     <div id="d3map" class="map-container" data-map-target="mapContainer">
          <div data-target="tooltip" class="tooltip" style="display: none;">
               <h1 data-target="name" class="tooltip-name"></h1>
               <p data-target="description" class="tooltip-description"></p>
               <a data-target="link" class="tooltip-link" href="" target="_blank">Website</a>
          </div>
          <?php if(false) { ?>
          <div class="cta-position">
               <a href="#" target="_blank" class="cta-button">CALL TO ACTION</a>
          </div>
          <?php } ?>
     </div>

</div>
