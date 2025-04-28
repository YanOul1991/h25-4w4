(function () {
    let carouselInputs = document.querySelectorAll(".hero__radio__input");
    let carouselImages = document.querySelectorAll(".hero__caroussel");

    let activeI = 0;

    carouselInputs.forEach((value) => value.addEventListener("click", updateCaroussel));

    // for (const input of carouselInputs) {
    //     input.addEventListener("click", updateCaroussel);
    //     console.log(input);
    // }

    let interval = setInterval(autoUpdateCaroussel, 5000);
    setInterval(interval);

    function updateCaroussel(event) {
        clearInterval(interval);
        console.log();
        
        activeI = new Number(event.target.getAttribute("data-id_radio"));
        
        for (let i = 0; i < carouselImages.length; i++) {
            carouselImages[i].classList.remove("displayed");
        }
        carouselImages[activeI].classList.add("displayed");
        
        interval = setInterval(autoUpdateCaroussel, 5000);
        setInterval(interval);
    }

    function autoUpdateCaroussel() {
        console.log("Start auto update");
        activeI = (activeI + 1) % carouselInputs.length;

        carouselInputs[activeI].checked = true;

        for (let i = 0; i < carouselImages.length; i++) {
            carouselImages[i].classList.remove("displayed");
        }

        carouselImages[activeI].classList.add("displayed");
    }
})()