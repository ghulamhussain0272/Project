function getTitle(title) {
    var regex1=new RegExp(/\d{4}/g);
    var blocks=document.getElementById("yearCorrection");
    if(!regex1.test(title))
    {
        blocks.style.display="block";
        blocks.innerText="year like 2001";
        blocks.style.width="40%";
        blocks.style.backgroundColor="Red";
    }
    else
    {
        blocks.style.display="none";
    }
}