<script>
    // Select the input element with id "assetid"
    var inputElement = document.getElementById("assetid");

    // Select the SVG element where the barcode will be displayed
    var barcodeElement = document.getElementById("barcode");

    // Function to generate a new random ID and update both the input and barcode
    function asd() {
        var prefix = document.getElementById("category").value;
        var randomNumber = ddd();
        var assetid = "0" + prefix + "-" + randomNumber;

        // Update the input field
        inputElement.value = assetid;

        // Update the barcode
        JsBarcode(barcodeElement, assetid);
    }

   

    // Set the generated asset ID when the page loads
    asd();

    // Attach an event listener to the "Generate ID" button to refresh the ID
    document.getElementById('category').addEventListener('change', asd);

</script>