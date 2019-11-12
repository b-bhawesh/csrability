<div id="ac-wrapper">
   @if(count($userInfo['UserInterest'])>0) 
   <div id="interest-popup" style="display: none;">
   @else
   <div id="interest-popup">
   @endif
        <center>
         <main id="content">
            <div class="container mt-5 custom-profile">
               <div class="row">
                  <div class="col-md-12 text-center">
                     <h1>Interest Area</h1>
                     <h2>Select the topic you are interested in to help us personalize your CSR ability experience.</h2>
                  </div>
               </div>
                   
                <form action="{{ route("updateProfile.update") }}" method="post" enctype="multipart/form-data">
                  @csrf()
                  <div class="row">
                     <div class="col-md-3">
                        <div style="background-image: url({{asset('assets/img/12.jpg')}});" class="profile-image text-center"> 
                           <input class="styled-checkbox" name="interest_area[]" id="styled-checkbox-1" type="checkbox" value="Environment & Natural Resources" checked>
                           <label for="styled-checkbox-1"></label>
                        </div>
                        <p>Environment & Natural Resources</p>
                     </div>

                     <div class="col-md-3">
                        <div style="background-image: url({{asset('assets/img/3.jpg')}});" class="profile-image text-center">
                           <input class="styled-checkbox" name="interest_area[]" id="styled-checkbox-2" type="checkbox" value="Economic Development">
                           <label for="styled-checkbox-2"></label>
                        </div>
                        <p>Economic Development</p>
                     </div>

                     <div class="col-md-3">
                        <div style="background-image: url({{asset('assets/img/8.jpg')}});" class="profile-image text-center">
                           <input class="styled-checkbox" name="interest_area[]" id="styled-checkbox-3" type="checkbox" value="Funding">
                           <label for="styled-checkbox-3"></label>
                        </div>
                        <p>Funding</p>
                     </div>

                     <div class="col-md-3">
                        <div style="background-image: url({{asset('assets/img/10.jpg')}});" class="profile-image text-center">
                           <input class="styled-checkbox" name="interest_area[]" id="styled-checkbox-4" type="checkbox" value="Careers & Education">
                           <label for="styled-checkbox-4"></label>
                        </div>
                        <p>Careers & Education</p>
                     </div>

                     <div class="col-md-3">
                        <div style="background-image: url({{asset('assets/img/11.jpg')}});" class="profile-image text-center">
                           <input class="styled-checkbox" name="interest_area[]" id="styled-checkbox-5" type="checkbox" value="Agriculture & Rural Development">
                           <label for="styled-checkbox-5"></label>
                        </div>
                        <p>Agriculture & Rural Development</p>
                     </div>

                     <div class="col-md-3">
                        <div style="background-image: url({{asset('assets/img/14.jpg')}});" class="profile-image text-center">
                           <input class="styled-checkbox" name="interest_area[]" id="styled-checkbox-6" type="checkbox" value="Banking & Finance">
                           <label for="styled-checkbox-6"></label>
                        </div>
                        <p>Banking & Finance</p>
                     </div>

                     <div class="col-md-3">
                        <div style="background-image: url({{asset('assets/img/4.jpg')}});" class="profile-image text-center">
                           <input class="styled-checkbox" name="interest_area[]" id="styled-checkbox-7" type="checkbox" value="Trade & Policy">
                           <label for="styled-checkbox-7"></label>
                        </div>
                        <p>Trade & Policy</p>
                     </div>

                     <div class="col-md-3">
                        <div style="background-image: url({{asset('assets/img/13.jpg')}});" class="profile-image text-center">
                           <input class="styled-checkbox" name="interest_area[]" id="styled-checkbox-8" type="checkbox" value="Global Health">
                           <label for="styled-checkbox-8"></label>
                        </div>
                        <p>Global Health</p>
                     </div>

                     <div class="col-md-3">
                        <div style="background-image: url({{asset('assets/img/9.jpg')}});" class="profile-image text-center">
                           <input class="styled-checkbox" name="interest_area[]" id="styled-checkbox-9" type="checkbox" value="Energy">
                           <label for="styled-checkbox-9"></label>
                        </div>
                        <p>Energy</p>
                     </div>

                     <div class="col-md-3">
                        <div style="background-image: url({{asset('assets/img/7.jpg')}});" class="profile-image text-center">
                           <input class="styled-checkbox" name="interest_area[]" id="styled-checkbox-10" type="checkbox" value="Infrastructure">
                           <label for="styled-checkbox-10"></label>
                        </div>
                        <p>Infrastructure</p>
                     </div>

                     <div class="col-md-3">
                        <div style="background-image: url({{asset('assets/img/15.jpg')}});" class="profile-image text-center">
                           <input class="styled-checkbox" name="interest_area[]" id="styled-checkbox-11" type="checkbox" value="Private Sector">
                           <label for="styled-checkbox-11"></label>
                        </div>
                        <p>Private Sector</p>
                     </div>

                     <div class="col-md-3">
                        <div style="background-image: url({{asset('assets/img/6.jpg')}});" class="profile-image text-center">
                           <input class="styled-checkbox" name="interest_area[]" id="styled-checkbox-12" type="checkbox" value="Institutional Development">
                           <label for="styled-checkbox-12"></label>
                        </div>
                        <p>Institutional Development</p>
                     </div>

                     <div class="col-md-3">
                        <div style="background-image: url({{asset('assets/img/5.jpg')}});" class="profile-image text-center">
                           <input class="styled-checkbox" name="interest_area[]" id="styled-checkbox-13" type="checkbox" value="Water & Sanitation">
                           <label for="styled-checkbox-13"></label>
                        </div>
                        <p>Water & Sanitation</p>
                     </div>

                     <div class="col-md-3">
                        <div style="background-image: url({{asset('assets/img/1.jpg')}});" class="profile-image text-center">
                           <input class="styled-checkbox" name="interest_area[]" id="styled-checkbox-14" type="checkbox" value="Trade & Policy">
                           <label for="styled-checkbox-14"></label>
                        </div>
                        <p>Trade & Policy</p>
                     </div>

                     <div class="col-md-3">
                        <div style="background-image: url({{asset('assets/img/2.jpg')}});" class="profile-image text-center">
                           <input class="styled-checkbox" name="interest_area[]" id="styled-checkbox-15" type="checkbox" value="Project Managment">
                           <label for="styled-checkbox-15"></label>
                        </div>
                        <p>Project Managment</p>
                     </div>

                     <div class="col-md-3">
                        <div style="background-image: url({{asset('assets/img/12.jpg')}});" class="profile-image text-center">
                           <input class="styled-checkbox" name="interest_area[]" id="styled-checkbox-16" type="checkbox" value="Media & Communication">
                           <label for="styled-checkbox-16"></label>
                        </div>
                        <p>Media & Communication</p>
                     </div>
                  </div>
                  <input type="submit" class="btn btn-primary mb-5 btn-lg" value="Submit" name="btn_btn_add_product">
               </form>                  
            </div>
         </main>               
        </center>
    </div>
