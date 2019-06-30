$('input.datepicker').datepicker({
		dateFormat: 'yy-mm-dd',
		showButtonPanel: true,
		changeMonth: true,
		changeYear: true,
		defaultDate: +0,
          minDate: 0 ,
		showAnim: "fold"
	});

$('.datepicker2').datepicker({
		dateFormat: 'yy-mm-dd',
		showButtonPanel: true,
		changeMonth: true,
		changeYear: true,
		defaultDate: +0,
	    minDate: 0 ,
		showAnim: "fold",
		 onSelect: function(){
        var selected = $(this).val();
       $('input[id="xxx"]').val(selected);
       //alert('sj');
       //alert(selected);

         $('.dtpicker').focus(1000);
        }
	}).change(function(){
     //$('.dtpicker').focus();
});
	
	$('.dtpicker').datepicker({
		dateFormat: 'yy-mm-dd',
		showButtonPanel: true,
		changeMonth: true,
		changeYear: true,
		defaultDate: +0,
		 minDate:new Date($("#xxx").val()),
		showAnim: "fold",

	});