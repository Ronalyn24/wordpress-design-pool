<section id="roll-calculator">

    <div class="aw-roll-calculator">
      
      <h2 class="aw-title">ROLL CALCULATOR</h2>

      <ul class="aw-roll-calculator__lists">
        
        <li>Round up the nearest inch</li>
        <li>Do measure the entirety of the wall including windows and colors.</li>
        <li>Measure the tallest wall for your height</li>
        
      </ul>

      <div class="aw-roll-calculator__square">
        
        <p>Add your total width and height to determine your square footage</p>
        
          <div id="areaForm">
            
            <div class="area-feet">
              
              <div class="area-feet__item">
                <input type="number" id="width" name="width" placeholder="In Feet (e.g. 12.5)" required>
                <label for="width">Wall Width</label>
              </div>
              
              <span class="sign">x</span>
              
              <div class="area-feet__item">  
                <input type="number" id="height" name="height" placeholder="In Feet (e.g. 9)" required>
                <label for="height">Wall Height</label>
              </div> 
              
              <span class="sign sign-l">=</span>
              
              <div class="area-feet__item">
                <div id="area-feet-result">0</div>
                <span class="result">Wall Square Footer</span>
              </div> 

            </div><!-- .area-feet -->
            
            
            <p class="text-red-2">We think you will need the follwing:</p>
            
            <div class="area-size">
              
              <div class="area-size__item">
                <div class="area-size__positioner">
                  <span id="number-of-rolls"></span>
                </div>
                <label for="roll">Rolls</label>
              </div>
              
              <span class="area-size__item sign">of</span>
              
              <div class="area-size__item">
                <div class="area-size__positioner">
                  <span id="size-of-roll">25.5in x 198in</span>
                </div>
                <label for="size">Size</label>
              </div>

            </div><!-- .area-size -->
            
            <p class="text-red message-alert">We recommend ordering an extra roll to accommodate pattern matching and printing variation.</p>
          
        </div>
        
      </div><!-- .aw-roll-calculator__square -->
      
    </div>

</section><!-- .aw-section -->