</div>

@extends('front.template.master')
@section('content')

<main id="content">

   <div class="container mt-5">

     <div class="row">

       <div class="col-md-8 px-5">



         <!--div class="row progress-section">

           <div class="col-md-12 progress-area">

             <h5> Profile Completeness </h5>

             <div class="progress">

               <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%">

                 <p style="left: 25%;"> 25% </p>

               </div>                    

             </div>

             <p class="complete-progress"> 100% </p>

           </div>



           <div class="col-md-12">

             <div class="row pt-4">

               <div class="col-md-6">

                 <div class="row">

                   <div class="col-4 text-right">

                     <h2> 13 </h2>

                   </div>

                   <div class="col-8 text-left">

                     <h4> Profile Views </h4>

                     <p> in last 30 days</p>

                   </div>

                 </div>

               </div>

               <div class="col-md-6">

                 <div class="row">

                   <div class="col-4 text-right">

                     <h2> 45 </h2>

                   </div>

                   <div class="col-8 text-left">

                     <h4> Search Appearances </h4>

                     <p> in last 30 days</p>

                   </div>

                 </div>

               </div>

             </div>

           </div>

         </div-->


         <div class="row personal-section mt-0">
           <div class="col-md-8 text-left">
             <h5> Fetch details from LinkedIn </h5>
           </div>
           <div class="col-md-4 text-right">
             <button class="btn btn-primary"> Fetch </button>
           </div>
         </div>
         <div class="row personal-section">

           <div class="col-md-8 text-left">

             <h5> Personal Information </h5>

           </div>

           <div class="col-md-4 text-right button1">

             <button class="btn-edit btn btn-preview"> Edit </button>
            <button class="btn-save btn btn-preview hide"> Save </button>
           </div>

           <div class="col-md-12 edit1">

             <div class="row">

               <div class="col-md-2">
                
            
               {{-- 
               @if($userInfo->facebook_id)
                 <img src="//graph.facebook.com/{{$userInfo->facebook_id}}/picture">
                 @else
                 <img src="{{asset('assets/img/nophoto.jpeg')}}">
                 @endif
               --}}
           
               <img src="
                  @if(auth()->user()->user_image !="") 
                     {{ asset('uploads/'.auth()->user()->user_image)}} 
                  @else 
                  {{ asset('assets/img/nophoto.jpeg')}} 
                  @endif
               ">
               <input type="file" name="user-image"/>
               </div>

               <div class="col-md-10">

                 <h2 class="user-name">{{$userInfo->name}}</h2>

                 <p class="user-location mt-4">{{$userInfo->location}}</p>

               </div>

             </div>

           </div>

         </div>



         <div class="row personal-section">

           <div class="col-md-8 text-left">

             <h5> Professional Summary </h5>

           </div>

           <div class="col-md-4 text-right button2">

             <button class="btn-edit1 btn btn-preview"> Edit </button>
            <button class="btn-save1 btn btn-preview hide"> Save </button>

           </div>

           <div class="col-md-12 edit2">

             <div class="row">

               <div class="col-md-5">

                 <p>Years of Exp. : <span class="exp-years">{{$userInfo->expyear}}</span>  years</p>

                 <p>Availability : <span class="avail">{{$userInfo->avail}}</span></p>

               </div>

               <div class="col-md-6">

                 <p>Citizenships : <span class="citizen">{{$userInfo->citizen}}</span></p>

                 <p>Languages : <span class="language">{{$userInfo->language}}</span></p>

               </div>

             </div>

           </div>

         </div>



         <div class="row personal-section">

           <div class="col-md-8 text-left">

             <h5> Skills & Expertise </h5>

           </div>

           <div class="col-md-4 text-right button3">

             <button class="btn-edit2 btn btn-preview"> Edit </button>
            <button class="btn-save2 btn btn-preview hide"> Save </button>

           </div>

           <div class="col-md-12 edit3">

             <p>Skills : <span class="skills">{{$userInfo->skills}}</span></p>

             <p>Area of Expertise : <span class="expertise">{{$userInfo->expertise}}</span></p>

           </div>

         </div>


         <div class="row personal-section">

           <div class="col-md-8 text-left">

             <h5> Contact Details </h5>

           </div>

           <div class="col-md-4 text-right button4">

             <button class="btn-edit3 btn btn-preview"> Edit </button>
            <button class="btn-save3 btn btn-preview hide"> Save </button>

           </div>

           <div class="col-md-12 edit4">

             <p>Email Id : <span class="email">{{$userInfo->email}}</span></p>

             <p>Contact No. : <span class="contact">{{$userInfo->contact}}</span></p>

           </div>

         </div>

         <div class="row personal-section mb-5">

           <div class="col-md-8 text-left">

             <h5> Reference </h5>

           </div>

           <div class="col-md-4 text-right button5">

             <button class="btn-edit4 btn btn-preview"> Edit </button>
            <button class="btn-save4 btn btn-preview hide"> Save </button>

           </div>

           <div class="col-md-12 edit5">

             <p>Reference : <span class="referrer">{{$userInfo->referrer}}</span></p>

           </div>

         </div>
         
       </div>



       <div class="col-md-4">

         <div class="sidebar-area">

           <h5> Contact Details </h5>

           <a href="#"> <p> Professional Experience </p> </a>

           <a href="#"> <p> Professional Summary </p> </a>

           <a href="#"> <p> Skills & Expertise </p> </a>

           <a href="#"> <p> References </p> </a>

           <a href="#"> <p> Contact Details </p> </a>

         </div>

       </div>

     </div>

   </div>

