/* Add here all your JS customizations */

(function( $ ) {
    "use strict;"
	//validation
	$('#w1 form').validate({
		rules:{
			password_confirm: {

				equalTo: "#password"
			}
		},
		messages:{
			password_confirm:{
				equalTo: "Passwords do not match."
			}
		}
	});
	/*
	Wizard #1
	*/
	var $w1finish = $('#w1').find('ul.pager li.finish'),
		$w1validator = $("#w1 form").validate({
		highlight: function(element) {
			$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		},
		success: function(element) {
			$(element).closest('.form-group').removeClass('has-error');
			$(element).remove();
		},
		errorPlacement: function( error, element ) {
			element.parent().append( error );
		}
	});



	$('#w1').bootstrapWizard({
		tabClass: 'wizard-steps',
		nextSelector: 'ul.pager li.next',
		previousSelector: 'ul.pager li.previous',
		firstSelector: null,
		lastSelector: null,
		onNext: function( tab, navigation, index, newindex ) {
			var validated = $('#w1 form').valid();
			if( !validated ) {
				$w1validator.focusInvalid();
				return false;
			}
		},
		onTabClick: function( tab, navigation, index, newindex ) {
			if ( newindex == index + 1 ) {
				return this.onNext( tab, navigation, index, newindex);
			} else if ( newindex > index + 1 ) {
				return false;
			} else {
				return true;
			}
		},
		onTabChange: function( tab, navigation, index, newindex ) {
			var totalTabs = navigation.find('li').size() - 1;
			$w1finish[ newindex != totalTabs ? 'addClass' : 'removeClass' ]( 'hidden' );
			$('#w1').find(this.nextSelector)[ newindex == totalTabs ? 'addClass' : 'removeClass' ]( 'hidden' );
		}
	});

}).apply( this, [ jQuery ]);


