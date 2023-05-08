const calculateBtn = document.getElementById("calculateBtn");
const result = document.getElementById("result");

function calculateBMI() {
  const weight = parseFloat(document.getElementById("weightInput").value);
  const height = parseFloat(document.getElementById("heightInput").value) / 100;
  const bmi = weight / (height * height);
  result.textContent = `Your BMI is ${bmi.toFixed(1)}.`;
}

calculateBtn.addEventListener("click", calculateBMI);