</main>

<script src="{{asset('assets/js/jQuery.3.3.1.min.js')}}"></script>

<script type="text/javascript">
   $('.btn-edit').on('click', function(){
      let $this = $(this);

      $this.parents('.button1 ').siblings('.edit1').find('h2.user-name').prop('contenteditable', true);
      $this.parents('.button1 ').siblings('.edit1').find('p.user-location').prop('contenteditable', true);

      $this.addClass('hide');
      $this.parents('.button1').find('.btn-save').removeClass('hide');

   });

   $('.btn-save').on('click', function(){

      let $this = $(this);
      var name = $('.user-name').html();
      var location = $('.user-location').html();


      $.ajax({
         'url' : "{{ route('profile.save') }}",
         'type' :'post',
         'data':{'name':name, 'location':location, '_token': "{{ csrf_token() }}" },
         success : function(data){
            console.log(data.message);

            $this.addClass('hide');
            $this.parents('.button1').find('.btn-edit').removeClass('hide');
         }

      })
   });


   $('input[type="file"][name="user-image"]').on("change", function(e){

   console.log($(this)[0].files[0]);
   var formData = new FormData();
   formData.append('user-image', $(this)[0].files[0]);
   formData.append('_token', "{{ csrf_token() }}");

   $.ajax({
      type:'POST',
      url: "{{ route("profile.image.save") }}",
      data:formData,
      cache:false,
      contentType: false,
      processData: false,
      success:function(data){
          console.log("success");
          console.log(data);
      },
      error: function(data){
          console.log("error");
          console.log(data);
      }
  });


})



