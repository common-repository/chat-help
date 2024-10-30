/**
 * Table of contents
 * -----------------------------------
 * 01.CURRENT TIME
 * 02.OPEN BUTTON
 * 03.CHECK TERMS AND CONDITION
 * 04.CHECK AVAILABILITY
 * 05.GET WEEK DAY
 * 06.MULTI USER AVAILABILITY
 * 07.MULTI USER SEARCH
 * 08.BUTTONS AVAILABILITY
 * 09.SINGLE CHAT AVAILABILITY
 * 10.ADD SUBJECT OR BODY TEXT
 * 11. SHOW HIDE AUTO OPEN POPUP AFTER SECONDS
 * DARK VERSION
 * -----------------------------------
 */

"use strict";

// DOM Elements
const wHelp = document.querySelectorAll(".wHelp");
const wHelpMulti = document.querySelectorAll(".wHelp-multi");
const wHelpBubble = document.querySelectorAll(".wHelp-bubble");
const currentTime = document.querySelector(".current-time");
const wHelpUserAvailability = document.querySelectorAll(
  ".wHelpUserAvailability"
);
const wHelpMultiPopupContent = document.querySelector(
  ".wHelp-multi__popup--content"
);
const wHelpCheckboxDiv = document.querySelectorAll(".wHelp--checkbox");
const wHelpCheckbox = document.querySelectorAll(".wHelp__checkbox");
const wHelpCheckButton = document.querySelectorAll(".wHelp__send-message");
const wHelpPopupContent = document.querySelectorAll(".wHelp__popup--content");
const wHelpButtons = document.querySelectorAll(".wHelpButtons");
const chatAvailability = document.querySelector(".chat-availability");

// Configuration from external script
const { autoShowPopup, autoOpenPopupTimeout } = whatshelp_frontend_script;

/******************** 01. CURRENT TIME ********************/
if (currentTime) {
  const today = new Date();
  currentTime.innerText = `${today.getHours()}:${today.getMinutes()}:${today.getSeconds()}`;
}

/******************** 02. OPEN BUTTON ********************/
const toggleChatBtn = () => {
  [...wHelp, ...wHelpMulti].forEach((item) =>
    item.classList.toggle("wHelp-show")
  );
};
wHelpBubble.forEach((item) => item.addEventListener("click", toggleChatBtn));

/******************** 03. CHECK TERMS AND CONDITION ********************/
const initCheckboxState = () => {
  const checkboxValue = localStorage.getItem("wHelpCheckboxValue") === "true";
  if (checkboxValue) {
    wHelpCheckButton.forEach((btn) =>
      btn.classList.remove("condition__checked")
    );
    wHelpCheckboxDiv.forEach((div) => (div.style.display = "none"));
  }
};

wHelpCheckbox.forEach((checkbox) => {
  checkbox.addEventListener("change", function () {
    if (this.checked) {
      localStorage.setItem("wHelpCheckboxValue", true);
      initCheckboxState();
    }
  });
});

initCheckboxState(); // Initialize checkbox state on load

/******************** 04. CHECK AVAILABILITY ********************/
function isAvailable(available, now) {
  let isAvailable = false;
  let almostAvailable = false;

  for (const key in available) {
    if (available.hasOwnProperty(key) && getDayOfWeek(key) === now.day()) {
      const [start, end] = available[key]
        .split("-")
        .map((time) => moment(time, "HH:mm"));
      if (now.isBetween(start, end)) isAvailable = true;
      if (now.isBefore(start)) almostAvailable = true;
    }
  }
  return { isAvailable, almostAvailable };
}

/******************** 05. GET WEEK DAY ********************/
const getDayOfWeek = (day) =>
  [
    "sunday",
    "monday",
    "tuesday",
    "wednesday",
    "thursday",
    "friday",
    "saturday",
  ].indexOf(day.toLowerCase());

