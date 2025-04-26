setTimeout(() => {
    document.getElementById('alert').style.display = 'none';
  }, 5000); // Alert disappears after 5 seconds

  // Optional: Close alert on button click
  document.getElementById('close-btn').onclick = function() {
    document.getElementById('alert').style.display = 'none';
  };
function scr(){
  
}
function openModal(idCours) {
  document.getElementById('reservationModal').classList.remove('hidden');
  document.getElementById('idCoursInput').value = idCours; // Inject id cours f hidden input
}

function closeModal() {
  document.getElementById('reservationModal').classList.add('hidden');
}