</script>


<script type="text/javascript">
   $('.btn-edit1').on('click', function(){
      let $this = $(this);

      $this.parents('.button2 ').siblings('.edit2').find('span.exp-years').prop('contenteditable', true);
      $this.parents('.button2 ').siblings('.edit2').find('span.avail').prop('contenteditable', true);
      $this.parents('.button2 ').siblings('.edit2').find('span.citizen').prop('contenteditable', true);
      $this.parents('.button2 ').siblings('.edit2').find('span.language').prop('contenteditable', true);

      $this.addClass('hide');
      $this.parents('.button2').find('.btn-save1').removeClass('hide');

   });

   $('.btn-save1').on('click', function(){

      let $this = $(this);
      var expyear = $('.exp-years').html();
      var avail = $('.avail').html();
      var citizen = $('.citizen').html();
      var language = $('.language').html();


      $.ajax({
         'url' : "{{ route('profile1.save') }}",
         'type' :'post',
         'data':{'expyear':expyear, 'avail':avail, 'citizen':citizen, 'language':language, '_token': "{{ csrf_token() }}" },
         success : function(data){
            console.log(data.message);

            $this.addClass('hide');
            $this.parents('.button2').find('.btn-edit1').removeClass('hide');
         }

      })
   });

</script>

<script type="text/javascript">
   $('.btn-edit2').on('click', function(){
      let $this = $(this);

      $this.parents('.button3 ').siblings('.edit3').find('span.skills').prop('contenteditable', true);
      $this.parents('.button3 ').siblings('.edit3').find('span.expertise').prop('contenteditable', true);

      $this.addClass('hide');
      $this.parents('.button3').find('.btn-save2').removeClass('hide');

   });

   $('.btn-save2').on('click', function(){

      let $this = $(this);
      var skills = $('.skills').html();
      var expertise = $('.expertise').html();


      $.ajax({
         'url' : "{{ route('profile2.save') }}",
         'type' :'post',
         'data':{'skills':skills, 'expertise':expertise, '_token': "{{ csrf_token() }}" },
         success : function(data){
            console.log(data.message);

            $this.addClass('hide');
            $this.parents('.button3').find('.btn-edit2').removeClass('hide');
         }

      })
   });

</script>

<script type="text/javascript">
   $('.btn-edit3').on('click', function(){
      let $this = $(this);

      $this.parents('.button4 ').siblings('.edit4').find('span.contact').prop('contenteditable', true);
      $this.parents('.button4 ').siblings('.edit4').find('span.email').prop('contenteditable', true);

      $this.addClass('hide');
      $this.parents('.button4').find('.btn-save3').removeClass('hide');

   });

   $('.btn-save3').on('click', function(){

      let $this = $(this);
      var contact = $('.contact').html();
      var email = $('.email').html();


      $.ajax({
         'url' : "{{ route('profile3.save') }}",
         'type' :'post',
         'data':{'contact':contact, 'email':email, '_token': "{{ csrf_token() }}" },
         success : function(data){
            console.log(data.message);

            $this.addClass('hide');
            $this.parents('.button4').find('.btn-edit3').removeClass('hide');
         }

      })
   });

</script>


<script type="text/javascript">
   $('.btn-edit4').on('click', function(){
      let $this = $(this);

      $this.parents('.button5 ').siblings('.edit5').find('span.referrer').prop('contenteditable', true);

      $this.addClass('hide');
      $this.parents('.button5').find('.btn-save4').removeClass('hide');

   });

   $('.btn-save4').on('click', function(){

      let $this = $(this);
      var referrer = $('.referrer').html();


      $.ajax({
         'url' : "{{ route('profile4.save') }}",
         'type' :'post',
         'data':{'referrer':referrer, '_token': "{{ csrf_token() }}" },
         success : function(data){
            console.log(data.message);

            $this.addClass('hide');
            $this.parents('.button5').find('.btn-edit4').removeClass('hide');
         }

      })
   });

</script>

@endsection



