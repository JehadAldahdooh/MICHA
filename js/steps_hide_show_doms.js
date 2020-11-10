    $(document).ready(function() {
        //$('#recordModal_expr').modal('hide');
        $("#templatemo_content_top").click(function() {
            //$(this).fadeOut();
            console.log("sdsdsdsss");
            $('html,body').animate({
                scrollTop: $(".moveto").offset().top
            }, 'slow');
            document.getElementById("style1").style.display = "none";
            document.getElementById("style2").style.display = "none";
            document.getElementById("style3").style.display = "none";
            document.getElementById("style_upload").style.display = "block";
        });

        $('#link').click(function(e) {
            e.preventDefault();
            console.log("sdsds");
            document.getElementById("dropme").style.display = "none";
			
			document.getElementById("tab_forms").style.display = "block";
$('#link').removeClass('button-hand');
$('#ExportReporttoExcel').addClass('button-hand');





            //document.getElementById("expr_whole").style.display = "block";
          //  document.getElementById("cell_whole").style.display = "none";
            //document.getElementById("an_whole").style.display = "none";
          //  document.getElementById("banner_right").style.display = "none";
            //document.getElementById("annotate_banner").style.display = "block";
            //document.getElementById("banner_left_annotate").style.display = "block";
           // document.getElementById("banner_left").style.display = "none";
        });

        $('#expr_form_banner').click(function(e) {
            e.preventDefault();
            console.log("sdsds");
            document.getElementById("dropme").style.display = "none";
           // document.getElementById("expr_whole").style.display = "block";
           // document.getElementById("cell_whole").style.display = "none";
          //  document.getElementById("an_whole").style.display = "none";
          //  document.getElementById("banner_right").style.display = "none";
           // document.getElementById("annotate_banner").style.display = "block";
        });

        $('#cell_form_banner').click(function(e) {
            e.preventDefault();
            console.log("sdsds");
            document.getElementById("dropme").style.display = "none";
          //  document.getElementById("expr_whole").style.display = "none";
           //// document.getElementById("cell_whole").style.display = "block";
           // document.getElementById("an_whole").style.display = "none";
          //  document.getElementById("banner_right").style.display = "none";
           /// document.getElementById("annotate_banner").style.display = "block";

        });

        $('#an_form_banner').click(function(e) {
            e.preventDefault();
            console.log("sdsds");
            document.getElementById("dropme").style.display = "none";
           // document.getElementById("expr_whole").style.display = "none";
            //document.getElementById("cell_whole").style.display = "none";
           // document.getElementById("an_whole").style.display = "block";
           // document.getElementById("banner_right").style.display = "none";
           // document.getElementById("annotate_banner").style.display = "block";
        });


        // This is the first point entry for history  so that if user click on annotate button then url will be changed and another sate will 
        // be pushed so if user click back he will come here to this defined first entry in history
        /*window.history.pushState({
            url: "/compounds",
            title: "compounds"
        }, "compounds", "/compounds");

		$('#link').click(function(e) {
			e.preventDefault();
			console.log("sdsds");
		    var $this = $(this),
            url = $this.attr("href"),
            title = $this.text();
		   //window.history.pushState('obj', 'newtitle', '/shifted_t/annotate');
            window.history.pushState({
              url: "/annotate",
            title: "annotate"
            }, 'annotate', '/annotate');
			
		    document.getElementById("dropme").style.display = "none";
		    document.getElementById("table_expr").style.display = "block";
		});

		$(window).on('popstate', function (e) {
			var state = e.originalEvent.state;
			console.log(state);
			if (state !== null) {
				document.title = state.title;
				console.log(state.title);
				if (state.title == "compounds"){
					document.getElementById("dropme").style.display = "block";
					document.getElementById("table_expr").style.display = "none";
				}else{
					document.getElementById("dropme").style.display = "none";
					document.getElementById("table_expr").style.display = "block";
				}
			} 
		});*/
    });
