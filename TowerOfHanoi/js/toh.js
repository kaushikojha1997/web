$(document).ready(function(){
	var towers=[[[],$(".line1")],[[],$(".line2")],[[],$(".line3")]];
	var discs=5;
	var moves=0;
	var hold=null;

	init();

	function clear() {
		towers[0][1].empty();
		towers[1][1].empty();
		towers[2][1].empty();
	}
	$('.mode').click(function () {
		$('.mode').removeClass('selected');
		$(this).addClass('selected');
		init();
	});

	function init() {
		clear();
		moves=0;
		hold=null;
		$('#reset').text("Restart");
		towers=[[[],$(".line1")],[[],$(".line2")],[[],$(".line3")]];
		
		discs=$('.selected').attr("value");
		for (var i = discs; i > 0; i--) towers[0][0].push(i);
			drawdiscs();
		$(".moves").text(moves + " moves");
	}

	function drawdiscs() {
		clear();
		for (var i = 0; i < 3; i++) {
			if(!$.isEmptyObject(towers[i][0])){
				for (var j = 0; j < towers[i][0].length; j++) {
					towers[i][1].append(
					$("<span id='disc"
						+towers[i][0][j]+
						"' value='"
						+towers[i][0][j]+"'></span>"
						)
					);
				}
			}
		}
	}

	function handle(tower) {
		if(hold===null){
			if (!$.isEmptyObject(towers[tower][0])) {
				hold=tower;
				towers[hold][1].children().last().css("margin-top","-150px");
			}
		}else{
			var move=moveDisc(hold,tower);
			if(hold==tower)
				moves-=1;
				if(move==1){
					moves+=1;
					drawdiscs();
					hold=null;
					$(".moves").text(moves +" moves");
				}else{
					alert("You Cannot place bigger disc on a smaller one");					
				}
			}
		if (solved()) {
			 
			$('#reset').text("Play Again ?");
			$(".moves").text("Solved With " +moves +" moves");
			moves=0;
			
		}
	}

	function moveDisc(a,b) {
		var from=towers[a][0];
		var to=towers[b][0];

		if(from.length==0) return 0;
		else if(to.length==0) {
			to.push(from.pop());
			return 1;
		}else if(from[from.length -1]>to[to.length -1]){
			return 0;
		}else{
			to.push(from.pop());
			return 1;
		}
	}

	function solved() {
		if($.isEmptyObject(towers[0][0]) &&
			$.isEmptyObject(towers[1][0])&&
			towers[2][0].length==discs)
			return 1;
		else
			return 0;
	}	

		$('.t').click(function () {
		handle($(this).attr("value"));
		});
	
	$('#reset').click(init);

});
