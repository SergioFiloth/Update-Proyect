fean.style.marginTop = `${hNavbar}px`;

// a in the variables is aside

let aa = document.getElementById("advertiser"),
    ao = document.getElementById("orders"),
    aso = document.getElementById("so"),
    adadr = document.getElementById("dadr"),
    af = document.getElementById("funds"),
    // B in the variables is body
    ba = document.getElementById("advertiserB"),
    bo = document.getElementById("ordersB"),
    bso = document.getElementById("soB"),
    bdadr = document.getElementById("dadrB"),
    bf = document.getElementById("fundsB"),
    pp = document.getElementById("publisher"),
    pw = document.getElementById("websites"),
    pe = document.getElementById("earning"),
    bp = document.getElementById("publisherP"),
    bw = document.getElementById("websitesP"),
    be = document.getElementById("earningP"),
    bo = document.getElementById("ordersB")

// The conditionals for addthe class active the page what are active
// Conditionals for advertiser
if (ba) {
    aa.classList.add("active")
}
if (bo) {
    ao.classList.add("active")
}
if (bso) {
    aso.classList.add("active")
}
if (bdadr) {
    dadr.classList.add("active")
}
if (bf) {
    af.classList.add("active")
}
// Conditionals for publisher

if (bp) {
    pp.classList.add("active")
}
if (bw) {
    pw.classList.add("active")
}
if (bo) {
    ao.classList.add("active")
}
if (be) {
    pe.classList.add("active")
}