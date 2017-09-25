// popup windows

var popup = document.querySelectorAll(".popup-question");
var popupS = document.querySelector(".modal-s");
var popupM1 = document.querySelector(".modal-1");
var popupM2 = document.querySelector(".modal-2");
var popupM3 = document.querySelector(".modal-3");
var popupM4 = document.querySelector(".modal-4");
var close = document.querySelectorAll(".popup-question-close");
var winPopup = document.querySelector(".wrap");
var submitForm1 = document.querySelector(".btn-modal-1");
var submitForm2 = document.querySelector(".btn-modal-2");
var submitForm3 = document.querySelector(".btn-modal-3");
var submitForm4 = document.querySelector(".btn-modal-4");

function showPopup(modal) {
  modal.classList.add("modal-content-show");
  winPopup.classList.add("modal-content-show");
};

function removePopup() {
  for (var i = 0; i < popup.length; i++) {
    popup[i].classList.remove("modal-content-show");
  };
  winPopup.classList.remove("modal-content-show");
};

function showThank() {
  for (var i = 0; i < popup.length; i++) {
    popup[i].classList.remove("modal-content-show");
  };
  popupS.classList.add("modal-content-show");
  setTimeout(function() {
    popupS.classList.remove("modal-content-show");
    winPopup.classList.remove("modal-content-show");
  }, 2000);
}

submitForm1.addEventListener("click", function(event) {

  event.preventDefault();

  showPopup(popupM1);

});

submitForm2.addEventListener("click", function(event) {

  event.preventDefault();

  showPopup(popupM2);

});

submitForm3.addEventListener("click", function(event) {

  event.preventDefault();

  showPopup(popupM3);

});

submitForm4.addEventListener("click", function(event) {

  event.preventDefault();

  showPopup(popupM4);

});

for (var i = 0; i < close.length; i++) {

  close[i].addEventListener("click", function(event) {

    event.preventDefault();

    removePopup();
  });
};

window.addEventListener("keydown", function(event) {

  if (event.keyCode === 27) {

    if (popup.classList.contains("modal-content-show")) {

      removePopup();
    }
  }
});

winPopup.addEventListener("click", function(event) {

  if (winPopup.classList.contains("modal-content-show")) {

    removePopup();
  }
});

$(document).ready(function() {

  $(function() {
    $(".video_btn").click(function() {
      $(".video_play").animate({opacity: '1'}, 1000);
    })
  })

	//E-mail Ajax Send
	$(".modal-form").submit(function() { //Change
		var th = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th,
		}).done(function() {
			showThank();
		});
		return false;
	});

});
