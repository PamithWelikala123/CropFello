<input type="text" id="pickuplocation" name="pickuplocation" placeholder="From Where journey Begin...?" value="">
                <span ></span>
                <input type="hidden" name="p-latitude" id="p-latitude" value="">
                <input type="hidden" name="p-longitude" id="p-longitude" value="">
                <input type="text" id="destination" name="destination" placeholder="From Where journey End...?"  value="">
                <span class="invalid"></span>
                <input type="hidden" name="d-latitude" id="d-latitude" value="">
                <input type="hidden" name="d-longitude" id="d-longitude" value="">

                <div id="map-container">
                    <div id="map"></div>
                </div>

<script src="<?=ROOT?>/assets/js/map.js"></script>