<script src="{{asset('frontend/assets')}}/js/jquery-3.4.1.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/popper.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/isotope.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/photoswipe.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/photoswipe-ui-default.min.js"></script>

<script src="{{asset('frontend/assets')}}/js/jquery.sticky.js"></script>
<script src="{{asset('frontend/assets')}}/js/gallery.js"></script>
<script src="{{asset('frontend/assets')}}/js/infobox.js"></script>


<script src="{{asset('frontend/assets')}}/js/main.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


        ////////////////////////////////////////////////////////
                    /////   single agent comment /////
        ////////////////////////////////////////////////////////
    $(document).ready(function(){
        // alert('ok');
        $(document).on('click', '#singleagentcommentbutton', function(){

            var comment = $('#pxp-agent-comments-review').val();
            // alert(comment);
            var agent_id = $('#commentagentid').val();
            // alert(user_id);
            $.ajax({

                url: "{{route('user.sinlgeagentcomment.add')}}",
                method: "POST",
                data:{
                    agent_id: agent_id,
                    comment : comment,
                },

                success:function(res){

                    if(res.errorComment){
                        alert(res.errorComment);
                    }
                    else if(res.success){
                        console.log(res.success);

                        $('#singleagentcommentallupdate').html(res.commentall);
                        var comment = $('#pxp-agent-comments-review').val('');
                    }
                }

            });
        });

        ////////////////////////////////////////////////////////
              /////  single agent massage from user  /////
        ////////////////////////////////////////////////////////

        $(document).on('click', '#agentmassagefromusersubmitbutton', function(){

            let email = $('#pxp-work-with-email').val();
            // alert(email);
            let phone = $('#pxp-work-with-phone').val();
            // alert(phone);
            let status_id = $('#pxp-work-with-interest').val();
            // alert(status_id);
            let agent_id = $('#pxp-work-with-agent-id').val();
            // alert(agent_id);

            $.ajax({
                url: "{{route('user.sinlgeagentmassage.add')}}",
                method:"POST",
                data:{
                    email:email,
                    phone:phone,
                    status_id:status_id,
                    agent_id:agent_id
                },
                success:function(res){
                    $("#pxp-work-with"+agent_id).modal('hide');
                    $('#massageoutput').html(res.success).delay(2000).fadeOut(400);
                }
            });

        });

        // $(document).on('click', '.post_btn' , function(){
        //     // alert('ok');
        //     // let comment_id = $(this).data('comment-id');
        //     // let value = $('#replyField'+comment_id).val();
        //     // console.log('id', comment_id);
        //     // console.log('value', value);

        //     var user_id = $('#user_id_reply').val();
        //     // alert(user_id);
        //     var comment_id = $(this).val();
        //     var reply = $('#replyField'+comment_id).val();
        //     //    console.log(comment_id);
        //     //    console.log(reply);

        //     $.ajax({

        //         url    : "{{route('user.sinlgeagentcommentreply.add')}}",
        //         method : "POST",
        //         data:{

        //             comment_id : comment_id,
        //             reply      : reply,

        //         },

        //         success:function(res){
        //             alert(res.success)

        //             $('#singleblogcommentupdate').html(res.commentall);
        //         }



        //     });
        // });

        ////////////////////////////////////////////////////////
                    /////   blog post comment /////
        ////////////////////////////////////////////////////////

        $(document).on('click', '.pxp-blog-post-comments-form-btn', function(){
            // alert('ok');

           let comment = $('#pxp-blog-post-comments-reply').val();
           let blogpost_id = $(this).val();

            //    alert(comment);
            //    alert(blogpost_id);

            $.ajax({

                url     : "{{route('singleblogcomment.add')}}",
                method  : "POST",

                data:{
                    comment : comment,
                    blogpost_id : blogpost_id,

                },

                success:function(res) {

                    $('#singleblogcommentupdate').html(res.commentall);
                       alert(res.success);
                }
            });
        })

        ////////////////////////////////////////////////////////
                /////   blog post subscribe /////
        ////////////////////////////////////////////////////////
        $(document).on('click', '#blogpostsubscribebutton', function(){
            // alert('ok');
            let email = $('#blogpostsubscribeemail').val();
            // alert(email);

            $.ajax({

                url: "{{route('user.blogpost.subscribe')}}",
                method  : "POST",

                data:{
                    email : email,
                },
                success:function(res){
                    if(res.emailerror){
                        $('#blogpostsubscribeoutput').html(res.emailerror).delay(2000).fadeOut(400);
                    }
                    else if(res.duplicateerror){
                        $('#blogpostsubscribeoutput').html(res.duplicateerror).delay(2000).fadeOut(400);
                        $('#blogpostsubscribeemail').val('');
                    }
                    else{
                        $('#blogpostsubscribeoutput').html(res.success).delay(2000).fadeOut(400);
                        $('#blogpostsubscribeemail').val('');
                    }
                }

            });

        })

        ////////////////////////////////////////////////////////
                ///// Massage to Admin from user  /////
        ////////////////////////////////////////////////////////

        $(document).on('click', '#pxp-contact-form-btn', function(){
            // alert('ok');
            let name =$('#pxp-contact-form-name').val();
            // alert(name);
            let email =$('#pxp-contact-form-email').val();
            // alert(email);
            let topic_id =$('#pxp-contact-form-reg').val();
            // alert(topic_id);
            let phone =$('#pxp-contact-form-phone').val();
            // alert(phone);
            let message =$('#pxp-contact-form-message').val();
            // alert(message);


            $.ajax({
                url : "{{route('user.massage.admin')}}",
                method :'POST',
                data: {
                    name     : name,
                    email    : email,
                    topic_id : topic_id,
                    phone    : phone,
                    message  : message,

                } ,
                success:function(res){
                    $('#massagefromusertoadmin').html(res.success).delay(2000).fadeOut(400);
                    $('#pxp-contact-form-name').val('');
                    $('#pxp-contact-form-email').val('');
                    $('#pxp-contact-form-reg').val('');
                    $('#pxp-contact-form-phone').val('');
                    $('#pxp-contact-form-message').val('');

                }
            });
        })

    });


</script>
