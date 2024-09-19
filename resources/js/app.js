import './bootstrap';
/* ==================== Show Menu ==================== */
const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId);
    const nav = document.getElementById(navId);
  
    toggle.addEventListener("click", () => {
      //   adding show__menu class
      nav.classList.toggle("show__menu");
  
      //   add show-icon to show and hide the menu icon
      toggle.classList.toggle("show__icon");
    });
  };
  
  showMenu("nav-toggle", "nav-menu");
  
  /* ==================== Show Dropdown Menu ==================== */
  const dropdownItems = document.querySelectorAll(".dropdown__item");
  
  // 1) Select each dropdown item
  dropdownItems.forEach((item) => {
    const dropdownButton = item.querySelector(".dropdown__button");
  
    // 2) Select each button click
    dropdownButton.addEventListener("click", () => {
      // 7. Select the current show__dropdown class
      const showDropdown = document.querySelector(".show__dropdown");
  
      // 5. Call the toggleItem function
      toggleItem(item);
  
      // 8. Remove the show__dropdown from other items
      if (showDropdown && showDropdown != item) {
        toggleItem(showDropdown);
      }
    });
  });
  
  // 3) Create a function to display the dropdown
  const toggleItem = (item) => {
    // 3.1) Select each dropdown content
    const dropdownContainer = item.querySelector(".dropdown__container");
  
    // 6. If the same item contains the show__dropdown class, remove
    if (item.classList.contains("show__dropdown")) {
      dropdownContainer.removeAttribute("style");
      item.classList.remove("show__dropdown");
    } else {
      // 4. Add the maximum height to the dropdown content and add the show__dropdown class
      dropdownContainer.style.height = dropdownContainer.scrollHeight + "px";
      item.classList.add("show__dropdown");
    }
  };
  
  /* ==================== Delete Dropdown Styles ==================== */
  const mediaQuery = matchMedia("(min-width: 1118px)");
  const dropdownContainer = document.querySelectorAll(".dropdown__container");
  
  // Function to remove dropdown styles in mobile mode or browser resizes
  const removeStyle = () => {
    // Validate if the media query reaches 1118px
    if (mediaQuery.matches) {
      // Remove the dropdown container height style
      dropdownContainer.forEach((e) => {
        e.removeAttribute("style");
      });
  
      // Remove the show__dropdown class from dropdown item
      dropdownItems.forEach((e) => {
        e.classList.remove("show__dropdown");
      });
    }
  };
  
  addEventListener("resize", removeStyle);
  