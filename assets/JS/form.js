function calculateScore(inputId, multiplier) {
    const inputField = document.getElementById(inputId);
    const value = parseFloat(inputField.value);

    if (!isNaN(value)) {
        const result = value * multiplier;
        inputField.value = result.toFixed(2);  // Update the input field with the calculated result
    }
}

document.getElementById("evaluationForm").addEventListener("submit", function(event) {
    event.preventDefault();
    alert("Formulario enviado con éxito");
});
