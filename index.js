const tableElem = document.querySelectorAll('td, th');

tableElem.forEach((elem) => {
    elem.addEventListener('mouseover', e => {
        e.stopPropagation()
        const table = e.target.parentNode.parentNode.parentNode
        const toolTip = document.createElement('div')
        var x = e.target.offsetTop,
            y = e.target.offsetLeft
        // const att = document.createAttribute('full-detail')
        // att.value = e.target.textContent
        toolTip.classList.add('tooltip')
        toolTip.style.top = (x + 35) + 'px';
        toolTip.style.left = (y) + 'px';
        toolTip.textContent = e.target.textContent
        e.target.parentNode.parentNode.parentNode.appendChild(toolTip)

    })
})

tableElem.forEach((elem) => {
    elem.addEventListener('mouseleave', e => {
        e.stopPropagation()
        const table = e.target.parentNode.parentNode.parentNode
        const tip = table.querySelector('div')
        if (table.querySelector('div')) {
            console.log(tip)
            tip.remove()
            return
        }
    })
})