/******************** 06. MULTI USER AVAILABILITY ********************/
const handleUserAvailability = () => {
  const searchInfo =
    wHelpMultiPopupContent?.getAttribute("data-search") === "true";
  const isGrid = document
    .querySelector(".wHelp-multi")
    ?.classList.contains("wHelp-grid");

  if (wHelpUserAvailability.length) {
    if (searchInfo) wHelpMultiPopupContent.classList.add("wHelp-search");
    if (wHelpUserAvailability.length > (isGrid ? 4 : 3))
      wHelpMultiPopupContent.classList.add("wHelp-scroll");

    wHelpUserAvailability.forEach((item) => {
      const availableTimes = JSON.parse(
        item.getAttribute("data-userAvailability")
      );
      const timezone = item.getAttribute("data-timezone");
      const now = timezone ? moment().tz(timezone) : moment();

      const availability = isAvailable(availableTimes, now);

      if (availability.isAvailable || availableTimes == null) {
        item.classList.add("avatar-active");
        item.classList.remove("avatar-inactive");
      } else {
        item.classList.add("avatar-inactive");
        item.classList.remove("avatar-active");
        item.setAttribute("disabled", true);
      }
    });
  }
};
handleUserAvailability();

/******************** 07. MULTI USER SEARCH ********************/
function searchUser() {
  const input = document.getElementById("search-input").value.toUpperCase();
  const users = document
    .getElementById("multi-user")
    .getElementsByClassName("user");

  Array.from(users).forEach((user) => {
    const name = user
      .querySelector(".user__info--name")
      .textContent.toUpperCase();
    user.style.display = name.includes(input) ? "" : "none";
  });
}

/******************** 08. BUTTONS AVAILABILITY ********************/
const updateButtonAvailability = () => {
  wHelpButtons.forEach((item) => {
    const availableTimes = JSON.parse(item.getAttribute("data-btnavailablety"));
    const timezone = item.getAttribute("data-timezone");
    const now = timezone ? moment().tz(timezone) : moment();

    const availability = isAvailable(availableTimes, now);

    if (availability.isAvailable) {
      item.classList.add("avatar-active");
      item.classList.remove("avatar-inactive");
    } else {
      item.classList.add("avatar-inactive");
      item.classList.remove("avatar-active");
    }
  });
};
updateButtonAvailability();

/******************** 09. SINGLE CHAT AVAILABILITY ********************/
if (chatAvailability) {
  const chatAvailableTime = JSON.parse(
    chatAvailability.getAttribute("data-availability")
  );
  const now = moment();
  const availability = isAvailable(chatAvailableTime, now);

  if (availability.isAvailable) {
    chatAvailability.classList.add("avatar-active");
    chatAvailability.classList.remove("avatar-inactive");
  } else {
    chatAvailability.classList.add("avatar-inactive");
    chatAvailability.classList.remove("avatar-active");
  }
}

/******************** 10. ADD SUBJECT OR BODY TEXT ********************/
(function ($) {
  wHelpPopupContent.forEach((whatsappForm) => {
    $(whatsappForm).submit(function (e) {
      e.preventDefault();
      wHelpCheckButton.forEach((btn) => {
        if (!btn.classList.contains("condition__checked")) {
          const chatAvailableTime = JSON.parse(
            chatAvailability?.getAttribute("data-availability")
          );
          if (chatAvailableTime) {
            const now = moment();
            const available = isAvailable(chatAvailableTime, now);
            if (available.isAvailable) {
              const form = $(this);
              $.post(
                frontend_scripts.ajaxurl,
                {
                  action: "handle_form_submission",
                  nonce: frontend_scripts.nonce,
                  name: form.find("#wHelp-name").val(),
                  message: form.find("#wHelp-message").val(),
                  template: whatsappForm.getAttribute("data-template"),
                  agent: whatsappForm.getAttribute("data-number"),
                },
                (response) => {
                  if (response.success) {
                    window.open(response.data.whatsAppURL, "_blank");
                    form[0].reset();
                  } else {
                    alert("Error processing request.");
                  }
                }
              ).fail(() => alert("Unexpected error occurred."));
            }
          }
        }
      });
    });
  });
})(jQuery);

/******************** 11. AUTO OPEN POPUP AFTER SECONDS ********************/
const authShowPopup = () => {
  if (autoShowPopup) toggleChatBtn();
};

if (autoOpenPopupTimeout > 0)
  setTimeout(authShowPopup, autoOpenPopupTimeout * 1000);
else authShowPopup();
