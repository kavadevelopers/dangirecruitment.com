<script>
    function notifyF(msg,type){
        if (type == "msg") {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: msg,
                confirmButtonColor: '#107dac',
            })
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: msg,
                confirmButtonColor: '#107dac',
            })
        }
    }
    // var el = document.querySelector('[class="child-nav"]');
    // window.addEventListener('scroll', function (event) {
        
    //     var rect = el.getBoundingClientRect();
    //     scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
    //     if(rect.top < el.offsetHeight) {
    //         if(!el.classList.contains('fixed')){
    //             el.classList.add('fixed');
    //         }
    //     }else {
    //         el.classList.remove('fixed');
    //     }
    // });
</script>

<script type="text/javascript">
    @if(Session::has('error'))
        notifyF("{{ Session::get('error') }}",'error');
    @endif
    @if(Session::has('success'))
        notifyF("{{ Session::get('success') }}",'msg');
    @endif
</script>