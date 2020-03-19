@extends('base')

@section('additionalHeadInfo')
    <title>About | Digital ink.</title>
@endsection

@section('content')

    <div class="main-body">
        <h1>Let us tell you a story...</h1>
        <br/>

        <div class="about-section">
            We know that books don't just grow on trees!
        </div>

        <br/>

        <div class="about-section">
            Digital ink. was formed in 2020 to establish a creative space for literary minds to join forces from across
            the globe and tell their stories.
        </div>
        <br/>

        <div class="about-section">
            Our team has a combined passion for literature, storytelling and the power of collaboration.
        </div>
        <br/>

        <div class="about-section">
            We want to help you:
        </div>
        <br/>

        <div class="center-element">
            <div class="circle-alignment">
                <div id="imagination" class="circle">
                    to spark your imagination
                </div>
            </div>

            <div class="circle-alignment">
                <div id="platform" class="circle">
                    to provide a <br/>platform
                </div>
            </div>

            <div class="circle-alignment">
                <div id="community" class="circle">
                    to create a community
                </div>
            </div>

            <div class="circle-alignment">
                <div id="journey" class="circle">
                    to support your journey
                </div>
            </div>

            <div class="circle-alignment">
                <div id="talent" class="circle">
                    to hone your <br/>talent
                </div>
            </div>
        </div>
        <br/>

        <div class="about-section">
            We are always here to help - so if you have any issues <a href="/contact"><strong>contact</strong></a> us!
        </div>
        <br/>

        <div class="about-section">
            Just think of us as your digital printing press!
        </div>
        <br/>

        <div class="center-element about-section">
            <h2>So what's your story?</h2>
            <input type="button" class="button-small create-button" onclick="window.location.href='/stories/create'" value="Start your story">
        </div>

    </div>

@endsection
