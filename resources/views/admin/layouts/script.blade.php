<script type="text/javascript">
    selectBtnThis = null;
	$(function(){

        $('.select2-container').addClass('m-t2');


        

        $(document).on('click','.btn-remove-tr', function(e){
            e.preventDefault();
            $(this).closest('tr').remove();
        }); 

		
		$('.timepicker').flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: "h:i K",
            time_24hr: false
        });
		
        $('.timepicker').removeAttr('readonly',false);
		
        $('.timepicker').keydown(function(e) {
			e.preventDefault();
		});
		
        $("*").dblclick(function(e){
		    e.preventDefault();
		    return false;
		});

		$('.table-dt').DataTable({
            "dom": "<'row'<'col-md-6'l><'col-md-6'f>><'row'<'col-md-12't>><'row'<'col-md-6'i><'col-md-6'p>>",
            order : [],
            "aLengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
        });

        $('.table-dt10').DataTable({
            "dom": "<'row'<'col-md-6'l><'col-md-6'f>><'row'<'col-md-12't>><'row'<'col-md-6'i><'col-md-6'p>>",
            order : [],
            "aLengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
        });

        $(document).on('click','.btn-delete', function(e){
			if(confirm('Are you sure you want to delete this?')){
				return true;
			}
			return false;
		});

		$(document).on('click','.btn-status', function(e){
			if(confirm('Are you sure you want to change status?')){
				return true;
			}
			return false;
		});

		$(document).on('click','.btn-confirm', function(e){
			if(confirm('Are you sure?')){
				return true;
			}
			return false;
		});

		$(document).on('click','.read-more-popup-btn', function(event){
        	event.preventDefault();
        	$('#modalFullStringText').html($(this).data('full'));
        	$('#modalFullString').modal('show');
        });

        $(document).on('click','.inline-readmore', function(event){	
        	if($(this).prev().is(":visible")){
        		$(this).prev('.full-string-span').hide();
        		$(this).html('<small>...more</small>');
        	}else{
        		$(this).prev('.full-string-span').show();
        		$(this).html('<small> less</small>');
        	}
        	event.preventDefault();
        });

        $(document).on('click','.read-more-popup-btn', function(event){
        	event.preventDefault();
        	$('#modalFullStringText').html($(this).data('full'));
        	$('#modalFullString').modal('show');
        });

        $(document).on('click','.photo-swipe', function(event){
            var stringAr = $(this).data('photoswipe').split('+');
            var items = [];
            for(var i = 0; i < stringAr.length; i++) { 
                items.push({
                    src     : stringAr[i].split('=')[0], 
                    w       : parseInt(stringAr[i].split('=')[1].split(',')[0]),
                    h       : parseInt(stringAr[i].split('=')[1].split(',')[1])
                });
            }

            myConsole(items);
            var pswpElement = document.querySelectorAll('.pswp')[0];
            var options = {
                // optionName: 'option value'
                // for example:
                shareEl:false,
                index: 0 // start at first slide
            };

            // Initializes and opens PhotoSwipe
            var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();
        });

        
    });
    function master_alert(string){
        PNOTY(string,'error');
        return false;
    }
	function getHeightWidthFromUrl(url) {
		_width = 1024;
		_height = 1024;
	    $("<img/>",{
	        load : function(){
	            _width = this.width;
	            _height = this.height;
	            alert(this.width);
	        },
	        src  : url
	    });
	    return {width : _width,height : _height};
	}


	function showAjaxLoader() {
		$('.ajaxLoader').show();
	}

	function hideAjaxLoader() {
		$('.ajaxLoader').hide();
	}

	function isEmail(email) {
	  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  return regex.test(email);
	}

    function readImageCheckScr(input,id) {
	    if (input.files && input.files[0]) {
	        var FileSize = input.files[0].size / 1024 / 1024; // in MB
	        var extension = input.files[0].name.substring(input.files[0].name.lastIndexOf('.')+1);
	        if (FileSize > 2) {
	            PNOTY("Maxiumum Image Size Is 2 Mb.",'error');
	            input.value = '';
	            return false;
	        }
	        else{
	            if (extension == 'jpg' || extension == 'png' || extension == 'jpeg') {
	                var reader = new FileReader();
	                reader.onload = function (e) {
	                    $("#"+id).attr('src', e.target.result);
	                }
	                reader.readAsDataURL(input.files[0]);
	            }
	            else
	            {
	                PNOTY("Only Allowed '.jpg' OR '.png' OR '.jpeg'",'error');
	                input.value = '';
	                return false;
	            }
	        }
	    }
	}

	function fileExAllowed(input,types) {
        if (input.files && input.files[0]) {
            var FileSize = input.files[0].size / 1024 / 1024; // in MB
            var extension = input.files[0].name.substring(input.files[0].name.lastIndexOf('.')+1);
            if (FileSize > 2) {
                PNOTY("Maxiumum File Size Is 2 Mb.",'error');
                input.value = '';
                return false;
            }else{
                typesAr = types.replaceAll('.','').split(',');
                if (isInArray(typesAr,extension)) {
                    return true;
                }else{
                    PNOTY('Only Allowed '+types+' Extension','error');
                    input.value = '';
                    return false;
                }
            }
        }
    }
    function fileExAllowedVideo(input,types) {
	    if (input.files && input.files[0]) {
	        var FileSize = input.files[0].size / 1024 / 1024; // in MB
	        var extension = input.files[0].name.substring(input.files[0].name.lastIndexOf('.')+1);
	        if (FileSize > 50) {
	            PNOTY("Maxiumum File Size Is 40 Mb.",'error');
	            input.value = '';
	            return false;
	        }else{
	            typesAr = types.replaceAll('.','').split(',');
	            if (isInArray(typesAr,extension)) {
	                return true;
	            }else{
	                PNOTY('Only Allowed '+types+' Extension','error');
	                input.value = '';
	                return false;
	            }
	        }
	    }
	}
	function redirectUrl(url = ""){
		window.location = url;
	}
    function isInArray(array, search){
	    return array.indexOf(search) >= 0;
	}

	
