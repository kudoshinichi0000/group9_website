const viewBtn = document.querySelector(".view-modal1"),
    popupm = document.querySelector(".popupm"),
    close = popupm.querySelector(".close"),
    field = popupm.querySelector(".fieldd"),
    input = fieldd.querySelector("input"),
    copy = fieldd.querySelector("buttonEnter");

    viewBtn.onclick = ()=>{
      popupm.classList.toggle("show");
    }
    close.onclick = ()=>{
      viewBtn.click();
    }

    copy.onclick = ()=>{
      input.select(); //select input value
      if(document.execCommand("copy")){ //if the selected text copy
        field.classList.add("active");
        copy.innerText = "Copied";
        setTimeout(()=>{
          window.getSelection().removeAllRanges(); //remove selection from document
          fieldd.classList.remove("active");
          copy.innerText = "Copy";
        }, 3000);
      }
    }
