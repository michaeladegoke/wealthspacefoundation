
    // JavaScript function to calculate and update the value based on Wits input
    document.getElementById('witsInput').oninput = function() {
        var witsValue = parseFloat(this.value); // Get the value entered in Wits field
        var calculatedValue = witsValue * 40; // Calculate the value (400 times the wits value)
        
        // Update the Value field with the calculated value
        document.getElementById('valueInput').value = isNaN(calculatedValue) ? '' : calculatedValue;
    };
