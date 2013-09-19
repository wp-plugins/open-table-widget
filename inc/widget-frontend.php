<?php
/**
 *  OTW Widget Frontend Display
 *
 * @description: Responsible for the frontend display of the Open Table Widget
 * @since: 1.0
 * @created: 9/10/13
 */

?>

<div class="otw-widget-form-wrap">
    <?php
    //Pre Form Content
    if (!empty($preContent)) {
        echo wpautop($preContent);
    } ?>
    <form method="get" class="otw-widget-form" action="http://www.opentable.com/restaurant-search.aspx" target="_blank">
        <div class="OT_wrapper">

            <div class="otw-date-li otw-input-wrap">
                <input name="startDate" class="otw-reservation-date" type="text" value="" autocomplete="off">
            </div>
            <div class="otw-time-wrap otw-input-wrap">
                <input name="ResTime" class="otw-reservation-time" type="text" value="7:00pm" autocomplete="off">
            </div>
            <div class="otw-party-size-wrap otw-input-wrap">

                <select class="otw-party-size-select">
                    <option value="1">1 Person</option>
                    <option value="2">2 People</option>
                    <option value="3">3 People</option>
                    <option value="4">4 People</option>
                    <option value="5">5 People</option>
                    <option value="6">6 People</option>
                    <option value="7">7 People</option>
                    <option value="8">8 People</option>
                    <option value="9">9 People</option>
                    <option value="10">10 People</option>
                </select>

            </div>

            <div class="otw-button-wrap">
                <input type="submit" class="otw-submit-btn" value="Find a Table"/>
            </div>

            <input type="hidden" name="RestaurantID" class="RestaurantID" value="<?php echo $restaurantID; ?>">
            <input type="hidden" name="rid" class="rid" value="<?php echo $restaurantID; ?>">
            <input type="hidden" name="GeoID" class="GeoID" value="15">
            <input type="hidden" name="PartySize" class="PartySize" value="2" autocomplete="off">
            <input type="hidden" name="txtDateFormat" class="txtDateFormat" value="MM/dd/yyyy">
            <input type="hidden" name="RestaurantReferralID" class="RestaurantReferralID" value="<?php echo $restaurantID; ?>">
        </div>
    </form>
    <?php
    //Post Form Content
    if (!empty($postContent)) {
        echo wpautop($postContent);
    } ?>
</div><!-- /.otw-widget-form-wrap -->