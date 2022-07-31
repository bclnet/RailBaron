{OVERALL_GAME_HEADER}

<!-- 
--------
-- BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
-- RailBaron implementation : © <Your name here> <Your email address here>
-- 
-- This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
-- See http://en.boardgamearena.com/#!doc/Studio for more information.
-------
-->

<div id="board" class="board_{BOARDID}">
    <!-- BEGIN rail -->
        <div id="rail_{X}" class="rail" title="{TITLE}" style="left: {LEFT}px; top: {TOP}px;"></div>
    <!-- END rail -->
    <!-- BEGIN stop -->
        <div id="stop_{X}" class="stop" title="{TITLE}" style="left: {LEFT}px; top: {TOP}px;"></div>
    <!-- END stop -->
    <!-- BEGIN city -->
        <div id="city_{X}" class="city" title="{TITLE}" style="left: {LEFT}px; top: {TOP}px;"><span>{TITLE}</span></div>
    <!-- END city -->

    <div id="tokens">
    </div>
</div>
board: {BOARDID}<br />
cash: {VAR_CASH}<br />
city: {VAR_CITY}<br />
loc: {VAR_LOCATION}<br />
eng: {VAR_ENGINE}<br />

<textarea>
AREA
</textarea>

<script type="text/javascript">
// Templates
var jstpl_token='<div class="token token_${klass}_${color}" id="token_${type_x}"></div>';
</script>  

{OVERALL_GAME_FOOTER}
