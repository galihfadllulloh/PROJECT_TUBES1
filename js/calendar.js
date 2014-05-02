/**
 * calendar Version 0.1
 * Heru Dwi Saputra, January 2009
 * Copyright (c) 2009 eighteen_dw@yahoo.com.
 */
 
 function leapYear(year) {
 	if (year % 4 == 0) // basic rule
 		return true // is leap year
 	/* else */ // else not needed when statement is "return"
 	return false // is not leap year
 }
 
 function getDays(month, year) {
 	// create array to hold number of days in each month
 	var ar = new Array(12)
 	ar[0] = 31 // January
 	ar[1] = (leapYear(year)) ? 29 : 28 // February
 	ar[2] = 31 // March
 	ar[3] = 30 // April
 	ar[4] = 31 // May
 	ar[5] = 30 // June
 	ar[6] = 31 // July
 	ar[7] = 31 // August
 	ar[8] = 30 // September
 	ar[9] = 31 // October
 	ar[10] = 30 // November
 	ar[11] = 31 // December
 
 	// return number of days in the specified month (parameter)
 	return ar[month]
 }
 
 function getMonthName(month) {
 	// create array to hold name of each month
 	var ar = new Array(12)
 	ar[0] = "January"
 	ar[1] = "February"
 	ar[2] = "March"
 	ar[3] = "April"
 	ar[4] = "May"
 	ar[5] = "June"
 	ar[6] = "July"
 	ar[7] = "August"
 	ar[8] = "September"
 	ar[9] = "October"
 	ar[10] = "November"
 	ar[11] = "December"
 	
 	// return name of specified month (parameter)
 	return ar[month]
 }
 
 function setCal() {
 	// standard time attributes
 	var now = new Date()
 	var year = now.getYear()
 	if (year < 1000)
 		year+=1900
 	var month = now.getMonth()
 	var monthName = getMonthName(month)
 	var date = now.getDate()
 	now = null
 
 	// create instance of first day of month, and extract the day on which it occurs
 	var firstDayInstance = new Date(year, month, 1)
 	var firstDay = firstDayInstance.getDay()
 	firstDayInstance = null
 
 	// number of days in current month
 	var days = getDays(month, year)
 	
 	// call function to draw calendar
 	drawCal(firstDay + 1, days, date, monthName, year)
 }
 
 function drawCal(firstDay, lastDate, date, monthName, year) {
 	// constant table settings
 	var headerHeight = 15 // height of the table's header cell
 	var border = 0 // 3D height of table's border
 	var borderColor = "#24A2D3" // color of table's border
 	var cellspacing = 0 // width of table's border
 	var cellpadding = 0 // width of table's padding
 	var headerColor = "#FFFFFF" //"midnightblue" // color of table's header
 	var headerSize = "+1" // size of tables header font
 	var colWidth = 18 // width of columns in table
 	var dayCellHeight = 10 // height of cells containing days of the week
 	var dayColor = "#000000" // color of font representing week days
 	var cellHeight = 10 // height of cells representing dates in the calendar
 	var todayColor = "red" // color specifying today's date in the calendar
 	var headerBgColor = "#24A2D3" // color of background table's header
 	var dayBgColor = "#85CEFF" // color of background table's day
 	var styleClass = "calendar" // style table css
 	var bgColor="#FFFFFF" // default background column
 
 	// create basic table structure
 	var text = "" // initialize accumulative variable to empty string
 	text += '<CENTER>'
 	text += '<TABLE BORDER=' + border + ' BORDERCOLOR=' + borderColor + ' CELLPADDING=' + cellpadding + ' CELLSPACING=' + cellspacing + ' CLASS='+ styleClass +'>' // table settings
 	text += '<TH COLSPAN=7 HEIGHT=' + headerHeight + ' BGCOLOR=' + headerBgColor + '>' // create table header cell
 	text += '<FONT COLOR="' + headerColor + '" SIZE=' + headerSize + '>' // set font for table header
 	text += monthName + ' ' + year 
 	text += '</FONT>' // close table header's font settings
 	text += '</TH>' // close header cell
 	
 	// variables to hold constant settings
 	var openCol = '<TD BGCOLOR=' + dayBgColor + ' WIDTH=' + colWidth + ' HEIGHT=' + dayCellHeight + '>'
 	openCol += '<FONT COLOR="' + dayColor + '">'
 	var closeCol = '</FONT></TD>'
 
 	// create array of abbreviated day names
 	var weekDay = new Array(7)
 	weekDay[0] = "S"
 	weekDay[1] = "M"
 	weekDay[2] = "T"
 	weekDay[3] = "W"
 	weekDay[4] = "T"
 	weekDay[5] = "F"
 	weekDay[6] = "S"
 
 	// create first row of table to set column width and specify week day
 	text += '<TR ALIGN="center" VALIGN="center">'
 	for (var dayNum = 0; dayNum < 7; ++dayNum) {
 		text += openCol + weekDay[dayNum] + closeCol 
 	}
 	text += '</TR>'
 
 	// declaration and initialization of two variables to help with tables
 	var digit = 1
 	var curCell = 1
 
 	for (var row = 1; row <= Math.ceil((lastDate + firstDay - 1) / 7); ++row) {
 		text += '<TR ALIGN="center" VALIGN="center">'
 		for (var col = 1; col <= 7; ++col) {
 			if(col==1) bgColor =  "#DFF9FA";
 			else bgColor =  "#EEF9FD";
 		
 		
 			if (digit > lastDate) {
 				text += '<TD BGCOLOR='+ bgColor +' CLASS='+ styleClass +'>&nbsp;</TD>';
 			}
 			else {
				if (curCell < firstDay) {
					text += '<TD BGCOLOR='+ bgColor +' CLASS='+ styleClass +'>&nbsp;</TD>';
					curCell++;
				} else {
					// today
					if (digit == date) { // current cell represent today's date
						text += '<TD BGCOLOR='+ bgColor +' HEIGHT=' + cellHeight + ' CLASS='+ styleClass +'>'
						text += '<STRONG><FONT COLOR="' + todayColor + '">'
						text += digit
						text += '</FONT></STRONG>'
						text += '</TD>'
					} else
						text += '<TD BGCOLOR='+ bgColor +' HEIGHT=' + cellHeight + ' CLASS='+ styleClass +'>' + digit + '</TD>' // others day
					digit++
				}
			}
 		}
 		text += '</TR>'
 	}
 
 	// close all basic table tags
 	text += '</TABLE>'
 	text += '</CENTER>'
 	
 	// print accumulative HTML string
 	document.write(text) 
 }
 DFF9FA
  bgcolor="#DFF9FA"