const bars = document.querySelectorAll('.bar');
const genBut = document.getElementById('genChartButton');
let isdefault = false;

genBut.addEventListener('click', () => {
  isdefault = !isdefault;

  bars.forEach(bar => {
  if (isdefault) {
    document.getElementById("math").style.width = "90%";
    document.getElementById("thai").style.width = "50%";
    document.getElementById("eng").style.width = "80%";
    document.getElementById("sci").style.width = "70%";
    document.getElementById("soc").style.width = "60%";
  } else {
  bar.style.width = '20%'; // Reset to default height
  }
  });
});
