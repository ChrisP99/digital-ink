@extends('base')

@section('title')
    <title>Home | Digital Ink.</title>
@endsection

@section ('content')


    <div class="banner h-25">

    </div>

    <div id="background">
        <div id="form-wrapper">
            <div id="form1">
                <form action-="{{url('post-login')}}" method="POST">
                    {{csrf_field()}}
                    <label for="Email">Email Address</label>
                    <input type="text" id="inputEmail" name="email" placeholder="Enter Email Address">

                    <label for="Email">Password</label>
                    <input type="password" id="inputPassword" name="password" placeholder="Enter Password">

                    <input type="submit" value="submit" class="button">
                </form>


            </div><div id="form2">
                <form>


                    <label for="Name"> Name</label>
                    <input type="text" placeholder="Enter First Name">

                    <label for="Email">Email Address</label>
                    <input type="email" placeholder="Enter Email Address">

                    <label for="Email">Password</label>
                    <input type="password" id="inputPassword" name="password" placeholder="Enter Password">

                    <input type="submit" value="Submit" class="button">


                </form>
            </div>

        </div>
    </div>


@endsection

