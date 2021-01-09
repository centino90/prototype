const createTip = (e) => {
  e.stopPropagation();
  const targ = e.target;
  const table = e.target.parentNode.parentNode.parentNode
  const ic = targ.querySelector('i')
  const w = e.target.getBoundingClientRect().width;
  if (w >= 176 && targ.textContent.length > 22 && !ic) {
    const toolTip = document.createElement("div");
    const tip = document.createElement("div");
    let x = targ.offsetTop,
      y = targ.offsetLeft;
    toolTip.classList.add("tooltip");
    tip.classList.add("tip");
    toolTip.style.top = x + 35 + "px";
    toolTip.style.left = y - 10 + "px";
    tip.style.top = x + 25 + "px";
    tip.style.left = y + "px";
    toolTip.textContent = targ.textContent;
    table.appendChild(toolTip);
    table.appendChild(tip);
  }
};
const removeTip = (e) => {
  e.stopPropagation();
  const table = e.target.parentNode.parentNode.parentNode;
  const tip = table.querySelectorAll(".tooltip, .tip");
  if (table.querySelector(".tooltip, .tip")) {
    tip.forEach((elem) => {
      console.log(1);
      elem.remove();
      return;
    });
  }
};

const tableElem = document.querySelectorAll("td, th");

tableElem.forEach((elem) => {
  elem.addEventListener("mouseover", createTip);
});

tableElem.forEach((elem) => {
  elem.addEventListener("mouseleave", removeTip);
});
