// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()


  $(".toggle-password-icon").click(function() {

    $(this).toggleClass("clicked");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });


  $(".toggleIcon a.toggle-btn").click(function() {
    $(".sideNavbar").toggleClass('close');
    $(".main-wrapper").toggleClass('p-0');
    $("header").toggleClass('ps-0');
  });

  
  $(".toggleIcon a.mob-search-btn").click(function() {
    $(".headerSearch").toggleClass('show');
  });
  
  $("#add-opt").click(function() {
    $("#upModal").addClass('show','fade');
  });
  $("#upModal-close").click(function() {
    $(".upModal").removeClass('show');
  });


  $("#add-opt-comp").click(function() {
    $("#upModal2").addClass('show','fade');
  });
  $("#upModal2-close").click(function() {
    $("#upModal2").removeClass('show','fade');
  });

  $("#add-opt-ques").click(function() {
    $("#upModal3").addClass('show','fade');
  });
  $("#upModal3-close").click(function() {
    $("#upModal3").removeClass('show','fade');
  });
  
  $("#add-opt-ans").click(function() {
    $("#upModal4").addClass('show','fade');
  });
  $("#upModal4-close").click(function() {
    $("#upModal4").removeClass('show','fade');
  });

  $("#add-opt-prob").click(function() {
    $("#upModal5").addClass('show','fade');
  });
  $("#upModal5-close").click(function() {
    $("#upModal5").removeClass('show','fade');
  });



  $("#add-opt-ques-2").click(function() {
    $("#upModal6").addClass('show','fade');
  });
  $("#upModal6-close").click(function() {
    $("#upModal6").removeClass('show','fade');
  });
  $("#add-opt-ans-2").click(function() {
    $("#upModal7").addClass('show','fade');
  });
  $("#upModal7-close").click(function() {
    $("#upModal7").removeClass('show','fade');
  });






  
  $(".showMore_btn").click(function() {
    $(this).toggleClass('show');
    $(".showAll").toggleClass('show');
  });

  
  $("#addArticle").click(function() {
    $(".addArticleWizard").slideToggle(200);
    $(".addArticleWizard-moreOpt").slideUp(100);
  });

  $("#addArticle-wizard").click(function() {
    $(".addArticleWizard-moreOpt").slideToggle(100);
  });





  const selectedAll = document.querySelectorAll(".wrapper-dropdown");

selectedAll.forEach((selected) => {
  const optionsContainer = selected.children[2];
  const optionsList = selected.querySelectorAll("div.wrapper-dropdown li");

  selected.addEventListener("click", () => {
    let arrow = selected.children[1];

    if (selected.classList.contains("active")) {
      handleDropdown(selected, arrow, false);
    } else {
      let currentActive = document.querySelector(".wrapper-dropdown.active");

      if (currentActive) {
        let anotherArrow = currentActive.children[1];
        handleDropdown(currentActive, anotherArrow, false);
      }

      handleDropdown(selected, arrow, true);
    }
  });

  // update the display of the dropdown
  for (let o of optionsList) {
    o.addEventListener("click", () => {
      selected.querySelector(".selected-display").innerHTML = o.innerHTML;
    });
  }
});

// check if anything else ofther than the dropdown is clicked
window.addEventListener("click", function (e) {
  if (e.target.closest(".wrapper-dropdown") === null) {
    closeAllDropdowns();
  }
});

// close all the dropdowns
function closeAllDropdowns() {
  const selectedAll = document.querySelectorAll(".wrapper-dropdown");
  selectedAll.forEach((selected) => {
    const optionsContainer = selected.children[2];
    let arrow = selected.children[1];

    handleDropdown(selected, arrow, false);
  });
}

// open all the dropdowns
function handleDropdown(dropdown, arrow, open) {
  if (open) {
    arrow.classList.add("rotated");
    dropdown.classList.add("active");
  } else {
    arrow.classList.remove("rotated");
    dropdown.classList.remove("active");
  }
}
