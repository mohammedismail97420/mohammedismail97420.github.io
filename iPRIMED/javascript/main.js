//Home page cutomer logos
$(document).ready(function () {
  $(".customer-logos").slick({
    centerMode: true,
    // centerPadding: '60px',
    slidesToShow: 6,
    autoplay: true,
    arrows: true,
    dots: false,
    pauseOnHover: false,
    autoplaySpeed: 1000,
    nextArrow: '<i class="fas fa-angle-right fa1 fa-2x"></i>',
    prevArrow: '<i class="fas fa-angle-left fa2 fa-2x"></i>',
    infinite: true,
    variableWidth: true,
    centerMode: false,
    initialSlide: 0,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 1,
        },
      },
    ],
  });
});

//Hamburger animation

// $(document).ready(function () {
//   if ($(window).width() > 991) {
//     $("#nav-mhweb-hamburger").click(function () {
//       $(this).toggleClass("open");
//     });
//   }
// });

//Dropdown open on hover
// $(document).ready(function () {
//   $(".dropdown, .btn-group").hover(function () {
//     var dropdownMenu = $(this).children(".dropdown-menu");
//     if (dropdownMenu.is(":visible")) {
//       dropdownMenu.parent().toggleClass("open");
//     }
//   });
// });

window.onload = function () {
  var elements = document.getElementsByTagName("*"),
    i;
  for (i in elements) {
    if (elements[i].hasAttribute && elements[i].hasAttribute("data-include")) {
      fragment(elements[i], elements[i].getAttribute("data-include"));
    }
  }

  function fragment(el, url) {
    var localTest = /^(?:file):/,
      xmlhttp = new XMLHttpRequest(),
      status = 0;

    xmlhttp.onreadystatechange = function () {
      /* if we are on a local protocol, and we have response text, we'll assume
       *  				things were sucessful */
      if (xmlhttp.readyState == 4) {
        status = xmlhttp.status;
      }
      if (localTest.test(location.href) && xmlhttp.responseText) {
        status = 200;
      }
      if (xmlhttp.readyState == 4 && status == 200) {
        el.outerHTML = xmlhttp.responseText;
      }
    };

    try {
      xmlhttp.open("GET", url, true);
      xmlhttp.send();
    } catch (err) {
      /* todo catch error */
    }
  }
};

//Email validation
function confirmEmail() {
  var email = document.getElementById("email").value;
  var confemail = document.getElementById("confemail").value;
  if (email != confemail) {
    alert("Email Not Matching!");
  }
}

// Open modal in marketing page
$(document).ready(function () {
  if (window.location.href.indexOf("#marketing") != -1) {
    $("#formmodal").modal("show");
  }
});

//LMS page text typing effect
$(document).ready(function () {
  var TxtRotate = function (el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = "";
    this.tick();
    this.isDeleting = false;
  };

  TxtRotate.prototype.tick = function () {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";

    var that = this;
    var delta = 150 - Math.random() * 100;

    if (this.isDeleting) {
      delta /= 2;
    }

    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === "") {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
    }

    setTimeout(function () {
      that.tick();
    }, delta);
  };

  window.onload = function () {
    var elements = document.getElementsByClassName("txt-rotate");
    for (var i = 0; i < elements.length; i++) {
      var toRotate = elements[i].getAttribute("data-rotate");
      var period = elements[i].getAttribute("data-period");
      if (toRotate) {
        new TxtRotate(elements[i], JSON.parse(toRotate), period);
      }
    }
  };
});
$(document).ready(function () {
  //DOM elements
  const DOMstrings = {
    stepsBtnClass: "multisteps-form__progress-btn",
    stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
    stepsBar: document.querySelector(".multisteps-form__progress"),
    stepsForm: document.querySelector(".multisteps-form__form"),
    stepsFormTextareas: document.querySelectorAll(".multisteps-form__textarea"),
    stepFormPanelClass: "multisteps-form__panel",
    stepFormPanels: document.querySelectorAll(".multisteps-form__panel"),
    stepPrevBtnClass: "js-btn-prev",
    stepNextBtnClass: "js-btn-next",
  };

  //remove class from a set of items
  const removeClasses = (elemSet, className) => {
    elemSet.forEach((elem) => {
      elem.classList.remove(className);
    });
  };

  //return exect parent node of the element
  const findParent = (elem, parentClass) => {
    let currentNode = elem;

    while (!currentNode.classList.contains(parentClass)) {
      currentNode = currentNode.parentNode;
    }

    return currentNode;
  };

  //get active button step number
  const getActiveStep = (elem) => {
    return Array.from(DOMstrings.stepsBtns).indexOf(elem);
  };

  //set all steps before clicked (and clicked too) to active
  const setActiveStep = (activeStepNum) => {
    //remove active state from all the state
    removeClasses(DOMstrings.stepsBtns, "js-active");

    //set picked items to active
    DOMstrings.stepsBtns.forEach((elem, index) => {
      if (index <= activeStepNum) {
        elem.classList.add("js-active");
      }
    });
  };

  //get active panel
  const getActivePanel = () => {
    let activePanel;

    DOMstrings.stepFormPanels.forEach((elem) => {
      if (elem.classList.contains("js-active")) {
        activePanel = elem;
      }
    });

    return activePanel;
  };

  //open active panel (and close unactive panels)
  const setActivePanel = (activePanelNum) => {
    //remove active class from all the panels
    removeClasses(DOMstrings.stepFormPanels, "js-active");

    //show active panel
    DOMstrings.stepFormPanels.forEach((elem, index) => {
      if (index === activePanelNum) {
        elem.classList.add("js-active");

        setFormHeight(elem);
      }
    });
  };

  //set form height equal to current panel height
  const formHeight = (activePanel) => {
    const activePanelHeight = activePanel.offsetHeight;

    DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
  };

  const setFormHeight = () => {
    const activePanel = getActivePanel();

    formHeight(activePanel);
  };

  //STEPS BAR CLICK FUNCTION
  DOMstrings.stepsBar.addEventListener("click", (e) => {
    //check if click target is a step button
    const eventTarget = e.target;

    if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
      return;
    }

    //get active button step number
    const activeStep = getActiveStep(eventTarget);

    //set all steps before clicked (and clicked too) to active
    setActiveStep(activeStep);

    //open active panel
    setActivePanel(activeStep);
  });

  //PREV/NEXT BTNS CLICK
  DOMstrings.stepsForm.addEventListener("click", (e) => {
    const eventTarget = e.target;

    //check if we clicked on `PREV` or NEXT` buttons
    if (
      !(
        eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) ||
        eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)
      )
    ) {
      return;
    }

    //find active panel
    const activePanel = findParent(
      eventTarget,
      `${DOMstrings.stepFormPanelClass}`
    );

    let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(
      activePanel
    );

    //set active step and active panel onclick
    if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
      activePanelNum--;
    } else {
      activePanelNum++;
    }

    setActiveStep(activePanelNum);
    setActivePanel(activePanelNum);
  });

  //SETTING PROPER FORM HEIGHT ONLOAD
  window.addEventListener("load", setFormHeight, false);

  //SETTING PROPER FORM HEIGHT ONRESIZE
  window.addEventListener("resize", setFormHeight, false);
});
