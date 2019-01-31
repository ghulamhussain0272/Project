function getTitle(title) {
    var regex1=new RegExp(/^((0[1-9])|(1[0-9])|(3[0-1]))\s((0?[1-9])|1[0-2])\s\d{4}$/g);
    var blocks=document.getElementById("yearCorrection");
    if(!regex1.test(title))
    {
        blocks.style.display="block";
        blocks.innerText="day month year like as    03 12 2001";
        blocks.style.width="40%";
        blocks.style.backgroundColor="Red";
    }
    else
    {
        blocks.style.display="none";
    }
}
function validForm() {
    var regex1=new RegExp(/^((0[1-9])|(1[0-9])|(3[0-1]))\s((0?[1-9])|1[0-2])\s\d{4}$/g);
    var blocks=document.getElementById("yearCorrection");
    var title=document.getElementById("years").value;
    if(!regex1.test(title))
    {
        blocks.style.display="block";
        blocks.innerText="day month year like as    03 12 2001";
        blocks.style.width="40%";
        blocks.style.backgroundColor="Red";
        return 0;
    }
    else
    {
        blocks.style.display="none";
        return 1;
    }
}