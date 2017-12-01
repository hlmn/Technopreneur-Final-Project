$(document).ready(function(){

	var i=0;

	$('#text').click(function(){
		var $text = $('<div class="panel-group" id="parent"><div class="panel panel-default"><div class="panel-heading"><div class="row"><a data-toggle="collapse" href="#collapse'+i+'"><div class="col-sm-10"><h4 class="panel-title" align="left" >Text</h4></div></a><div class="col-sm-2" align="right"><a id="up"><span class="glyphicon glyphicon-chevron-up"></span></a>&nbsp;<a id="down"><span class="glyphicon glyphicon-chevron-down"></span></a>&nbsp;&nbsp;<a href="#" id="remove"><span class="glyphicon glyphicon-trash"></span></a></div></div><div id="collapse'+i+'" class="panel-collapse collapse"><div class="panel-body"><div class="row"><div class="form-group col-md-11"><label class="control-label" for="focusedInput">Question</label><textarea cols="120" style="overflow:hidden;" class="form-control" id="focusedInput" type="text" name="text|'+i+'" placeholder="type your question"></textarea></div><div class="col-md-1">Required?<select id="selectbasic" name="required|'+i+'" class="form-control"><option value="yes">Yes</option><option value="no">No</option></select></div></div></div></div></div></div></div>');
		$text.appendTo("#label1");
		i++;
	});	

	$('#longtext').click(function(){
		var $longtext = $('<div class="panel-group" id="parent"><div class="panel panel-default"><div class="panel-heading"><div class="row"><a data-toggle="collapse" href="#collapse'+i+'"><div class="col-sm-10"><h4 class="panel-title" align="left" > Long Text</h4></div></a><div class="col-sm-2" align="right"><a id="up"><span class="glyphicon glyphicon-chevron-up"></span></a>&nbsp;<a id="down"><span class="glyphicon glyphicon-chevron-down"></span></a>&nbsp;&nbsp;<a href="#" id="remove"><span class="glyphicon glyphicon-trash"></span></a></div></div><div id="collapse'+i+'" class="panel-collapse collapse"><div class="panel-body"><div class="row"><div class="form-group col-md-11"><label class="control-label" for="focusedInput">Question</label><textarea cols="120" style="overflow:hidden;" class="form-control" id="focusedInput" type="text" name="longtext|'+i+'" placeholder="type your question"></textarea></div><div class="col-md-1">Required?<select id="selectbasic" name="required|'+i+'" class="form-control"><option value="yes">Yes</option><option value="no">No</option></select></div></div></div></div></div></div></div>');
		$longtext.appendTo("#label1");
		i++;
	});

	$('#radiobutton').click(function(){
		var $radio = $('<div class="panel-group" id="parent"><div class="panel panel-default"><div class="panel-heading"><div class="row"><a data-toggle="collapse" href="#collapse'+i+'"><div class="col-sm-10"><h4 class="panel-title" align="left" >Radio Button</h4></div></a><div class="col-sm-2" align="right"><a id="up"><span class="glyphicon glyphicon-chevron-up"></span></a>&nbsp;<a id="down"><span class="glyphicon glyphicon-chevron-down"></span></a>&nbsp;&nbsp;<a href="#" id="remove"><span class="glyphicon glyphicon-trash"></span></a></div></div><div id="collapse'+i+'" class="panel-collapse collapse"><div class="panel-body"><div class="row"><div class="form-group col-md-11"><label class="control-label" for="focusedInput">Question</label><textarea cols="120" style="overflow:hidden;" class="form-control" id="focusedInput" type="text" name="radiobutton|'+i+'" placeholder="type your question"></textarea></div><div class="col-md-1">Required?<select id="selectbasic" name="required|'+i+'" class="form-control"><option value="yes">Yes</option><option value="no">No</option></select></div></div><div id="addRadio" class="child"><label>Answer  </label>&nbsp;&nbsp;<a id="createRadio"><span class="glyphicon glyphicon-plus"></span></a></div></div></div></div></div></div>');
		// console.log("i = "+i);
		$radio.appendTo("#label1");
		i++;
	});

	$('#checkbox').click(function(){
		var $check = $('<div class="panel-group" id="parent"><div class="panel panel-default"><div class="panel-heading"><div class="row"><a data-toggle="collapse" href="#collapse'+i+'"><div class="col-sm-10"><h4 class="panel-title" align="left" >Check Box</h4></div></a><div class="col-sm-2" align="right"><a id="up"><span class="glyphicon glyphicon-chevron-up"></span></a>&nbsp;<a id="down"><span class="glyphicon glyphicon-chevron-down"></span></a>&nbsp;&nbsp;<a href="#" id="remove"><span class="glyphicon glyphicon-trash"></span></a></div></div><div id="collapse'+i+'" class="panel-collapse collapse"><div class="panel-body"><div class="row"><div class="form-group col-md-11"><label class="control-label" for="focusedInput">Question</label><textarea cols="120" style="overflow:hidden;" class="form-control" id="focusedInput" type="text" name="checkbox|'+i+'" placeholder="type your question"></textarea></div><div class="col-md-1">Required?<select id="selectbasic" name="required|'+i+'" class="form-control"><option value="yes">Yes</option><option value="no">No</option></select></div></div><div id="addCheck" class="child"><label>Answer  </label>&nbsp;&nbsp;<a id="createCheck"><span class="glyphicon glyphicon-plus"></span></a></div></div></div></div></div></div>');
		$check.appendTo("#label1");
		i++;
	});

	$('#date').click(function(){
		var $date = $('<div class="panel-group" id="parent"><div class="panel panel-default"><div class="panel-heading"><div class="row"><a data-toggle="collapse" href="#collapse'+i+'"><div class="col-sm-10"><h4 class="panel-title" align="left" >Date</h4></div></a><div class="col-sm-2" align="right"><a id="up"><span class="glyphicon glyphicon-chevron-up"></span></a>&nbsp;<a id="down"><span class="glyphicon glyphicon-chevron-down"></span></a>&nbsp;&nbsp;<a href="#" id="remove"><span class="glyphicon glyphicon-trash"></span></a></div></div><div id="collapse'+i+'" class="panel-collapse collapse"><div class="panel-body"><div class="row"><div class="form-group col-md-11"><label class="control-label" for="focusedInput">Question</label><textarea cols="120" style="overflow:hidden;" class="form-control" id="focusedInput" type="text" name="date|'+i+'" placeholder="type your question"></textarea></div><div class="col-md-1">Required?<select id="selectbasic" name="required|'+i+'" class="form-control"><option value="yes">Yes</option><option value="no">No</option></select></div></div></div></div></div></div></div>');
		$date.appendTo("#label1");
		i++;
	});

	$('#select').click(function(){
		var $select = $('<div class="panel-group" id="parent"><div class="panel panel-default"><div class="panel-heading"><div class="row"><a data-toggle="collapse" href="#collapse'+i+'"><div class="col-sm-10"><h4 class="panel-title" align="left" >Select</h4></div></a><div class="col-sm-2" align="right"><a id="up"><span class="glyphicon glyphicon-chevron-up"></span></a>&nbsp;<a id="down"><span class="glyphicon glyphicon-chevron-down"></span></a>&nbsp;&nbsp;<a href="#" id="remove"><span class="glyphicon glyphicon-trash"></span></a></div></div><div id="collapse'+i+'" class="panel-collapse collapse"><div class="panel-body"><div class="row"><div class="form-group col-md-11"><label class="control-label" for="focusedInput">Question</label><textarea cols="120" style="overflow:hidden;" class="form-control" id="focusedInput" type="text" name="select|'+i+'" placeholder="type your question"></textarea></div><div class="col-md-1">Required?<select id="selectbasic" name="required|'+i+'" class="form-control"><option value="yes">Yes</option><option value="no">No</option></select></div></div><div id="addSelect" class="child"><label>Answer  </label>&nbsp;&nbsp;<a id="createSelect"><span class="glyphicon glyphicon-plus"></span></a></div></div></div></div></div></div>');
		$select.appendTo("#label1");
		i++;
	});

	$('body').on('click','#remove',function(){
		$(this).closest('div.panel-group').remove(); 
	});
});

