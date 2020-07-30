/**
 * @author DarkCeptor44
 */
 
$(document).ready(function(){
 $('.btn[data-target]').click(function(){
 	var bar=$($(this).data('target'));
 	var initialAmount=$(bar).attr('aria-valuenow')+'%';
 	$(bar).css({'width':'100%'});
 	if($(bar).hasClass('dark-progress-bar-reset')){
 		setTimeout(function(){resetProgressBar(bar, initialAmount)},2000);
 	}
 });
 
 var resetProgressBar=function(progressBar, initialAmount){
 	$(progressBar).css('width',initialAmount);
 };
});