(function() {
  // Union of Chrome, Firefox, IE, Opera, and Safari console methods
  var methods = ["assert", "assert", "cd", "clear", "count", "countReset",
    "debug", "dir", "dirxml", "dirxml", "dirxml", "error", "error", "exception",
    "group", "group", "groupCollapsed", "groupCollapsed", "groupEnd", "info",
    "info", "log", "log", "markTimeline", "profile", "profileEnd", "profileEnd",
    "select", "table", "table", "time", "time", "timeEnd", "timeEnd", "timeEnd",
    "timeEnd", "timeEnd", "timeStamp", "timeline", "timelineEnd", "trace",
    "trace", "trace", "trace", "trace", "warn"];
  var length = methods.length;
  var console = (window.console = window.console || {});
  var method;
  var noop = function() {};
  while (length--) {
    method = methods[length];
    // define undefined methods as noops to prevent errors
    if (!console[method])
      console[method] = noop;
  }
})();
$(window).load(function() {
	if ( $(".player-loader").length ) {
		$(".player-loader").hide();
		$(".play-button .fa").css("visibility", "visible");
	}
})
$(document).ready(function(){
	$(".fullscreen").on('click', function() {
		screenfull.request( document.getElementById('player') );
	});
        //loading video
        $(".player-loader").delay(9000).fadeOut();
	$(".play-button .fa,.cplay,.cvolu,.quality").on( "click", function() {
		var opening = "http://" + window.location.hostname + "/oc-content/themes/movie_one/images/opening.jpg",
		    loading = "http://" + window.location.hostname + "/oc-content/themes/movie_one/images/player-loading.gif";
		$(".play-button .fa").hide();
		$(".player-loader").show();
		setTimeout(function() { 
			$(".impl").attr( 'src', opening );
			$(".player-loader").fadeOut(3000);
			$(".progressbar").animate({
				width:"3%"
				},{
					queue: false,
					duration: 3000,
					complete: function() {
						console.log("ok");
						$("#controls").hide();
						$('#modal-login').modal({show: true, backdrop: 'static'});
					}
				});			
		},2000);
	});
});	
function centerModals(){
  $('.modal').each(function(i){
    var $clone = $(this).clone().css('display', 'block').appendTo('body');
    var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
    top = top > 0 ? top : 0;
    $clone.remove();
    $(this).find('.modal-content').css("margin-top", top);
  });
}
$('.modal').on('show.bs.modal', centerModals);
$(window).on('resize', centerModals);

$('.modal').on('hidden.bs.modal', function (e) {
    $(this).find('.modal-content').removeAttr('style');
    $(this).find('.modal-dialog').removeAttr('style');
});