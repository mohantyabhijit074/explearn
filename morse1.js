var a;
function correctanswer(clicked_id)
{
    a=clicked_id;
    var b=document.getElementById(a);
    b.style.backgroundColor="red";
}
function check()
{
    console.log(a);
    if(a=="btn0")
    {   
        var newelement=document.createElement("p");
        var bodyelement=document.getElementById("container2");
        var divelement=document.createElement("div");
        var insertelement=document.getElementById("continue")
        var imageelement=document.createElement("img");
        imageelement.setAttribute("src","morsecode/correct.JPG");
        imageelement.setAttribute("style","border-radius:50%");
        imageelement.setAttribute("style","width:70px");
        newelement.textContent="correct answer";
        divelement.appendChild(newelement);
        divelement.appendChild(imageelement);   
        divelement.setAttribute("style","background:#33ff33;width:200px;height:30px;border-radius:10px;margin:0 auto;text-align:center");
        bodyelement.insertBefore(divelement,insertelement);

    }
    else if (a==undefined){
        alert("You didn't choose any option");
    }
    else
    {
        var newelement=document.createElement("p");
        var bodyelement=document.getElementById("container2");
        var divelement=document.createElement("div");
        var insertelement=document.getElementById("continue")
        var imageelement=document.createElement("img");
        imageelement.setAttribute("src","morsecode/wrong1.JPG");
        imageelement.setAttribute("style","border-radius:50%");
        imageelement.setAttribute("style","width:70px");
        newelement.textContent="sorry wrong answer";
        divelement.appendChild(newelement);
        divelement.appendChild(imageelement);   
        divelement.setAttribute("style","background:red;width:200px;height:30px;border-radius:10px;margin:0 auto;text-align:center");
        bodyelement.insertBefore(divelement,insertelement);
    }
}
