function calculatePrice(registration_form) {
	var elt = document.getElementById("full_students");
	var full_students = elt.options[elt.selectedIndex].value;
	full_students = parseInt(full_students);
	full_students = full_students * 360;
	
	
	var elt = document.getElementById("full_nonstudents");
	var full_nonstudents = elt.options[elt.selectedIndex].value;
	full_nonstudents = parseInt(full_nonstudents);
	full_nonstudents = full_nonstudents * 440;
	
	
	var elt = document.getElementById("daily_students");
	var daily_students = elt.options[elt.selectedIndex].value;
	daily_students = parseInt(daily_students);
	daily_students = daily_students * 122;
	
		
	var elt = document.getElementById("daily_nonstudents");
	var daily_nonstudents = elt.options[elt.selectedIndex].value;
	daily_nonstudents = parseInt(daily_nonstudents);
	daily_nonstudents = daily_nonstudents * 155;
	
	
	var elt = document.getElementById("bag");
	var bag = elt.options[elt.selectedIndex].value;
	bag = parseInt(bag);
	bag = bag * 70;
	
	
	var elt = document.getElementById("excursion");
	var excursion = elt.options[elt.selectedIndex].value;
	excursion = parseInt(excursion);
	excursion = excursion * 35;
	
	
	var elt = document.getElementById("lunch");
	var lunch = elt.options[elt.selectedIndex].value;
	lunch = parseInt(lunch);
	lunch = lunch * 40;
	
	
	var elt = document.getElementById("dinner");
	var dinner = elt.options[elt.selectedIndex].value;
	dinner = parseInt(dinner);
	dinner = dinner * 40;
	
	var total = full_students + full_nonstudents + daily_students + daily_nonstudents + bag + excursion + lunch + dinner;
	
	document.getElementById("price").value=total;
}