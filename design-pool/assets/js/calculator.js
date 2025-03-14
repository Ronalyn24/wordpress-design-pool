rollCalculator = function () {
    
    // Calculate and update area in square feet as user types
    $('#width, #height').on('input', function() {
        var widthFeet = parseFloat($('#width').val()) || 0;
        var heightFeet = parseFloat($('#height').val()) || 0;
        var areaFeet = widthFeet * heightFeet;

        $('#area-feet-result').text(areaFeet.toFixed(0)); // Display area in square feet

        // Optional: You might want to auto-calculate rolls when both inputs are filled
        if (widthFeet > 0 && heightFeet > 0) {
            calculateRolls(widthFeet, heightFeet);
        }

    });

    // Function to calculate and display the number of rolls needed
    function calculateRolls(widthFeet, heightFeet) {
        var widthInches = widthFeet * 12;
        var heightInches = heightFeet * 12;
        var wallArea = widthInches * heightInches;
        var rollWidth = 25.5;
        var rollHeight = 198;
        var rollArea = rollWidth * rollHeight;
        var rollsNeeded = Math.floor(wallArea / rollArea);

        // Ensure at least 1 roll is needed
        rollsNeeded = Math.max(1, rollsNeeded);

        $('#number-of-rolls').text(rollsNeeded); // Display the number of rolls needed
        $('#size-of-roll').addClass('show');
    }
}

jQuery(document).ready(rollCalculator);