function onMouse(obj,val) {
    var idx = obj.rowIndex;
    if (val == '1') {
	obj.className = "mouseOver";
    } else {
	if (idx % 2 == 0)
	    obj.className = "even";
	else
	    obj.className = "odd";
    }
}