</script>




<script>
    var editor_config = {
        path_absolute : "{{ url('/') }}",
        height: 500,    
        selector: 'textarea.tinymceeditor',
        relative_urls: false,
        plugins: [
              "advlist autolink lists link image charmap print preview hr anchor pagebreak",
              "searchreplace wordcount visualblocks visualchars code fullscreen",
              "insertdatetime media nonbreaking save table directionality",
              "emoticons template paste textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_picker_callback : function(callback, value, meta) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + '/filemanager?editor=tinymce5';
      
              if (meta.filetype == 'image') {
                cmsURL = cmsURL + "&type=Images";
              } else {
                cmsURL = cmsURL + "&type=Files";
              }

            tinyMCE.activeEditor.windowManager.openUrl({
                url : cmsURL,
                title : 'Gallery',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no",
                onMessage: (api, message) => {
                  callback(message.content);
                  myConsole(message);
                }
            });
        }
    };
    tinymce.init(editor_config);

    var editor_config2 = {
        path_absolute : "{{ url('/') }}",
        height: 500,    
        selector: 'textarea.tinymceeditor-nomedia',
        relative_urls: false,
        plugins: [
              "advlist autolink lists link charmap print preview hr anchor pagebreak",
              "searchreplace wordcount visualblocks visualchars code fullscreen",
              "insertdatetime nonbreaking save table directionality",
              "emoticons template paste textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
        relative_urls: false
    };
    tinymce.init(editor_config2);
</script>

<script type="text/javascript">
    @if (Session::has('error'))
        PNOTY('{{ Session::get("error") }}','error');
    @endif
    @if (Session::has('success'))
        PNOTY('{{ Session::get("success") }}','success');
    @endif
</script>