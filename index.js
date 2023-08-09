"use strict";

function ghs__(tag) {
  return document.querySelector(tag);
}

ghs__("#search-icon").onclick = () => {
  var open = ghs__("#nav-search").getAttribute("open");
  if (open === "yes") {
    ghs__("#nav-search").style.display = "none";
    ghs__("#nav-search").setAttribute("open", "no");
  } else {
    ghs__("#nav-search").style.display = "block";
    ghs__("#nav-search").setAttribute("open", "yes");
  }
};

/*   GETTING THE RESULTS   */

ghs__("#searchsubmit").onclick = (e) => {
  e.preventDefault();
  var ein = document.querySelector(".ein").value;
  var pass = ghs__(".password").value;
  var rool = ghs__(".rol").value;
    var reg = ghs__(".reg").value;
  console.log(ein+pass+rool+reg);
};
