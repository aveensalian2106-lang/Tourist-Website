let bookbtn = document.querySelectorAll("#bookbtn");

bookbtn.forEach((button) => {
  button.addEventListener("click", () => {
    const placeId = button.getAttribute("data-place-id");
    window.location.href = `booking.php?place_id=${placeId}`;
  });
});
