@extends('layouts.base')

@section('content')
    <head>
    <script type="text/javascript">
         function closethisasap() {
         document.forms["redirectpost"].submit();
          }
    </script>
    </head>

        <body onload="closethisasap();">
            <div class="scg_center">
                <svg version="1.1" x="0" y="0" width="150px" height="150px" viewBox="-10 -10 120 120" enable-background="new 0 0 200 200" xml:space="preserve">
                    <path class="circle" d="M0,50 A50,50,0 1 1 100,50 A50,50,0 1 1 0,50"/>
                </svg>
                <h1>Please wait</h1>
            </div>
             <form name="redirectpost" method="POST" action="{{Config::get('constants.jazzcash.TRANSACTION_POST_URL')}}">

                 @php $post_data = Session::get('post_data'); @endphp
                 {{--/*echo '<pre>';
                 print_r($post_data);
                 echo '</pre>';*/--}}

             @foreach($post_data as $key => $value)
                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
             @endforeach

             </form>
         </body>
     </html>
@endsection
