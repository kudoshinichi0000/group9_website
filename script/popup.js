const viewBtn = document.querySelector(".view-modaal"),
    popuup = document.querySelector(".popuup"),
    close = popuup.querySelector(".close"),

    viewBtn.onclick = ()=>{
      popuup.classList.toggle("show");
    }
    close.onclick = ()=>{
      viewBtn.click();
    }


    }
