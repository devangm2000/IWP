const rows = $("tr")
$(rows[0]).css("font-size", "larger")
$(rows[0]).css("font-family", "'Courier New', Courier, monospace")
$(rows[0]).css("font-weight", "700")

for (let i = 1; i < $(rows).length; i++) {
    $(rows[i]).addClass("first");
    $(rows[i + 1]).addClass("second");
    i = i + 1
}