function UpR(k) {
	var parent = k.parents('.panel-group');
	var pos = parent.prev();
	parent.insertBefore(pos);
}

function DownR(k) {
	var parent = k.parents('.panel-group');
	var pos = parent.next();
	parent.insertAfter(pos);
}

$('body').on('click', '#up', function () {
	UpR($(this));
});

$('body').on('click', '#down', function () {
	DownR($(this));
});

var j = 3;
$('body').on('click','#createSelect',function(){
	$(this).closest('div.child').append('<div class="child"><input type="form-control" name="selectans|'+j+'" type="text" placeholder="type your answer"><a href="#" id="removechild"><span class="glyphicon glyphicon-trash"></span></a></div>');
	j++;
});

$('body').on('click','#createRadio',function(){
	$(this).closest('div.child').append('<div class="child"><input class="pilihan" type="form-control" name="radioans|'+j+'" type="text" placeholder="type your answer"><a href="#" id="removechild"><span class="glyphicon glyphicon-trash"></span></a></div>');
	j++;
});

$('body').on('click','#createCheck',function(){
	$(this).closest('div.child').append('<div class="child"><input type="form-control" name="checkboxans|'+j+'" type="text" placeholder="type your answer"><a href="#" id="removechild"><span class="glyphicon glyphicon-trash"></span></a></div>');
	j++;
});


$('body').on('click','#removechild',function(){
	$(this).closest('div.child').remove(); 
});