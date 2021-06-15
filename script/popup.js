const viewBtn = document.querySelector(".view-modaal"),
    popuup = document.querySelector(".popuup"),
    close = popuup.querySelector(".close"),
    input = field.querySelector("input"),
    copy = field.querySelector("button");

    viewBtn.onclick = ()=>{
      popuup.classList.toggle("show");
    }
    close.onclick = ()=>{
      viewBtn.click();
    }

    
