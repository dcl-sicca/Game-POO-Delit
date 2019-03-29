var attrPointMax = 110;

// Stats
function displayStats() {
    $('input[type=range]').each(function() { $(this).next().html($(this).val()); });
}

function countPoint(e) {

    // range point count
    var points = 0;

    $('input[type=range]').each(function() {
        points += parseInt($(this).val());   
    });

    // life value
    var life = parseInt($("#life").val());

    // algo
    if (points > attrPointMax) {
        if (life > 0) {
          $("#life").val(life-1);
        } else {
          var input=$(e.currentTarget);
          input.val(input.val()-1);
        }
        countPoint(e);
        return;
    } 
    
    $("#attrPointCount").html(attrPointMax-points);

    displayStats();
        
}

// Dom elements ready function
$(function() {

displayStats();

// events for inpur range
$('input[type=range]').on('input', countPoint);

});
